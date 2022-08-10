<?php
    include('../../config.php');
    extract($_POST);
       $uploaddir = '../news_images/';
      $uploadfile = $uploaddir . basename($_FILES['attachment']['name']);
    move_uploaded_file($_FILES['attachment']['tmp_name'],$uploadfile);
    $flname="news_images/".basename($_FILES["attachment"]["name"]);
    mysqli_query($con,"insert into  app_movie values(NULL,NULL,'$name','$cast','$description','$date','$flname',NULL,'1',NULL,NULL)");
    $_SESSION['add']=1;
    header('location:add_movie_news.php');
?>