<?php

class util{
	
	public static $sn="9japulse";
	public static $host="localhost";
	public static $user="root";
	public static $pass="";
	public static $db="9japulse";
	private static $token;

	public static function rdr($path,$err=null) {
		if(!empty($err)){
			header("Location: {$path}.php?err={$err}");}
			else{
			header("Location: {$path}.php");}
		}
		
		static function getToken(){
			if(!isset($_SESSION["token"])){
				self::$token=(string)"--".md5(rand(0,10))."--";
				$_SESSION["tid"]=self::$token;
				}
				else{
				unset($_SESSION['token']);
				self::getToken();}
				return self::$token;
		}
		public static function gd($text){
	$img=imagecreatetruecolor(100,100);
	$r=rand(0,255);
	$b=rand(0,255);
	$g=rand(0,255);
	$c=imagecolorallocate($img,$r,$b,$g);
	imagestring($img,5,45,40,strtoupper(substr($text,0,1)),$c);
	$p="../img/$text.png";
	imagepng($img,$p,9);
	return $p;
	imagedestroy($img);
		}
	}