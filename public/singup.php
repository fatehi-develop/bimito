<?php
include '../includes/setting.php';
include('../includes/function.php');

if (isset($_POST['submit'])) {
//    $imgSrc = 'assets/images/image.jpg';
//    $_POST['$imgSrc']=$imgSrc;
//    unset($_POST['submit']);
//    $_POST['imgSrc'] = $imgSrc;
    unset($_POST['submit']);
    $db = new DB();
    $par=$_POST;
    Users::add($par);
//    $user = array(
//        "name" => "{$_POST['name']}",
//        "date" => "{$_POST['date']}",
//        "username" => "{$_POST['username']}",
//        "email" => "{$_POST['email']}",
//        "gender" => "{$_POST['gender']}",
//        "ostan" => "{$_POST['ostan']}",
//        "adress" => "{$_POST['adress']}",
//        "password" => "{$_POST['password']}",
//    );
//    Users::add($user);
    unset($db);
}
$alerts = alerts();

include '../includes/view/singup.php';
?>

