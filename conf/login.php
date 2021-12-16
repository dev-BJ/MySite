<?php

class login{
static	 function auto(){
	if(!isset($_SESSION["user"])){
		if(isset($_COOKIE["user"])){
			$jboy=json_decode($_COOKIE["user"]);
			$qtxt="select status from user where user.id=$jboy->id";
			$d=mydb::conn()->query($qtxt)->fetchAll(PDO::FETCH_ASSOC);
			if($d=="online"){
				$_SESSION["user"]=$jboy->user;
				$_SESSION["id"]=$jboy->id;
				$d->close();
				$jboy=null;
				$qtxt=null;
			}
			else{
				$qtxt=null;
				$qtxt="update user set status='online' where user.id=$jboy->id";
				$da=mydb::conn()->query($qtxt);
				if($da){
					$_SESSION["user"]=$jboy->user;
					$_SESSION["id"]=$jboy->id;
					$da=null;
					$qtxt=null;
					$jboy=null;	
				}
			}
		}
	}
}
}
?>
