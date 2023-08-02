<?php
$id = $_GET["id"];
// luu sv vao db

$host = "localhost";
$user = "root";
$pwd = "";
$db = "t2207a-student";

$conn = new mysqli($host, $user, $pwd, $db);
if ($conn -> connect_error){
    die("Connect error...");
}

// truy van
$sql = "DELETE FROM sinhvien WHERE id = $id";
if ($conn -> query($sql)){
    header("location: database.php");// chuyen sang trang danh sach
} else{
    echo "Error";
}
