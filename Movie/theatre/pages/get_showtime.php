 <?php
 include('../../config.php');
    $sr=mysqli_query($con,"select * from app_time_slot where screen_id='".$_POST['screen']."'");
    if(mysqli_num_rows($sr))
    {
        while($time=mysqli_fetch_array($sr))
        {
            ?>
            <option value="<?php echo $time['st_id'];?>"><?php echo $time['name']."( ".$time['start_time']." )";?></option>
            <?php
        }
    }
    else {
        ?>
        <option disabled>No Show time added in selected screen</option>
        <?php
    }
    ?>