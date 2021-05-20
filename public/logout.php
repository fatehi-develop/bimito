<?php
include '__php__.php';
Authentication::logout();
Alert::alerts('از اینکه از خدمات ما استفاده می کنید ممنونیم','success');
redirect('login.php');