<?php
include '../includes/setting.php';
include '../includes/function.php';
$id=$_GET['id'];
$db = new DB();
$table=Product::find("id={$id}");
unset($db);
$row=$table[0];
include '../includes/view/productDetails.php';
?>