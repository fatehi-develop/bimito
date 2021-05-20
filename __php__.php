<?php
if(!defined('SITE_PATH'))
  define('SITE_PATH',__DIR__);
if(!defined('SITE_INC'))
  define('SITE_INC',SITE_PATH.'/includes/');
  set_include_path(SITE_INC);
include 'initializer.php';