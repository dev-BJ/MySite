<?php
include"../al.php";
try{
$user=$_GET["data"];

$sql="SELECT*FROM user WHERE user='$user'";
$result=mydb::conn()->query($sql);
$row=$result->num_rows;
if($row==1){
echo "$user as been taken";
}
else{
echo "carry go,no shaking";
}
}
catch(Exception $e){}