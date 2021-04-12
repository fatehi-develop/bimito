<?php
include '../includes/setting.php';
include '../includes/function.php';
$db = new DB();
$table=Product::find();
unset($db);
include '../includes/view/catalog.php';
?>