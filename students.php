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
<?php
$list = [
    [
        "name" => "Nguyen Van Nam",
        "age" => 18,
        "mark" => 9
    ],
    [
        "name" => "Nguyen Duy Anh",
        "age" => 17,
        "mark" => 7
    ],
];
?>
<?php include("header.php")// nap file ben ngoai vao?>
<section>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">age</th>
                <th scope="col">mark</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $l): ?>
                <tr>
                    <?php
                    echo "<td>".$l["name"]."</td>";
                    echo "<td>".$l["age"]."</td>";
                    echo "<td>".$l["mark"]."</td>"
                    ?>
                </tr>
            <?php   endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

</body>
</html>
