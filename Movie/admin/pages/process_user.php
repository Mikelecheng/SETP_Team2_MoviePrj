<?php
    include('../../config.php');
    extract($_POST);
    //print_r($_POST);
    //print_r($con);
    session_start();

    
    if (isset($_POST['add_username'])){
        $qry=mysqli_query($con,"select * from app_user where username = '$add_username'");
        if(mysqli_num_rows($qry)) {
            $_SESSION['error']="User exist!";
        } 
        else {
            mysqli_query($con,"insert into app_user values(NULL,$add_cid,'$add_username','$add_psw',$add_usertype,' ',' ',' ',0,' ')");
            $_SESSION['success']="User added successfully";  
        }    
    }
    else {
        if (isset($_POST['upd_username'])) {
            //print_r($_POST['upd_username']);
            $qry1=mysqli_query($con,"select * from app_user where username = '$add_username'");
            if(mysqli_num_rows($qry1)) {
                mysqli_query($con,"update app_user set cinema_id = $upd_cid, password = '$upd_psw', user_type = $upd_usertype where username = '$upd_username'");
                $_SESSION['success']="User updated successfully";
            }
            else {
                $_SESSION['error']="User does not exist! Please add new User!";
            }
            //mysqli_query($con,"update app_user set cimema_id = $upd_cid, password = '$upd_psw', user_type = $upd_usertype where username = '$upd_username')");
            
        }
        else {
            if (isset($_GET['username'])) {
                print_r($_GET['username']);
                mysqli_query($con,"delete  from app_user where username='".$_GET['username']."'");
                $_SESSION['success']="User deleted successfully";
                header('location:user.php');
            }
            else{
                $_SESSION['error']="Action failed!";
            }
        }
    }
    header('location:user.php');
?>