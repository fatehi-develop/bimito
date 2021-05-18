<?php
include '__php__.php';
include SITE_INC.'setting.php';
include SITE_INC.'function.php';
$id=$_GET['id'];
$db = new DB();
$table=Product::find("id={$id}");
unset($db);
$row=$table[0];
include '../includes/view/productDetails.php';
?>