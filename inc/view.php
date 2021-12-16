<?php
if(isset($_GET["pid"])){
	$page=substr($_GET["pid"],0,9);
	}
	else{
		util::header("index");
		}
$sql="select * from post,user where post.enc='$page' and user.user=post.user";
$query=mydb::conn()->query($sql);
if($query->num_rows==1){
	extract($query->fetch_assoc());
	}
	else{
		util::header("index");
	}
?>
<style>
			.container-fluid{
				background:grey;
				display:block;
				border-radius:10px;
				height:auto;
			}
			hr{
				position:relative;
				bottom:3em;
			}
			.content{
				position:relative;
				bottom:2em;
			}
</style>
<div class="container-fluid" >
<div class="<?php echo $status; ?>"  >
<img src="<?php echo $img; ?>"  alt="<?php echo $user; ?>"  width="50"  height="50" ></img>
</div>
<div class="name" >
<?php echo $user; ?>
</div>
<div class="title"><?php echo $title; ?></div>
<hr >
<div class="content">
<?php echo $sub; ?>
</div>
</div>