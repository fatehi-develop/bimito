<?php
include '__php__.php';
if( isset( $_POST['submit'] ) ){
    $db = new DB();
    $parameters = $_POST;
    unset($parameters['submit']);
    $table = Users::find( "email = '{$parameters['email']}' AND password = '{$parameters['password']}'" );
    if( isset($table[0]) ){
        $row = $table[0];
        Authentication::login($row['id']);
        Alert::alerts('خوش امدید','success');
        redirect('dashbord.php');
    }
    else{
        Alert::alerts('نام کاربری اشتباه است!');
    }
    unset( $db );
}

$alerts = Alert::alerts();
// در هر صورت فرم را نمایش بده
view('login', null, null, $alerts);