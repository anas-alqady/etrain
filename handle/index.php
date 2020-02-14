<?php
include_once('../include/config.php');
include_once('../include/functions.php');

if(isset($_POST['submit'])) {
    $skills = $_POST["skill"];
    $three = "";
    foreach ($skills as $skill) {
        $three .= $skill . "<br>,";
    }

    $pros = $_POST["pro"];
    $tow = "";
    foreach ($pros as $pro) {
        $tow .= $pro . "<br>,";
    }

    $advs = $_POST["adv"];
    $one = "";
    foreach ($advs as $adv) {
        $one .= $adv . "<br>,";
    }

    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $m3 = $_POST['m3'];
    $team = htmlspecialchars($_POST['team']);
    $jop = $_POST['jop'];
    $vice = $_POST['vice'];
    $sector = $_POST['sector'];
    $central = $_POST['central'];
    $activhem = $_POST['activ-hem'];
      $activsec = $_POST['activ-sec'];
    $humannote = htmlspecialchars($_POST['Human-Resources']);
    $notes = htmlspecialchars($_POST['notes']);
    $user_id=$_SESSION['user'];
    $facemail=$_POST['facemail'];
    $sechours=$_POST['sechours'];
    $completHours=$_POST['completHours'];
    $average=$_POST['average'];
    $yourself = $_POST['yourself'];
    $dis = $_POST['dis'];
    $advyourself = $_POST['advyourself'];

    $query ="INSERT INTO forms (m1,m2,m3,Optional,Nteam,Joptitle,Vice,sectorWork,CentralLevel,
ActivitiesHemmah,ActivitiesVice,viewActivities,skile,Advantages,Development,notes,user_id,fcemail,sectHours,completHours,average,yourself,dis,advyourself)
    VALUES ('$m1','$m2','$m3','$tow','$team','$jop','$vice','$sector','$central','$activhem','$activet','$activsec','$three',
    '$one','$humannote','$notes','$user_id','$facemail','$sechours','$completHours','$average','$yourself','$dis','$advyourself')";
    $execute= $mysql->query($query);
    header("location:http://localhost/hemma-1/profile.php");
    }

