<?php
include "include/config.php";
session_start();

$query = "SELECT * FROM users";
$execute = $mysql->query($query);
$users = $execute->fetch_all();

header("content-TYPE:application/xls");
header("content-disposition:admen1; filename=download.xls");
