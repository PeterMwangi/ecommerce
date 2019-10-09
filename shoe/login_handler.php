<?php



if(isset($_SESSION['login'])){
    header("location:index.php");
}
$email=$password_1=$id='';
$email_err = $password_1_err='';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password_1 =$_POST['password_1'];
    if(empty($email)){
        header('location:login.php?email_err');
        exit();
    }else{
        $email = $email;
    }

    if(empty($password_1)){
        header('location:login.php?password_1_err');
        exit();
    }else{
        $password_1 = md5($password_1);
    }
    include  'config.php';
    $sql = "SELECT * FROM `user` WHERE email='$email' AND password='$password_1'";
    $results = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($results);
    $id = $user["id"];
    if(!$user){
        header("location:index.php");
    }else{

        $_SESSION['login'] = true;
        $_SESSION['id'] = $id;
        header("location:index.php?u_email=$email");
    }
}


