<?php
// du lieu do ve
$name = $_POST["name"];
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
// check user đã tồn tại
$sql_check = "SELECT * FROM usere where email like '$email'";
$check = $conn -> query($sql_check);
if ($check -> num_rows > 0){
    die("This account already exists!");
}
// hash password
$hash_password = password_hash($password, PASSWORD_BCRYPT);

// lưu vào db
$sql = "INSERT INTO usere (name, email, password) VALUES ('$name', '$email', '$hash_password')";
if ($conn -> query($sql)){
    die("Success");
} else {
    die("Error");
}