<?php
$id = $_GET["id"];
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
$sql = "SELECT * FROM lophoc";
$result = $conn -> query($sql);

//var_dump($result);die();
$class = [];
if ($result -> num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        $class[] = $row;
    }
}

$sql = "SELECT * FROM sinhvien WHERE id = $id";
$result = $conn -> query($sql);
$student = [];
if ($result -> num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        $student[] = $row;
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
    <title>Create Student</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <?php foreach ($student as $st): ?>
                <form method="post" action="suaSinhVien.php?id=<?php echo $st["id"] ?>">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="enter name" value="<?php echo $st["name"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $st["email"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Birth Day</label>
                        <input type="date" class="form-control" name="birthday" placeholder="birthday" value="<?php echo $st["birthday"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Gender</label>
                        <select name="gender" class="form-control">
                            <option value="male" <?php if ($st["gender"] == "male") echo 'selected="selected"' ?> >Male</option>
                            <option value="female" <?php if ($st["gender"] == "female") echo 'selected="selected"' ?>>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Gender</label>
                        <select name="class_id" class="form-control">
                            <?php foreach ($class as $c): ?>
                                <option value="<?php echo $c["id"] ?>"
                                    <?php if ($st["class_id"] == $c["id"]) echo 'selected="selected"' ?>>
                                    <?php echo $c["name"] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                <?php endforeach; ?>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>

</body>
</html>

