<?php
    extract($_POST);
    include('../../config.php');
    $w=mysqli_query($con,"select * from app_time_slot where screen_id='$id'");
    ?>
    <option value="0">Select Show</option>
    <?php
    while($sh=mysqli_fetch_array($w))
    {
        ?>
        <option value="<?php echo $sh['st_id'];?>"><?php echo $sh['name'];?></option>
        <?php
    }
?>