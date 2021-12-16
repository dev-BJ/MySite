<?php
include "../al.php";

session_start();
if(!isset($_SESSION["user"])){
	util::rdr("/index");
}
?>
	<!doctype HTML>
		<html>
			<head>
				<link href="../css/style.css" type="text/css" rel="stylesheet" />
					<script src="../js/9js.js" type="text/javascript"  >
					</script>
					<script src="../js/jquery.js" language="javascript" >
					</script>
					<meta name="viewport" content="width=device-width">
						<title>
						<?php echo util::$sn."|Composer"; ?>
						</title>
						<style>
						.container-fluid{
							width:400px;
						}
						</style>
						</head>
										<body onload="greet()" >
											<div class="bar1">
												<div id="t">
												<?php echo util::$sn; ?>
												</div>
												</div>
													
												<div class="text" >
													<span id="greet">
													<?php echo basic::greet();?>
													</span>
														<span>
														<?php echo $_SESSION["user"]; ?>
														</span>
															<span>
																<noscript>Turn on JavaScript
																</noscript>
															</span>
														</div>
															
														<div class="bar2">
															<a href="/index.php" class="press color">Home
															</a>
														</div>
														
														<br >
										<div class="bar3" >
			            <div class='container-fluid'>
			<?php include "../inc/write.php";
			if(isset($_GET["err"])) echo basic::err();
			?>
															</div>
														</div >
															
														<footer class="foot">
															<?php
															include"../footer.php";
															?>
															</footer >
														</body>
													</HTML>