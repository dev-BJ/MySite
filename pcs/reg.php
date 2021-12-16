<?php
include "../al.php";

var_dump($_POST);

if(!req::get("p")->has("user")) {
	util::header("e","auth/reg.php",md5("ue"));
	exit;
}
if(!req::get("p")->has("pass")) {
	util::header("e","/auth/reg.php",md5("pe"));
	exit;
} else
	
 if(strlen(req::get("p")->get("pass"))<6) {
	util::header("e","/auth/reg.php",md5("pl"));
	exit;
} else
	
 if(!preg_match("/[a-zA-Z0-9]/",req::get("p")->get("pass"))) {
	util::header("e","/auth/reg.php",md5("pbf"));
	exit;
}
 if(!req::get("p")->has("email")) {
	util::header("e","/auth/reg.php",md5("ee"));
	exit;
} else
	 if(!preg_match_all( "/([\w])+(@+)(gmail|yahoo|hotmail)\.com/",req::get("p")->get("email"))){
util::header("e","/auth/reg.php",md5("ebf"));
exit;
}
if(!req::get("p")->has("gender")) {
	util::header("e","/auth/reg.php",md5("ge"));
	exit;
}
if(!req::get("p")->has("date")) {
	util::header("e","/auth/reg.php",md5("ed"));
	exit;
} else {
	$status="online";
}
Core::register(mydb::conn(),util::gd(req::get("p")->get("user")),req::get("p")->get("user"),req::get("p")->get("pass"),req::get("p")->get("email"),req::get("p")->get("gender"),req::get("p")->get("date"),$status);