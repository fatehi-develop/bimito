<?php
include '__php__.php';
include SITE_INC.'setting.php';
include SITE_INC.'function.php';

if( isset( $_GET['id'] ) ) {


    if( isset( $_POST['submit'] ) ){

        $parameters = $_POST;
        unset( $parameters['submit'] );
        $parameters['id'] = $_GET['id'];
        $db = new DB();
        $table = Product::update( $parameters );
        unset( $db );
    }

    $db = new DB();
    $table = Product::find("id = {$_GET['id']}");
    $row = $table[0];

    unset( $db );

}
else{
    alerts('شناسه کاربر نامشخص!');
}

$alerts = alerts();
echo $alerts;
include '../includes/view/editproduct.php';