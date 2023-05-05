<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <title>Create Product</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form method="post" action="#">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" class="form-control" name="title" placeholder="enter title">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" class="form-control" name="thumbnail" placeholder="enter thumbnail">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Age</label>
                        <input type="text" class="form-control" name="price" placeholder="price">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Mark</label>
                        <input type="number" class="form-control" name="qty" placeholder="quantity">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>

</body>
</html>
