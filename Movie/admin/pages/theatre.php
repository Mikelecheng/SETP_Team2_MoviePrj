<?php
include('header.php');
?>
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Theatre List
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Theatre List</li>
        </ol>
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="tools">
                  <button class="" onclick="del()">Add Theatre</button>
                </div>
            </div>
            <div class="box-body">
                <?php
          $sw=mysqli_query($con,"select * from app_cinemas");
          if(mysqli_num_rows($sw))
          {?>
                <table class="table">
                    <th class="col-md-1">
                        No.
                    </th>
                    <th class="col-md-2">
                        Name
                    </th>
                    <th class="col-md-3">
                        Address
                    </th>
                    <th class="col-md-4">
                        Place
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
                            <?php echo $ci['name']; ?>
                        </td>
                        <td>
                            <?php echo $ci['address']; ?>
                        </td>
                        <td>
                            <?php echo $ci['place']; ?>
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
                <h3>No Theatre Added</h3>
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

        window.location="add_theatre.php";
    }
    </script>