<?php
include_once ('../include/config.php');

//print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['email']) && !empty($_POST['email']))
        $email =htmlspecialchars($_POST['email']);
     else
        header("location:register.php");

    if (isset($_POST['username']) && !empty($_POST['username'])){
        $username =htmlspecialchars($_POST['username']);
    } else {
        header("location:register.php");
    }
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password =htmlspecialchars($_POST['password']);
    } else {
        header("location:register.php");
    }
    if (isset($_POST['major']) && !empty($_POST['major'])) {
        $major =htmlspecialchars($_POST['major']);
    } else {
        header("location:register.php");
    }
    if (isset($_POST['sector']) && !empty($_POST['sector'])) {
        $sector = htmlspecialchars($_POST['sector']);
    } else {
        header("location:register.php");
    }
    if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $phone = htmlspecialchars($_POST['phone']);
    } else {
        header("location:register.php");
    }
    if (isset($_POST['dofaa']) && !empty($_POST['dofaa'])) {
        $dofaa = htmlspecialchars($_POST['dofaa']);
    } else {
        header("location:register.php");
    }
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["image"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    if (isset($_FILES['image']) && !empty($_FILES['image'])) {
        $image = $_FILES['image'];
    } else {
        header("location:register.php");
    }


    $query = "SELECT * FROM users WHERE email ='$email'  "; //11
    $execute = $mysql->query($query);

    if ($execute->num_rows === 1) {
        header("location:/hemmah-1/register.php");
    } else {
        $password = md5($password);
        $query = "INSERT INTO users (username,email,password,phone,major,sector,dofaa,image) VALUES('$username','$email','$password','$phone','$major','$sector','$dofaa','$image')";
        $mysql->prepare($query)->execute();
        $_SESSION['user'] = $execute->fetch_assoc()["id"]; // 11
        header("location:http://localhost/project-forms/index.php");

    }

}
