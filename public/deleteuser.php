<?php
include '../includes/setting.php';
include '../includes/function.php';

if( isset( $_GET['id'] ) ) {

    $db = new DB();
    $table = Users::delete($_GET['id']);
    unset( $db );

}
else{
    alerts('شناسه کاربر نامشخص!');
    //redirect
}

$alerts = alerts();
include '../includes/view/deleteuser.php';
//redirect ...
