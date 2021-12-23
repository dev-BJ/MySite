<?php
include "../al.php";
?>
<!doctype HTML>
	<html>
		<head>
			<link href="../css/style.css" type="text/css" rel="stylesheet"/>
			<script src="../js/jquery.js" ></script>
			<script src="../js/9js.js" ></script>
		<meta name="viewport" content="width=device-width">
			<meta name="handheld">
			</meta>
			<meta name="RSS">
			</meta>
			<title>
			<?php echo util::$sn."|Registration"; ?>
			</title>
			
			</head>
			<body onload="greet()" >
<script>
</script>
				<div class="bar1">
					<div id="t">
					<?php echo util::$sn; ?>
					</div>
					</div>
						
					<div class="text">
						<span id="greet">
						<?php echo basic::greet(); ?>
						</span>
							<span>
							guest
							</span>
								<span>
									<noscript>Turn on JavaScript
									</noscript>
								</span>
							</div>
								
							<div class="bar2">
								<a href="/index.php" class="press color">Home
								</a>
								<a href="login.php" class="press color">Login
								</a>
							</div>
								
								
							<div id="in"> Welcome to 9japulse,
							</br>
								It is nice to have people who we can share out views with
						</br>
								and also make friends to code together.
					</br>
								Stay connected with us
				</br>
								Thank you.
			</div>
			<div class="bar3">
					<div class="container-fluid">
						<form method="post" action="/pcs/reg.php">
		
						<input type="text" id="reg" placeholder="Username" maxlength="20"  name="user" class="form-control text-center text-info"/>
						<span id="rid"></span>
					
					<input type="password" placeholder="Password" id="pass"  name="pass" onblur="" class="form-control text-center text-info" />
					<span id="pid"></span>
							
						<input type="email" placeholder="E-mail" id="email"  name="email" class="form-control text-center text-info" />
						
					<select Id="gender" name="gender" class="form-control text-center text-info" >
						<option value="">--Gender--
						</option>
						<option value="Male">Male
						</option>
						<option value="Female">Female
						</option>
					</select >
					
					<input type="date" name="date" class="form-control text-center text-info" />
					
					<input type="submit" value="sign-up" onclick="" class="sub" name="sign"/>
				</form>
				<span class="text-error" ><?php if(isset($_GET["err"])) basic::err($_GET["err"]); ?></span>
			</div>
		</div>
	</div>
	<footer class="foot">
<?php
include"../footer.php";
?>
		</footer>
			</script>
		</body>
	</html>