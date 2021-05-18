<?php
//$dbc = new mysqli('sql302.b6b.ir', 'b6bi_27931308', 'afpmsaep3254179', 'b6bi_27931308_academybime');
include '__php__.php';
include SITE_INC.'setting.php';
include SITE_INC.'function.php';
$alert = '';
if (isset($_POST['submit'])) {

    unset($_POST['submit']);
    $db = new DB();
    $product = array(
        "name" => "{$_POST['name']}",
        "tel" => "{$_POST['tel']}",
        "email" => "{$_POST['email']}",
        "comment" => "{$_POST['comment']}",

    );
    Product::add($product);
    unset($db);

    $alerts = alerts();
}
header("location:Contact.php?ok=ok");