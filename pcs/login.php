<?php
include "../al.php";
include "../var.php";

if(!req::get("p")->has("user")) {
	util::rdr("../auth/login.php",md5("ue"));
	exit;
}
if(!req::get("p")->has("pass")) {
	util::rdr("../auth/login.php",md5("pe"));
	exit;
} else
	
 if(req::get("p")->len("pass")<6) {
	util:rdr("../auth/login.php",md5("pl"));
	exit;
} else
	
 if(!preg_match("/[a-zA-Z0-9]/",req::get("p")->get("pass"))) {
	util::rdr("../auth/login.php",md5("pdf"));
	exit;
} else {
	Core::login(mydb::conn(),req::get("p")->get("user"),req::get("p")->get("pass"),req::get("p")->has("rm")?true:0);
}

?>