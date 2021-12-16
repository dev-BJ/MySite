<?php
include "../config/db.php";
include "../config/al.php";

$core=new Core;

if(isset($_GET["pid"])){
extract($_GET);
}
else{
$core->header(function($ctx,$resp){
if($resp) $ctx->rdr(index);
});
exit;
}
$enc=substr($pid,0,5);
echo $enc;
$sql="delete from post where post.enc='$enc'";

if($conn->query($sql)){
$core->header(function($ctx,$resp){
if($resp) $ctx->rdr(index);
});
}
else{
$core->header(function($ctx,$resp){
if($resp) $ctx->rdr(index,md5("err"));
});
}