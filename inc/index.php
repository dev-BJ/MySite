
<?php

$db=mydb::conn();

if(isset($_GET["page"])) {
	$page=$_GET["page"];
} else {
	$page=1;
}
$page=($page-1)*10;
$sql="select *,post.id as code from post,user";
$co="select count(*) as c from post";
$cou=$db->query($co);
$coun=$cou->fetch_assoc();
$q=$db->query($sql);
$data=$q->fetch_assoc();
for($i=0;$i<($coun["c"]);$i++) {
?>

	<div class='c' >
	<span>
	<div class="<?php echo $data["status"]; ?>" >
	<img src='<?php echo $data["img"]; ?>' width='50' height='50' alt='user image' ></img>
	</div>
	<br >
	<div class='name' >
	<a href='user/whois.php?user=<?php echo $data["code"]; ?>' ><?php echo $data["user"]; ?></a>
	</div>
	</span>
	<div class='title' >
	<a href="post/view.php?pid=<?php echo md5($data["title"]); ?>" id='<?php echo md5($data["title"]); ?>' class='view' ><?php echo $data["title"]; ?></a>
	</div>
	</div>
	<hr >
	<?php
}
for($i=2;$i<(count($coun["c"])/10);$i++) {
	echo "<a href='index.php?page=$i' class='press color' >$i</a>";
}

?>
