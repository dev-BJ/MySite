<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<?php
include "conf/sd.php";
include "conf/ob.php";
include "conf/login.php";
include "conf/util.php";
include "conf/basic.php";
include "conf/fm.php";
include "conf/mydb.php";
include "var.php";
?>
	<html>
		<head>
		 <link href="css/style.css"  type="text/css"  rel="stylesheet"></link>
		 <script src="js/jquery.js" ></script>
		 <script src="js/9js.js" ></script>
		 <script src="js/index.js"></script>
		 <meta name="viewport" content="width=device-width"></meta>
		 <title> <?php echo util::$sn."|Home"; ?> </title>
							
	     <?php
		if(isset($_SESSION["user"])) {
		    $user=$_SESSION["user"];
		} else {
	         $user="guest";
		 }
		                         ?>
		</head>
													
												<body onload="greet()" >
													<div class="bar1" >
													
														<div id="t">
															<div class="sn"><?php echo util::$sn; ?></div>
														 </div>
																	
																<div class="text" >
																
																	<span id="greet">
																 <?php
																 echo basic::greet();
																 ?>
																	</span>
																		<span>
																	<?=$user?>
																		</span>
																			<span>
																			
																				<noscript>Turn on JavaScript
																				</noscript>
																				
																			</span>
																			
																				<span class="text-error" >
																				
																			<?php
																			 if(isset($_GET["err"])) basic::err($_GET["err"]);
																			?>
																			
																				</span>
																				
														        </div>
																				
																			<div class="bar2"  >
																		<?php
																		basic::link();
																		?>
																			</div>
																			
																					<style>
																						a[href^="post"]
																						{
																							display : inline-block;
																							position : relative;
																							left: 180px;
																						}
																							</style>
																								
																								<?php
																								basic::desc();
																								?>
																								
																									<div class="bar3">
																								<?php
																								include"inc/index.php";
																								?>
																									</div>
																									
																									<footer class="foot">
																								<?php
																								include"footer.php";
																								?>
																									</footer>
																									
																					</body>
																							</html>