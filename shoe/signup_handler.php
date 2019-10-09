<?php

$firstname=$lastname=$email=$password='';
$firstname_err=$lastname_err=$email_err=$password_1_err=$password_2_err=$no_match='';
$errors = array();

if (isset($_POST['signup'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    if(empty($firstname)){
        header('location:signup.php?firstname_err');
        exit();
    }else{
        $firstname = $firstname;
    }

    if(empty($lastname)){
        header('location:signup.php?lastname_err');
        exit();
    }else{
        $lastname = $lastname;
    }

    if(empty($email)){
        header('location:signup.php?email_err');
        exit();
    }else{
        $email = $email;
    }

    if(empty($password_1)){
        header('location:signup.php?password_1_err');
        exit();
    }else{
        $password_1 = $password_1;
    }

    if(empty($password_2)){
        header('location:signup.php?password_2_err');
        exit();
    }else{
        $password_2 = $password_2;
    }

    if($password_1!=$password_2){
        header('location:signup.php?no_match');
        exit();
    }else{
        $password_1 =md5($password_1);
    }


    include 'config.php';
//    check if the user exists in the database
    $sql= "SELECT * FROM `user` WHERE email='$email'";
    $results = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($results);

    if($user){
        $_SESSION['user_err'] = "User with the given credentials already exists";
        header("location:signup.php");

    }else{
        $sql = "INSERT INTO `user`(`id`, `firstname`, `lastname`, `email`, `password`) VALUES (null,'$firstname','$lastname','$email','$password_1')";
        mysqli_query($conn,$sql);
        header("location:login.php");

        $_SESSION['email'] = $email;
    }

}

