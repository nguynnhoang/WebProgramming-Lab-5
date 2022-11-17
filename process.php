<?php
    require_once('connection.php');
    session_start();


    if(isset($_POST['Login'])) {
        if(empty($_POST['userName']) || empty($_POST['userPass'])) {
            header("location:index.php?Empty=Please fill in the blanks");
        }
        else {
            $query="select * from entries where userName='".$_POST['userName']."' and userPass='".$_POST['userPass']."'";
            $result=mysqli_query($con,$query);
            if(mysqli_fetch_assoc($result)) {
                $_SESSION['User']=$_POST['userName'];
                header("location:welcome.php");
            }
            else {
                header("location:index.php?Invalid=Please enter correct user name or password");
            }
        }
    }
    else {
        echo 'Not working';
    }
?>