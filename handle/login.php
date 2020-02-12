<?php
include_once ("../include/config.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['email']) && isset($_POST['email']))
        $email = htmlspecialchars($_POST['email']);
    }else{
        header("location:login.php");
    }
    if(!empty($_POST['password']) && isset($_POST['password'])){
        $password = htmlspecialchars($_POST['password']);
    }else{
        header("location:login.php");
    }

    $password = md5($password);
    $query = "SELECT id FROM users WHERE email ='$email' AND password ='$password' "; //11
//$query_adm= "SELECT users FROM id='1'";
    $execute= $mysql->query($query);
//    $execute_adm=$mysql->query($query_adm);
//    if(!isset($execute_adm))
//    {
//        $_SESSION['user'] = $execute->fetch_assoc()["id"]; // 11
//        header("location:http://hocalhost/hemmah-1/admen1.php");
//    }
//    else
    if ($execute->num_rows === 1 ) {
        $_SESSION['user'] = $execute->fetch_assoc()["id"]; // 11
                header("location: http://localhost/hemmah-1");
    }
    else{
        header("location: http://localhost/hemmah-1/login.php");
    }























//    $query = "SELECT id FROM users WHERE email = ? AND password = ?";
//    $stet = $mysql->prepare($query);
//    $stet->bind_param("ss",$p1,$p2);
//    $p1 = $email;
//    $p2 = md5($password);

//}    $query = "SELECT id FROM users WHERE email =? AND password =?"; //11
////    $stet ="SELECT id FROM users WHERE email =? AND password =?";;
////    $p1 = $email;
//////    $p2 = md5($password);
//////    $stet->bind_param("ss",$p1,$p2);