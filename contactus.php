<?php
include 'includes/setting.php';
$contactinfo=$_POST['frm'];
$dbc = new mysqli(DBHOST, DBUSER,DBPASS, DBNAME);
//$dbc = new mysqli('sql302.b6b.ir', 'b6bi_27931308', 'afpmsaep3254179', 'b6bi_27931308_academybime');
$sql = "INSERT INTO contactus(name,tel,email,comment)
		VALUES('{$contactinfo['name']}','{$contactinfo['tel']}','{$contactinfo['email']}','{$contactinfo['comment']}')";
$result = $dbc -> query( $sql );
$dbc -> close();
header("location:Contact.php?ok=ok");