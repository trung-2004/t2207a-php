<?php
//
session_start();
// dữ liệu đổ về
$email = $_POST["email"];
$password = $_POST["password"];
// ket noi db

$host = "localhost";
$user = "root";
$pwd = "";
$db = "t2207a-student";

$conn = new mysqli($host, $user, $pwd, $db);
if ($conn->connect_error) {
    die("Connect error...");
}

// check người dùng tồn tại
$sql_check = "SELECT * FROM usere where email like '$email'";
$check = $conn -> query($sql_check);
if ($check -> num_rows == 0){
    die("Incorrect email or password...");
}

// lấy ra usere
$usere = null;
while ($row = $check -> fetch_assoc()){
    $usere = $row;
}

// so sánh mật khẩu
$compare = password_verify($password, $usere["password"]);
if ($compare) {
    $_SESSION["user"] = $usere;
    header("Location: database.php");
    die("Logged in successfully...");
} else {
    die("Incorrect email or password...");
}