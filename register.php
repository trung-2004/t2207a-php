<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <title></title>
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form method="post" action="post-register.php">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="enter name">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>
</body>
</html>
