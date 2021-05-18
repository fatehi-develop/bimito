<?php
include '__php__.php';
include SITE_INC.'setting.php';
include SITE_INC.'function.php';
if (isset($_POST['submit'])) {

    $imgSrc = 'assets/images/image.jpg';
    unset($_POST['submit']);
    $db = new DB();
    $product=$_POST;

    // $product = array(
    //     "name" => "{$_POST['name']}",
    //     "price" => "{$_POST['price']}",
    //     "weekday" => "{$_POST['weekday']}",
    //     "timeFrom" => "{$_POST['timeFrom']}",
    //     "timeTo" => "{$_POST['timeTo']}",
    //     "imgSrc" => "{$_POST['imgSrc']}",
    //     "description" => "{$_POST['description']}",
    // );
    Product::add($product);
    unset($db);
    $alerts = alerts();
}
include '../includes/view/singup.php';

