<?php
include 'alert.php';
include 'DB.php';
include 'security/Authentication.php';
if( ! function_exists('get_header') ){
    function get_header($name = null, $args = array()){
        get_template_part('header');
    }
}
if( ! function_exists('get_sidebar') ){
    function get_sidebar($name = null, $args = array()){
        get_template_part('sidebar');

    }
}
if( ! function_exists('get_footer') ){
    function get_footer($name = null, $args = array()){
        
        get_template_part('footer');
    }
}
if( ! function_exists('get_template_part') ){
    function get_template_part($slug, $name = null, $args = array()){
       // extract($args);
       if( isset( $name ) )
       $name = "-{$name}";
      $__pathtotemplate= "view/templates/{$slug}{$name}.php";
        foreach($args as $key=>$value){
           $$key=htmlspecialchars($value);
        }
        include $__pathtotemplate;
     
    }
}
if (!function_exists('alertTemplate')) {
    function alertTemplate($text, $type = 'error')
    {
        switch ($type) {
            case 'success':
                break;
            case 'warning':
                break;
            case 'error':
                $type = 'danger';
        }
        $alert = "
				<article class = 'alert alert-{$type} alert-dismissible fade show' role='alert'>
					{$text}
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
				</article>";
        return $alert;
    }
}
if( ! function_exists('view') ){
	function view($slug, $name = null, $args = array(), $alerts = null){ // 'home'
		if( isset( $name ) )
			$name = "-{$name}"; // '-home'
		$__pathToTemplate = "view/{$slug}{$name}.php";
		
		//$args = safeScript($args);
		//extract($args);
		if( isset($args) ) // اگر نال نیست
			foreach($args as $key => $value){
				$$key = $value;
			}
		
		include $__pathToTemplate;
	}	
}

if( ! function_exists('redirect') ){
	function redirect( $address ){
		header("Location: {$address}"); // دستور به مرورگر براي ريدایرکت به آدرس
		exit();
	}
}
if (!function_exists('alerts')) {
    function alerts($text = '', $type = 'error')
    {
        static $alerts = '';
        if ($text !== '') {
            $alerts .= alertTemplate($text, $type);
        } elseif ($alerts !== '') {
            $result = $alerts;
            $alerts = '';
            return $result;
        } else
            return false;
    }
}
if (!function_exists('persian_number')) {
     function persian_number( $input ) {
		$persian_number=array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
		$en_number=array('0','1','2','3','4','5','6','7','8','9');
		return str_replace($en_number,$persian_number,$input);
	}
}
function mySessionStater(){
        $lifetime = 365 * 24 * 60 * 60 ; 
        session_set_cookie_params ( $lifetime, $path = '/', $domain = $_SERVER['HTTP_HOST'] , $secure = false , $httponly = true );
        session_start();
    //}
}