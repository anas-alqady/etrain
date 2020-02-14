<?php
include_once('include/config.php');
include_once ('include/functions.php');

if(!isset($_SESSION['user']))
{
    header("location:http://localhost/hemma-1/login.php");
    die;
}

$id=$_SESSION['user'];

$query="SELECT * FROM users WHERE id='$id'";
$execute=$mysql->query($query);
$results = $execute->fetch_all();
$users=$results;

$query_form="SELECT * FROM forms where user_id='$id'";
$execut=$mysql->query($query_form);
$result_form = $execut->fetch_all();
$forms=$result_form;

header('Content-Type: text/html; charset=utf-8');

?>

<html>
<head>
    <link rel="stylesheet" href="theme/css/style.css">
    <link rel="stylesheet" href="theme/css/bootstrab">
    <link rel="stylesheet" href="theme/css/bootstrab/bootstrap.css">
    <link rel="stylesheet" href="theme/js/bootstrap.js">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>
        profile
    </title>
</head>
<body>
<section class="position-sticky" style="top:0;z-index: 1071; min-height: 2rem">
    <ul class="nav nav-tabs  justify-content-between pl-5 pr-5" style="background: #37009a">
        <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" style="color: red" aria-haspopup="true" aria-expanded="false">Option</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#section1">المشاركات الداخلية </a>
                <a class="dropdown-item" href="#section2">المشاركة العملية </a>
                <a class="dropdown-item" href="#section3">المشاركة في الأنشطة والفعاليات </a>
                <a class="dropdown-item" href="#section4">المهارات الشخصية </a>
                <div class="dropdown-divider" >Section3 </div>
                <a class="dropdown-item" href="handle/logout.php">logout</a>

            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profile.php" style="color: white">profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="index.php" style="color: white"> CV</a>
        </li>
        <li> <div class="nav-link  p-2" style="color:white;">  <?php echo getUserName($_SESSION['user']) ?> أهلأ بك يا صاحب الهمة</div></li>
        <li style="place-self: center"> <div class=""><a href="profile.php"><?php echo getUserName($_SESSION['user']) ?></a></li>
        <li><img src="/logo.png" alt="" style="width: 4rem;height: 3rem"></li>
    </ul>
</section>

<!------ Include the above in your HEAD tag ---------->
<!------ Include the above in your HEAD tag ---------->
<section class="container main-secction info ">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 image-section">
            <img class="img-fluid" src="image/img4.jpg"  >
        </div>
        <div class="row user-left-part">
            <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                <div class="row ">
                    <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                        <img src="image/prof5.png" class="rounded-circle img-fluid">
                    </div>
                    <h4 style="align-items: center;text-align: center;margin-left: 5.1rem;margin-top: 1rem">
                        <?php echo getUserName($id)?>
                    </h4>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                <div class="row profile-right-section-row">
                    <div class="col-md-12 profile-header">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                <h1><?php echo getUserName($id)?> </h1><h>
                                </h>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-rigth text-center">
                                <a href="index.php" class=" btn-info btn-block"><p style="font-size: 1.5rem"> CV الهمة</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row ">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item ">
                                        <a class="nav-link active " style="" > Perfil Profesional</a>
                                    </li>
                                </ul>
                                <?php foreach ($users as $user) { ?>
                                <div class="">
                                    <div  class="" id="">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">my name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $user[0]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $user[1]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">sector</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $user[3]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">major</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $user[4]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">phone number </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $user[5]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">الدفعة </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $user[6];} ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <?php  foreach ($forms as $form) {
                                            ?>
                                            <div class="col-md-4">
                                                <label class="btn btn-success">عدد الساعات المقطوعة  </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $form[20];  ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">المعدل  </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $form[21];  ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">المشاركات في البرنامج الاختياري</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $form[4]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">اسم الفريق الذي نتعمل به </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $form[5]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">المسمى الوظيفي </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $form[6]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">العمل على مستوى القطاع </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $form[8]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">العمل عل مستوى المركزي </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $form[9]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">المشاركات في الأنشطة باسم الاتحاد</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $form[11]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">المشاركات التي كانت باسم اهل الهمة </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $form[10];?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">انشطة كنت احد حضورها </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $form[12]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success">المهارات التي تملكها </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $form[13]; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="btn btn-success" style="margin-right: 5rem">الميزات التي تتصف بها </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $form[14]; } ?> </p>
                                            </div>
                                        </div>


                                    </div>



                                    <div class="col-md-4 img-main-rightPart">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row image-right-part">
                                                    <div class="col-md-6 pull-left image-right-detail">
                                                        <h6>PUBLICISED</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 image-right">
                                                <img src="image/logo.png">
                                            </div>
                                            <div class="col-md-12 image-right-detail-section2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contact">Contactarme</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <p for="msj">Se enviará este mensaje a la persona que desea contactar, indicando que te quieres comunicar con el. Para esto debes de ingresar tu información personal.</p>
                </div>
                <div class="form-group">
                    <label for="txtFullname">Nombre completo</label>
                    <input type="text" id="txtFullname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtEmail">Email</label>
                    <input type="text" id="txtEmail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtPhone">Teléfono</label>
                    <input type="text" id="txtPhone" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" (click)="openModal()" data-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</section>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>