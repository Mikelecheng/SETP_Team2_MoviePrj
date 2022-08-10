<?php
    include('../../config.php');
    extract($_POST);
    mysqli_query($con,"insert into  app_cinemas values(NULL,'$name','$address','$place','$state','$pin')");
    $id=mysqli_insert_id($con);
    mysqli_query($con,"insert into  app_user values(NULL,'$id','$username','$password','1',NULL,NULL,NULL,NULL,NULL)");
    header('location:add_theatre_2.php?id='.$id);
?>