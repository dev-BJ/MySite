<?php
class ob{
	static function on(){
		ob_start();
	}
	
	static function off(){
		ob_end_flush();
	}
	
	static function text(){
		ob_get_contents();
	}
	
	static function flush(){
		flush();
		ob_flush();
	}
	
	static function len(){
		return ob_get_length();
	}
}
?>