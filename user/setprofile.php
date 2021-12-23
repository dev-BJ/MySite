<?php
ob_start();
session_start();

include "../al.php";
if(!isset($_SESSION["user"])) util::rdr("/index");

$conn=mydb::conn();
$q="select * from user where id=".$_SESSION["id"];
$q=$conn->query($q);
$data=$q->fetch_assoc();
?>
<!doctype HTML>
	<html>
		<head>
			<link href="/css/style.css"  type="text/css"  rel="stylesheet" />
				<script src="/js/jquery.js" >
				</script>
					<script src="/js/9js.js" >
					</script>
						<meta name="viewport" content="width=device-width">
							<title>
						<?php
						echo util::$sn."|Home";
						 ?>
							</title>
							
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
													
														<div id="t"  >
															<?php echo util::$sn; ?>
																</div>
																
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
																				
																			
																				</span>
																				
																			</div>
																				
																			<div class="bar2"  >
		<a href="/" class="press color" >Home</a>																	</div>
																								
																									<div class="bar3">
                                                                                                    <div class="container-fluid" >
                               <form action="/pcs/setprofile.php"  method="post" enctype="multipart/form-data">
                               <input type="file" name="img" class="form-control" ></input>
							   <?php
                            foreach($data as $k=>$v){
                                if($k=="img"){
                                    continue;
                                }
                                else if($k=="pass"){
                                    continue;
                                }
                                else if($k=="id"){
                                    continue;
                                }
                                else if($k=="status"){
                                    continue;
                                }
                                else if($k=="date"){
                                    continue;
                                }
                                else{
									$k=ucfirst($k);
									echo"
									<fieldset>
									<legend>$k</legend><input type='text' name='$k' class='form-control' value='$v' ></input>
									</fieldset><hr >";
                                }
                            }
                            ?>
                            <input type="submit" value="Update" />
                               </form>
                               </div>
                               </div>
																									
																									<footer class="foot">
																								<?php
																								include"../footer.php";
																								?>
																									</footer>
																								</body>
																							</html>