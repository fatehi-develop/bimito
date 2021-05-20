<?php
if(! class_exists('Authentication')) {
	class Authentication{
        
		static public function login( $uid ){
			//$_SESSION['authenticated'] = true;
			$_SESSION['uid'] = $uid;
			}
		
		static public function check(){
			return isset( $_SESSION['uid'] );
		}
		
		static public function logout(){
			// session_unset()
			// session_destroy()
			unset( $_SESSION['uid'] );
		}
		
		static public function uid(){
				return $_SESSION['uid'];
		}
		
		static public function autoLogout(){
		}
	}
}