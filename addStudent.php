<?php
$sv = $_POST;
$name = $_POST["name"];
$email = $_POST["email"];
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];
$class_id = $_POST["class_id"];
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
$sql = "INSERT INTO sinhvien (name, email, birthday, gender, class_id) VALUES ('$name', '$email', '$birthday', '$gender', '$class_id')";
if ($conn -> query($sql)){
    header("location: database.php");// chuyen sang trang danh sach
} else{
    echo "Error";
}

