<?php
include "al.php";

class mydb {
	private static $conn;
	private $query;

	public static function conn($sw=0) {
		self::$conn=new mysqli(util::$host,util::$user,util::$pass);
		if(self::$conn) {
			self::set();
		} else {
			trigger_error("db load failure");
		}
		return self::$conn;
	}
	public static function set(){
		if(!self::$conn->select_db(util::$db)){
			$sql="create database ".util::$db;
			if(self::$conn->query($sql)){
				self::set();
				}
				else{
					trigger_error(self::$conn->error);
				}
			}
	}
	
	public function close(){
		self::$conn=null;
	}
}
?>