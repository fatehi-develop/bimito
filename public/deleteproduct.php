<?php
include '__php__.php';
include SITE_INC.'setting.php';
include SITE_INC.'function.php';

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
