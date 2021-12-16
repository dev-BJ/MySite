<?php

class fm {
	public static $map;

	public function __construct(array $base) {
		self::$map=$base;
	}

	public function has($key) {
		if(empty($key)) {
			trigger_error("no key");
			exit;
		}
		return isset(self::$map[$key]);
	}
	
	static function getfile($index,$key){
		if(empty($index)&&empty($key)){
			trigger_error("no key");
			exit;
			}
		return self::$map[$index][$key];
	}

	public function get($key) {
		if(empty($key)) {
			trigger_error("no key");
			exit;
		}
	
		return self::$map[$key];
	}
	
	public function len($key){
		if(empty($key)){
			trigger_error("no key");
			exit;
			}
			return strlen(self::$map[$key]);
	}
	function gd(){
		return self::$map;
	}
}
?>