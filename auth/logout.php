<?php

include "../al.php";
session_start();
$conn=mydb::conn();
$id=$_SESSION["id"];
$sql="update user set status='offline' where user.id='$id'";
if($conn->query($sql)) {
	$c=json_decode($_COOKIE["user"]);
	setcookie("user",json_encode($c),60,"/");
	session_destroy();
	$conn->close();
util::rdr("/index");
exit;
}

util::rdr("/index",md5("err"));

?>