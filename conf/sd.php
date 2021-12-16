<?php

class sd{
	
	static function on(){
		session_start();
	}
	
	static function off(){
		session_destroy();
	}
	
	static function set($k,$v){
		$_SESSION[$k]=$v;
	}
	
	static function reset(){
		session_unset();
	}
}
?>