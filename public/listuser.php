<?php
include '__php__.php';
include SITE_INC.'setting.php';
include SITE_INC.'function.php';
$db = new DB();
$table=Users::find();
unset($db);
include '../includes/view/listuser.php';
?>