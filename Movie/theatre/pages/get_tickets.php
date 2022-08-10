
<div class="panel panel-default">
            <div class="panel-body" id="disp"><?php
    extract($_POST);
    //print_r($_POST);
    include('../../config.php');
    $w=mysqli_query($con,"select * from app_show where st_id='$id' and r_status='1'");
    
    if(mysqli_num_rows($w)) {
    $swt=mysqli_fetch_array($w);
    $qq=mysqli_query($con,"select * from app_booking where show_id='".$swt['s_id']."' ");
    if(mysqli_num_rows($qq))
    {
        $m=mysqli_query($con,"select * from app_movie where movie_id='".$swt['movie_id']."'");
        $movie=mysqli_fetch_array($m);
        ?>
        
         <h3><small>Movie : </small><?php echo $movie['movie_name'];?></h3>
        <table class="table">
            <th>
                Slno
            </th>
            <th>
                Ticket id
            </th>
            <th>
                Viewer Name
            </th>
            <th>
                Phone
            </th>
            <th>
                Number of Tickets
            </th>
        <?php
    $sl=1;
    while($sh=mysqli_fetch_array($qq))
    {
        $us=mysqli_query($con,"select * from app_user where user_id='".$sh['user_id']."'");
        //print_r($us);
        //print_r($sh);
        $user=mysqli_fetch_array($us);
        
        ?>
        <tr>
            <td><?php echo $sl; $sl++;?></td>
            <td><?php echo $sh['ticket_id'];?></td>
            <td><?php echo $user['name'];?></td>
            <td><?php echo $user['phone'];?></td>
            <td><?php echo $sh['no_seats'];?></td>
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
        <h3>No Show</h3>
        <?php
    }
}
    else {
        ?>
        <h3>No Show</h3>
        <?php
}

?></div>
          </div>