<?php
include 'DB.php';
if( ! function_exists('get_header') ){
    function get_header($name = null, $args = array()){
        if( isset( $name ) )
            $name = "-{$name}";
        include "view/templates/header{$name}.php";
    }
}
if( ! function_exists('get_sidebar') ){
    function get_sidebar($name = null, $args = array()){
        if( isset( $name ) )
            $name = "-{$name}";
        include "view/templates/sidebar{$name}.php";
    }
}
if( ! function_exists('get_footer') ){
    function get_footer($name = null, $args = array()){
        if( isset( $name ) )
            $name = "-{$name}";
        include "view/templates/footer{$name}.php";
    }
}
if( ! function_exists('get_template_part') ){
    function get_template_part($slug, $name = null, $args = array()){
        if( isset( $name ) )
            $name = "-{$name}";
        include "view/templates/{$slug}{$name}.php";
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