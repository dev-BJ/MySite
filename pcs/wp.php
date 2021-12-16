<?php
include "../al.php";
sd::on();
ob::on();

if(req::get("p")->get("token")==$_SESSION["tid"]) {
#start of switch
	switch(req::get("p")->get("act")) {
		case "index":
if(!req::get("p")->has("title")) {
			util::rdr("/post",md5('et'));
			exit;
		}

		else if(!req::get("p")->has("post")) {
			util::rdr("/post",md5('ep'));
			exit;
		}
		else{
		if(req::get("f")->has("file")){
		core::upload(req::get("f")->get("file"));
	}
		core::post(mydb::conn(),$_SESSION["id"],req::get("p")->get("title"),req::get("p")->get("post"));}
		}
#end of switch

} else {
	util::rdr("/post",md5('e'));
	exit;
}
