<?php
$host="localhost";
$user="root";
$pass="";
$db="mmad";

$conn = mysqli_connect($host , $user , $pass , $db);

if(!$conn){
    echo"check your DataBase connection";
    die("connection failed " . mysqli_connect_error());
}
