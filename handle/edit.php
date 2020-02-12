<?php
include_once ('../include/config.php');
include_once ('../include/functions.php');
$user = $_SESSION['user'];
if (!isset($_SESSION['user'])) {
    header("location: http://localhost/hemmah-1/login.php");
}
    $skills = $_POST["skill"];
    $three = " ";
    foreach ($skills as $skill) {
        $three .= $skill . "<br>,";
    }

    $pros = $_POST["pro"];
    $two = "";
    foreach ($pros as $pro) {
        $two .= $pro . "<br>,";
    }
    $advs = $_POST["adv"];
    $one = "";
    foreach ($advs as $adv) {
        $one .= $adv . "<br>.";
    }

    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $m3 = $_POST['m3'];
    $team = $_POST['team'];
    $jop = $_POST['jop'];
    $vice = $_POST['vice'];
    $sector = $_POST['sector'];
    $central = $_POST['central'];
    $activhem = $_POST['activ-hem'];
    $activet = $_POST['activ-et'];
    $activsec = $_POST['activ-sec'];
    $humannote = $_POST['Human-Resources'];
    $notes = $_POST['notes'];
    $facemail=$_POST['facemail'];
    $sechours=$_POST['sechours'];
    $completHours=$_POST['completHours'];
    $average=$_POST['average'];
    $yourself = $_POST['yourself'];
    $dis = $_POST['dis'];
    $advyourself = $_POST['advyourself'];
//    $query ="UPDATE forms SET m1,m2,m3,Optional,Nteam,Joptitle,Vice,SectorWork,CentralLevel,ActivitiesHemmah, ActivitiesVice, viewActivities,skile,Advantages,Development,Notes,user_id VALUES
//      '$m1','$m2','$m3','$two','$team','$jop','$vice','$sector','$central','$activhem','$activet','$activsec','$three','$humannote',
//      '$one','$notes','$user_id' WHERE user_id='$user_id'";


$query = "UPDATE forms SET m1='$m1',m2='$m2',m3='$m3',Optional='$two',Nteam='$team',Joptitle='$jop',Vice='$vice',
 SectorWork='$sector', CentralLevel='$central', ActivitiesHemmah='$activhem', ActivitiesVice='$activet', viewActivities='$activsec',
  skile='$three', Advantages='$one', Development='$humannote', Notes='$notes',fcemail='$facemail', secthours='$sechours',
  completHours='$completHours',average='$average', yourself='$yourself',dis='$dis',advyourself='$advyourself' WHERE user_id='$user'";
header('Content-Type: text/html; charset=utf-8');
$execute = $mysql->query($query);
header("location:http://localhost/hemmah-1/profile.php");
