<?php
include_once ('config.php');
function getUserName($id)
{
    $mysql = new mysqli('localhost', 'root', '', 'hemma');
    $query = "SELECT username FROM users WHERE id = '$id'";
    $execute = $mysql->query($query);
    $results = $execute->fetch_assoc();

    return $results['username'];
}
function checkbox($id,$value) {
    global $mysql;
    $query="SELECT * FROM forms where id='$id' AND Optional LIKE '%$value%'";


    $execute= $mysql->query($query)->num_rows;
    return $execute;
}
function checkbox2($id,$value) {
    global $mysql;
    $query="SELECT * FROM forms where id='$id' AND skile LIKE '%$value%'";
    $execute= $mysql->query($query)->num_rows;
    return $execute;
}

function checkbox3($id,$value) {
    global $mysql;
    $query="SELECT * FROM forms where id='$id' AND Advantages LIKE '%$value%'";
    $execute= $mysql->query($query)->num_rows;
    return $execute;
}


function fallcheckbox($name_table,$id) {
    $mysql=new mysqli('localhost','root','','hemma');
    $query="SELECT * FROM '$name_table' where user_id='$id' ";
    $execute=$mysql->query($query)->num_rows;
}

