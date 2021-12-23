<?php

class basic {
	public static function greet() {
		$hour=date("H");
		if ($hour < 12) {
			return "Morning";
		} else
			
 if ($hour <= 16) {
			return "Afternoon";
		} else
			
 if ($hour <= 19) {
			return "Evening";
		} else {
			return "Goodnight";
		}
	}

	public static function desc() {
		if(!isset($_SESSION["user"])) {
			echo'
<div id="in" > Welcome to 9japulse,
</br>
It is nice to have people who we can share out views with
</br>
and also make friends to code together.
</br>
Stay connected with us
</br>
Thank you. 

</div>';
		} else {
			echo "<a href='post' class='press color' >
What's on your mind</a>";
}
ob_flush();
flush();
}

public static function link(){
if(!isset($_SESSION["user"])){
echo '
<a href="auth/login.php" class="press color">Login
</a>
<a href="auth/reg.php" class="press color">Sign
</a>';} else{
echo'
<a href="auth/logout.php" class="press color" >
Logout
</a>
<a href="/user/profile.php" class="press color" >Profile</a>';}
}

public static function err($err){
 $msg="";
if(isset($err)){
switch($err){
case md5("e"):$msg.="An error occured";
break;
case md5("et"):$msg.="Title is required";
break;
case md5("ep"):$msg.="No text";
break;
case md5("pbf"):$msg.="bad format";
break;
case md5("err"):$msg.="An error occured";
break;
case md5("ext"):$msg.="post exists";
break;
case md5("ue"):$msg.="username is required";
break;
case md5("pe"):$msg.="password is required";
break;
case md5("pl"):$msg.="password is less than 6";
break;
case md5("pbf"):$msg.="bad format";
break;
case md5("err"):$msg.="Your name does not exist";
break;
default:$msg="";
};
echo $msg;
}
}

static function error($str){
print($str);
}
}
?>