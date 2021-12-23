
<style>
@import url("../css/bootstrap.min.css");
.alert{
	width:600px;
	height:auto;
	margin:auto;
}
.alert-danger{
}
.text{
	font-size:20px;
}
</style>

<?php
$install=1;
//error callback
$error=function($no,$err,$path,$line){
	echo "<div class='alert alert-danger'><span class='text text-danger'>[$no]-$err in $path on line $line</span></div>";
};


?>