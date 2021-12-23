<?php

class core {

	public static function login($c,$u,$p,$rm) {
 		$sql="select user.id,user.user from user where user='$u' and pass='$p'";
 
		$s=$c->query($sql);
		$auth=$s->num_rows;
		var_dump($auth);
		if($auth==1) {
			//session begin
			session_start();
 			$filter=new fm($s->fetch_assoc());
 			$_SESSION["user"]=$filter->get("user");
			 $_SESSION["id"]=$filter->get("id");
			$mine=[
"id"=>$filter->get("id"),
"user"=>$filter->get("user"),
"rm"=>$rm
];
 			$sql="update user set status='online' where user.id=".$filter->get("id");
 			if($c->query($sql)) {
				req::remove("p");
				}
				setcookie("user",json_encode($mine),time()+(86400*30),"/");
				$c->close();
				util::rdr("../index");
		} else {
			unset($_POST);
			util::rdr("../auth/login",md5("err"));
 		}
	}
	
	public static function register($conn,$img,$user,$pass,$email,$gender,$date,$status) {
	    error_reporting(E_ALL);
	    $origin=$_SERVER["HTTP_ORIGIN"];
	  
 		$sql="insert into user(img,user,pass,email,gender,dob,status) values('$img','$user','$pass','$email','$gender','$date','$status')";
		$c="select * from user where user='$user'";
        $c=$conn->query($c);
        
		if($c->num_rows>0) {
		    echo "rdr 42";
			header("Location:".$origin."/auth/reg.php?err=".md5("err"),true);
			exit;
		}
		
		#register
		$reg=$conn->query($sql);
        if($reg) {
            echo "rdr 49";
			header("Location:".$origin."/auth/reg.php?err=".md5("err"),true);
			exit;
		}
		echo "rdr 53";
		header("Location:".$origin."/auth/login.php",true);
		exit;
	}

	public static function upload($f) {
		$dir="file/";
		$n=basename($f["name"]);
		echo $n;
	}

	static function post($conn,$user,$title,$post) {
		
		$enc=substr(md5($title),0,9);
		$c="select post.enc from post where enc='$enc'";
		$c=$conn->query($c);
		if($c->num_rows>0) {
			util::rdr("/post/index",md5("ext"));
			exit(0);
		}
		$s="insert into post(user,title,enc,sub) values('$user','$title','$enc','$post')";
		if(!$conn->query($s)) {
			util::rdr("/post/index",md5("err"));
			exit;
		}
		$conn->close();
		util::rdr("/index");
	}
	
	static function out(){
	}
}
?>