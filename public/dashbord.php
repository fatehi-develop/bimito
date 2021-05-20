<?php
include '__php__.php';
 if(!Authentication::check())
 {
     Alert::alerts('ابتدا وارد شوید ');
     redirect('login.php?redirect=dashbord.php');
 }
$alerts = Alert::alerts();
view('dashbord',null,null,$alerts);