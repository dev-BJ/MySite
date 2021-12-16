<?php

class error {

	static function __init() {
		self::report();
		ignore_user_abort(1);
		global $error;
		set_error_handler($error);
	}

	static function report() {
		error_reporting(E_ALL);
	}
	
	static function except($str){
		throw new Exception($str);
	}
	
}
?>