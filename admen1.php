<?php

use http\Env\Request;

include_once ('./include/config.php');
include_once ('./include/functions.php');

//if (!isset($_SESSION['user']) && ($_POST['email'] == "Admin2020@gmail.com")){
//    header("location: http://localhost/hemmah-1/login.php");
//}
if(!isset($_SESSION['user']) ){
    header("location:http://localhost/project-forms/login.php");
}
$query = "SELECT * FROM users";
$execute = $mysql->query($query);
$users = $execute->fetch_all();

header('Content-Type: text/html; charset=utf-8');

?>
<html meta="charset-utf8">
<head>
    <title>
    </title>
    <link rel="stylesheet" href="theme/css/style.css">
    <link rel="stylesheet" href="theme/css/bootstrab">
    <link rel="stylesheet" href="theme/css/bootstrab/bootstrap.css">
    <link rel="stylesheet" href="theme/js/bootstrap.js">

</head>
<body>
<section class="position-sticky" style="top:0;z-index: 1071; min-height: 2rem">
    <ul class="nav nav-tabs  justify-content-between pl-5 pr-5" style="background: #37009a">
        <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" style="color: red" aria-haspopup="true" aria-expanded="false">Option</a>
            <div class="dropdown-menu text-right" >
                <a class="dropdown-item" href="#info-general">table 1 </a>
                <a class="dropdown-item" href="#information-imp"> table 2 </a>
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
        <li><img src="image/logo.png" alt="" style="width: 4rem;height: 3rem"></li>
    </ul>
</section>
<section class="search text-center">
    <form action="search.php" method="GET">
        <input type="search" value="Search" name="search" style="width: 60rem ; background:silver"/>
    </form>
</section>

<h1 id="info-general" style="margin-bottom: 3rem;margin-top: 5rem"> Table 1</h1>
<section class=" d-flex flex-column "  style="">
    <table class="table table-sm table-dark " style="text-align: center; align-self: center;
align-items: center">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">user name </th>
            <th scope="col">major</th>
            <th scope="col">phone</th>
            <th scope="col">المعدل</th>
            <th scope="col">الكلية</th>
            <th scope="col">الكلية</th>
            <th scope="col">الكلية</th>


        </tr>
        </thead>
        <tbody>
        <tr>

            <?php
            $count =0;
            foreach ($users as $user){ ?>
<tr><td scope="row"  id="count">
                <?php echo ++$count ?>
            </td>
            <td>
             <div class="user-name">
            <a href="profile-admen.php?id=<?php echo $user[7];  ?>"><?php echo $user[0] ?> </a>
            </td>
            <td><?php echo $user[3]; ?></td>
            <td> <?php echo $user[5]; ?> </td>
            <td><?php echo $user[4]; ?></td>
            <td><?php echo $user[4]; ?></td>
            <td><?php echo $user[4]; ?></td>
            <td><?php echo $user[6]; ?></td>

            <?php } ?>
        </tr>
        </tbody>
    </table>
</section>



<h1>Table 2 </h1>
<section class=" d-flex flex-column ml-2" id="information-imp" style="width:300rem;">
    <table class="table table-sm table-dark">
        <thead>


        <tr>
            <th scope="col">#</th>
            <th scope="col">user name </th>
            <th scope="col">email facebook</th>
            <th scope="col">عدد ساعات التخصص </th>
            <th scope="col">عدد الساعات المقطوعة </th>
            <th scope="col"> المعدل الجامعي </th>
            <th scope="col">المتسوي الأ,ل </th>
            <th scope="col">المستوى الثاني </th>
            <th scope="col">المستوى الثالث </th>
            <th scope="col">المشاركات في البرنامج الاختياري </th>
            <th scope="col">الفريق الذي يعمل به داخل الكلية </th>
            <th scope="col">عضو اتحاد سابق ؟  </th>
            <th scope="col">العمل على مستوى القطاع  </th>
            <th scope="col">العمل على مستوى المركزي </th>
            <th scope="col">الانشطة التي قام بحضورها (التابعة للكتلة )  </th>
            <th scope="col">أنشطة الاتحاد </th>
            <th scope="col">أنشطة عامة  </th>
            <th scope="col">المهارات التي يمتكلها </th>
            <th scope="col">جوانب ابداعية وميزات  </th>
            <th scope="col">جوانب تتمنى تطويرها </th>
            <th scope="col">أبرز الايجابيات وعوامل القوة الشخصية  </th>
            <th scope="col">ابرز السلبيات التي يود تطويرها   </th>
            <th scope="col"> عن نفسك ..  </th>

            <th scope="col">ملاحظات عامة </th>



        </tr>
        </thead>
        <tbody>
        <tr>

            <?php

            $query_forms = "SELECT * FROM forms";
            $execute = $mysql->query($query_forms);
            $forms = $execute->fetch_all();
            $count =0;
            foreach ($forms as $form){
?>
        <tr><td scope="row"  id="count">
                <?php echo ++$count ?>
            </td>
            <td>
                <div class="user-name">
                    <a href="profile-admen.php?id=<?php echo $user[7];  ?>"><?php echo getUserName($form[17]) ?> </a>
            </td>
            <td><a href="<?php echo $form[18]; ?>"><?php echo $form[18]; ?></a></td>
            <td><?php echo $form[19]; ?></td>
            <td><?php echo $form[20]; ?></td>
            <td><?php echo $form[21]; ?></td>
            <td><?php echo $form[1]; ?></td>
            <td><?php echo $form[2]; ?> </td>
            <td><?php echo $form[3]; ?></td>
            <td><?php echo $form[4]; ?></td>
            <td><?php echo $form[5]; ?></td>
            <td><?php echo $form[6]; ?></td>
            <td><?php echo $form[7]; ?></td>
            <td><?php echo $form[8]; ?></td>
            <td><?php echo $form[9]; ?></td>
            <td><?php echo $form[10]; ?></td>
            <td><?php echo $form[11]; ?></td>
            <td><?php echo $form[12]; ?></td>
            <td><?php echo $form[13]; ?></td>
            <td><?php echo $form[14]; ?></td>
            <td><?php echo $form[15]; ?></td>
            <td><?php echo $form[22]; ?></td>
            <td><?php echo $form[23]; ?></td>
            <td><?php echo $form[24]; ?></td>
            <td><?php echo $form[16]; ?></td>


            <?php
            } ?>
        </tr>
        </tbody>
    </table>
</section>
<form  name="excel" action="excel.php" method="post" style="text-align: center;" onclick="">
    <input type="submit" name="export_excel" class="btn btn-success" value="Export to Excel" style="width: 20rem;">
</form>
<script src="theme/js/app.js"> </script>
<script>
    let count = document.getElementById("count");
    count++;
</script>

<?
$excel=$_POST['excel'];
function excel ()
{
header("content-TYPE:application/xls");
header("content-disposition:admen1.php; filename=download.xls");
}
?>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
