<?php
session_start();

include "../al.php";

error::__init();

if(req::getparam("p")->get("token")==$_SESSION["tid"]) {
#start of switch
	switch(req::getparam("p")->get("act")) {
		case "index":
if(!req::getparam("p")->has("title")) {
			util::header("post/editor",md5('et'));
			exit;
		}

		else if(!req::getparam("p")->has("post")) {
			util::header("post/editor",md5('ep'));
			exit;
		}
		else{
		if(req::getparam("f")->has("file")){
		core::upload(req::getparam("f")->get("file"));
			}
			}
			
		core::post(mydb::conn(),$_SESSION["id"],req::getparam("p")->get("title"),req::getparam("p")->get("post"));}
#end of switch

} else {
	util::header("post/editor",md5('e'));
	exit;
}
