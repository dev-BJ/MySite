<?php
ob_start();
include "../al.php";
include "../var.php";

if(!req::get("p")->has("user")) {
	util::rdr("auth/reg",md5("ue"));
	echo "error 7";
	exit;
}

if(!req::get("p")->has("pass")) {
	util::rdr("/auth/reg",md5("pe"));
	echo "error 13";
	exit;
}
	
 if(strlen(req::get("p")->get("pass"))<6) {
	util::rdr("/auth/reg",md5("pl"));
	echo "error 19";
	exit;
}
	
 if(!preg_match("/[a-zA-Z0-9]/",req::get("p")->get("pass"))) {
	util::rdr("/auth/reg",md5("pbf"));
	echo "error 25";
	exit;
}

 if(!req::get("p")->has("email")) {
	util::rdr("/auth/reg",md5("ee"));
	exit;
}

	 if(!preg_match_all( "/([\w])+(@+)(gmail|yahoo|hotmail)\.com/",req::get("p")->get("email"))){
util::rdr("/auth/reg",md5("ebf"));
exit;
}

if(!req::get("p")->has("gender")) {
	util::rdr("/auth/reg",md5("ge"));
	exit;
}

if(!req::get("p")->has("date")) {
	util::rdr("/auth/reg",md5("ed"));
	exit;
}else{
    $status="online";
}

core::register(mydb::conn(),util::gd(req::get("p")->get("user")),req::get("p")->get("user"),req::get("p")->get("pass"),req::get("p")->get("email"),req::get("p")->get("gender"),req::get("p")->get("date"),$status);

ob_end_flush();