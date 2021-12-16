<?php
session_start();
include "../al.php";
?>
<!DOCTYPE HTML>
	<html>
		<head>
		
			<link href="../css/style.css"  type="text/css"  rel="stylesheet" />
			<script src="../js/jquery.js"></script>
			<script src="../js/9japulse.js" ></script>
			<meta name="viewport" content="width=device-width,initial-scale=0.621">
				<meta name="handheld">
				</meta>
				<meta name="RSS">
				</meta>				
				<title>
				<?php echo util::$sn."|view"; ?>
				</title>
				<?php
				if(isset($_SESSION["user"])){
					$user=$_SESSION["user"];}
					else{
						$user="guest";
					}
					?>
				 	<style>
			.bar1{
			height:60px;
			width:100%;
			}
			.bar1 .date{
			position:relative;
			bottom:20px;}
			.bar2{
			height:80px;
			width:100%;}
			.bar2 .date{
			position:relative;
			bottom:50px;
			font-size:20px;
			float:left;}
			.bar2 a{
			position:relative;
			bottom:0px;
			float:left;}
			.foot{
			height:50px;
			width:100%;}
			.bar3{
				height:auto;
			width:100%;}
			.c{
			top:20px;}

			</style>
			</head>
			<body onload="greet()" >
				<div class="bar1" >
					<div id="t"  >
					<?php echo util::$sn; ?>
					</div>
					 	<span id="date" class="date" ></span>
					</div>
						
					<div class="text" >
						<span id="greet">
						</span>,
							<span>
						<?=$user?>
							</span>
								<span>
									<noscript>Turn on JavaScript 
									</noscript>
								</span>
								<span class="text-error" >
								<?php
								if(isset($_GET["err"])){
									if($_GET["err"]==md5("err"))
										{
										echo "An error occured during logout";}}
										?>
								</span>
							</div>
								
							<div class="bar2"  >
							<a href="../index.php" class="press color" >home
							</a>
							<?php
							if(!isset($_SESSION["user"])){
								echo '
								<a href="../auth/login.php" class="press color">Login
								</a>
								<a href="../auth/reg.php" class="press color">SIGN
								</a>';}
							
								else{
									echo'
								<a href="../auth/logout.php" class="press color"  >
								Logout
								</a>';}
								?>
							</div>

								
			<div class="bar3">
		<?php
		include"../inc/view.php";
		?>
			</div>
				<footer class="foot">
			<?php
			include"../footer.php";
			?>
				</footer>
			</body>
		</html>