<?php
ignore_user_abort(1);
error_reporting(E_ALL);

include "../conf/util.php";
include "../conf/mydb.php";
include "../var.php";

$conn=mydb::conn();

if($install){
	http_response_code(403);
	echo strtoupper("no access");
	exit(0);
	}

$table="CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
img varchar(255) not null,
user VARCHAR(30) not null,
pass VARCHAR(30) not null,
email VARCHAR(100) not null,
gender VARCHAR(6) not null,
dob INT(30) not null,
status VARCHAR(10) not null,
date TIMESTAMP)";
if(!$conn->query($table)) {
	echo $conn->error;
}

$sql="CREATE TABLE post (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user VARCHAR(20) not null,
title VARCHAR(50) not null,
enc VARCHAR(30) not null,
sub text not null,
file varchar(50),
date TIMESTAMP)";
if(!$conn->query($sql)){
 echo	$conn->error;}
	
$img="create table img(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user VARCHAR(50) not null,
path VARCHAR(50) not null)";
if(!$conn->query($img)){
echo	$conn->error;}
	
$file="create table file(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(100) not null,
path VARCHAR(50) not null)";
if(!$conn->query($file)){
echo $conn->error;
}
ob_flush();
flush();
$file=file_get_contents("../var.php");
$file=str_replace("\$install=0","\$install=1",$file);
file_put_contents("../var.php",$file);
sleep(5);
mydb::close();
?>