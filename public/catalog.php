<?php
include '__php__.php';
include SITE_INC.'setting.php';
include SITE_INC.'function.php';
$db = new DB();
$table=Product::find();
unset($db);
view('catalog', null, ['table' => $table]);?>