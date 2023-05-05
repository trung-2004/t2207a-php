<?php
$x = 15;// khai bao bien
$y = "Hello";
$y = true;
echo $x . " Hello world!\n";// "."  dung de noi chuoi
$arr = [];// khai bao mang
$arr[0] = 9;
$arr[] = 28;// tu dong cho vao arr[1]
echo $arr[1];
$arr["name"] = "Nguyen Van An ";// chi muc co the la chuoi
echo $arr["name"];

foreach ($arr as $a) {
    echo $a . " ";
}
function tinhTong($a, $b) {
    return $a + $b;
}
echo tinhTong(5,8);