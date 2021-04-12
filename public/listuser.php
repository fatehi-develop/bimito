<?php
include '../includes/setting.php';
include '../includes/function.php';
$db = new DB();
$table=Users::find();
unset($db);
include '../includes/view/listuser.php';
?>