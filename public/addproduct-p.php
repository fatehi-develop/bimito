<?php
include '../includes/setting.php';
include('../includes/function.php');
$alert = '';
if (isset($_POST['submit'])) {

    $imgSrc = 'assets/images/image.jpg';
    $_POST['$imgSrc']=$imgSrc;
    unset($_POST['submit']);
    $_POST['imgSrc'] = $imgSrc;

    $db = new DB();
    $product = array(
        "name" => "{$_POST['name']}",
        "price" => "{$_POST['price']}",
        "weekday" => "{$_POST['weekday']}",
        "timeFrom" => "{$_POST['timeFrom']}",
        "timeTo" => "{$_POST['timeTo']}",
        "imgSrc" => "{$_POST['imgSrc']}",
        "description" => "{$_POST['description']}",
    );
    Product::add($product);
    unset($db);

    $alerts = alerts();
}