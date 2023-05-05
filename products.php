<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
          integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <title>Product</title>
</head>
<style>
    body {
        background-color: #f1f2f7;
    }

    /*panel*/
    .panel {
        border: none;
        box-shadow: none;
    }


    /*product list*/

    .prod-cat li a {
        border-bottom: 1px dashed #d9d9d9;
    }

    .prod-cat li a {
        color: #3b3b3b;
    }

    .prod-cat li ul {
        margin-left: 30px;
    }

    .prod-cat li ul li a {
        border-bottom: none;
    }

    .prod-cat li ul li a:hover, .prod-cat li ul li a:focus, .prod-cat li ul li.active a, .prod-cat li a:hover, .prod-cat li a:focus, .prod-cat li a.active {
        background: none;
        color: #ff7261;
    }

    .product-list img {
        width: 100%;
        border-radius: 4px 4px 0 0;
        -webkit-border-radius: 4px 4px 0 0;
        height: 260px;
        object-fit: contain;
    }

    .product-list .pro-img-box {
        position: relative;
    }

    .adtocart {
        background: #fc5959;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        color: #fff;
        display: inline-block;
        text-align: center;
        border: 3px solid #fff;
        left: 45%;
        bottom: -25px;
        position: absolute;
    }

    .adtocart i {
        color: #fff;
        font-size: 25px;
        line-height: 42px;
    }

    .pro-title {
        color: #5A5A5A;
        display: inline-block;
        margin-top: 20px;
        font-size: 16px;
    }

    .product-list .price {
        color: #fc5959;
        font-size: 15px;
    }


    .pro-img-details img {
        width: 100%;
    }

    .product_meta span {
        display: block;
        margin-bottom: 10px;
    }

    .product_meta a, .pro-price {
        color: #fc5959;
    }

    .pro-img-list a {
        float: left;
        margin-right: 10px;
        margin-bottom: 10px;
    }

</style>
<body>
<?php
$product = [
    [
        "name" => "Dâu Tây",
        "price" => 110,
        "thumbnail" => "images/dautay.jpg",
        "qty" => 1
    ],
    [
        "name" => "KIWI",
        "price" => 45,
        "thumbnail" => "images/kiwi.jpg",
        "qty" => 1
    ],
    [
        "name" => "Tỏi",
        "price" => 15,
        "thumbnail" => "images/toi_large.png",
        "qty" => 1
    ],
    [
        "name" => "Xà lách mỡ",
        "price" => 2,
        "thumbnail" => "images/xa-lach-mo-dl_large.png",
        "qty" => 1
    ],
    [
        "name" => "Khổ qua",
        "price" => 2,
        "thumbnail" => "images/kho-qua_large.png",
        "qty" => 1
    ],
    [
        "name" => "Củ cải đỏ",
        "price" => 12,
        "thumbnail" => "images/cu-cai-do-dl_large.png",
        "qty" => 1
    ],
    [
        "name" => "Cherries",
        "price" => 23,
        "thumbnail" => "images/Cherries.jpg",
        "qty" => 1
    ],
    [
        "name" => "Cam mỹ",
        "price" => 34,
        "thumbnail" => "images/cammy.jpg",
        "qty" => 1
    ],
    [
        "name" => "Bắp cải tím",
        "price" => 4,
        "thumbnail" => "images/bap-cai-tim_large.jpg",
        "qty" => 0
    ],
    [
        "name" => "Cà chua",
        "price" => 11,
        "thumbnail" => "images/ca_chua_large.png",
        "qty" => 1
    ],
    [
        "name" => "Cải bẹ xanh",
        "price" => 5,
        "thumbnail" => "images/cai-be-xanh-dl_large.jpg",
        "qty" => 1
    ],
];

?>
<div class="container">
    <div class="row product-list">
        <?php foreach (@$product as $pr): ?>
            <div class="col-md-3">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="<?php echo $pr["thumbnail"] ?>" alt=""/>
                        <?php if ($pr["qty"] > 0): ?>
                            <a href="#" class="adtocart">
                                <i class="bi bi-cart2"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                <?php echo $pr["name"] ?>
                            </a>
                        </h4>
                        <p class="price">$<?php echo $pr["price"] ?></p>
                    </div>
                </section>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
