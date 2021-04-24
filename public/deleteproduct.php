<?php
include '../includes/setting.php';
include '../includes/function.php';

if( isset( $_GET['id'] ) ) {

    $db = new DB();
    $table = Product::delete($_GET['id']);
    unset( $db );

}
else{
    alerts('شناسه  نامشخص!');
}

$alerts = alerts();
include '../includes/view/deleteproduct.php';
