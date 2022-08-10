<?php
include('header.php');
?>
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Upcoming Movie List
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Upcoming Movie List</li>
        </ol>
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="tools">
                  <button class="" onclick="del()">Add Movie</button>
                </div>
            </div>
            <div class="box-body">
                <?php
          $sw=mysqli_query($con,"select * from app_movie where status = 1");
          if(mysqli_num_rows($sw))
          {?>
                <table class="table">
                    <th class="col-md-1">
                        Theatre No.
                    </th>
                    <th class="col-md-2">
                        Name
                    </th>
                    <th class="col-md-3">
                        Cast
                    </th>
                    <th class="col-md-4">
                        Description
                    </th>
                    <th class="col-md-5">
                        Date
                    </th>
                    <?php
              while($ci=mysqli_fetch_array($sw))
              {
                ?>
                    <tr>
                        <td>
                            <?php echo $ci['cinema_id']; ?>
                        </td>
                        <td>
                            <?php echo $ci['movie_name']; ?>
                        </td>
                        <td>
                            <?php echo $ci['cast']; ?>
                        </td>
                        <td>
                            <?php echo $ci['desc']; ?>
                        </td>
                        <td>
                            <?php echo $ci['release_date']; ?>
                        </td>
                    </tr>
                    <?php
              }
              ?>
                </table>
                <?php
          }
          else
          {
            ?>
                <h3>No Upcoming Movie Added</h3>
                <?php
          }
          ?>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<?php
include('footer.php');
?>
<script>
function del()
    {

        window.location="add_movie_news.php";
    }
    </script>