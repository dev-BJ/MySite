<?php
header("content-type:text/html");

include "../al.php";

if(isset($_POST["pid"])){
	$page=substr($_POST["pid"],0,9);
	}
	
$sql="select * from post,user where post.enc='$page'and post.user=user.id";
$query=mydb::conn()->query($sql);
if($query->num_rows==1){
	extract($query->fetch_assoc());
	}
?>
<style>
			.content{
				position:relative;
				bottom:2em;
			}
			.container-fluid{
				color:black;
			}
</style>
<span class="close" ><button onclick="cancel()" >X</button></span>
<div class="container-fluid" >
<div class="<?php echo $status; ?>" style="width:40px;height:40px">
<img src="<?php echo $img; ?>"  alt="<?php echo $user; ?>"  width="30"  height="30" class="img-round" />
</div>
<div class="name" >
<a href="/user/whois.php"><?php echo $user; ?></a>
</div>
<div class="title" style="position:relative;top:-2px;"><?php echo $title; ?></div>
<hr style="background-color:black;position:relative;bottom:1em;">
<div class="content">
<?php echo $sub; ?>
</div>
</div>
<?php
ob_flush();
flush();
$query->close();
?>