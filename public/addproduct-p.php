<?php
include '../includes/setting.php';
include ('../includes/function.php') ;
$alert = '';
if( isset( $_POST['submit'] ) ){
    $imgSrc = 'assets/images/image.jpg';

    $sql = "INSERT INTO Product (name, price, weekday, timeFrom, timeTo, imgSrc, description) 
	VALUES('{$_POST['name']}', {$_POST['price']},'{$_POST['weekday']}', '{$_POST['timeFrom']}', '{$_POST['timeTo']}', '{$imgSrc}', '{$_POST['description']}')";

    $db = new DB();

    $result = $db -> execute( $sql );
    unset( $db );

    if( $result )
        $alert = alertTemplate('با موفقیت ثبت شد!', 'success');


}
