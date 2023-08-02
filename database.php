<?php
//
session_start();
$login_user = $_SESSION["user"]?$_SESSION["user"]:null;
if (!$login_user){
    header("Location: login.php");
    die("Vui lòng đăng nhập");
}
// ket noi db
$host = "localhost";
$user = "root";
$pwd = "";
$db = "t2207a-student";

$conn = new mysqli($host, $user, $pwd, $db);
if ($conn -> connect_error){
    die("Connect error...");
}

// ra day tuc la ket noi thanh cong

// truy van
$sql = "SELECT * FROM sinhvien";
$result = $conn -> query($sql);

//var_dump($result);die();
$students = [];
if ($result -> num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        $students[] = $row;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
<section>
    <div class="container">
        <h1>Bạn đang đăng nhập dưới tên: <?php echo $login_user["name"] ?></h1>
        <br>
        <a href="createStudent.php" class="btn btn-primary md-2">Add Student</a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">birthday</th>
                <th scope="col">gender</th>
                <th scope="col">class id</th>
                <th scope="col">update</th>
                <th scope="col">delete</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($students as $st): ?>
                <tr>
                    <?php
                    echo "<td>".$st["name"]."</td>";
                    echo "<td>".$st["email"]."</td>";
                    echo "<td>".$st["birthday"]."</td>";
                    echo "<td>".$st["gender"]."</td>";
                    echo "<td>".$st["class_id"]."</td>";
                    ?>
                    <td>
                        <a href="editStudent.php?id=<?php echo $st["id"]; ?>">Sửa</a>
                    </td>
                    <td>
                        <a href="deleteStudent.php?id=<?php echo $st["id"]; ?>">Xóa</a>
                    </td>
                </tr>
            <?php   endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>
