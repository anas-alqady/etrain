<?php

include_once ("../include/config.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['email']) && isset($_POST['email']) && ($_POST['email'] == "Admin2020@gmail.com")){
        $email = htmlspecialchars($_POST['email']);
}else{
    header("location:login-admin.php");
}

if(!empty($_POST['password']) && isset($_POST['password']) && ($_POST['password'] == "0787606068")){
    $password = htmlspecialchars($_POST['password']);
}
else{
    header("location:login-admin.php");
}
$id=$_POST['id'];
if($id != 1) {
    header("location:login-admin.php");
}

$password = md5($password);
$query = "SELECT id FROM users WHERE email ='$email' AND password ='$password' ";
$execute= $mysql->query($query);

if ($execute->num_rows === 1 ) {
    $_SESSION['user'] = $execute->fetch_assoc()["id"]; // 11
    header("location: http://localhost/project-forms/admen1.php");
}
else {
    header("location: http://localhost/project-forms/login-admin.php");
}}


