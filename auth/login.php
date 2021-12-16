<?php 
include "../al.php";
session_start();
if(isset($_SESSION["user"])) util::rdr("/index");
 ?>
<!doctype HTML>
<html>
    <head>
        <title><?php echo util::$sn;?>|login</title>
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
        <script src="../js/jquery.js" ></script>
        <script src="../js/9js.js" ></script>
        <meta name="viewport" content="width=device-width" />
        <style>
            .text{
                position:relative;
                top:0px;
                display:inline-block;
            }
        </style>
    </head>

    <body onload="greet()">
   <div class="bar1" >
    <div id="t">
     <div class="sn" ><?php echo util::$sn; ?></div>
    </div>
</div>

<div class="text" >
    <span id="greet" >
<?=basic::greet(); ?>
</span>
<span>Guest</span>
</div>

<div class="bar2" >
<a href="/" class="press color" >Home</a>
<a href="/auth/reg.php" class="press color" >Sign-up</a>
</div>

<div class="bar3" >
<div class="container-fluid" >
<form action="/pcs/login.php" method="post" class="form" >
<input type="text" name="user" class="text-center text-info form-control" placeholder="Username" ></input>
<input type="password" name="pass" class="text-center text-info form-control" placeholder="Password" ></input>
<input type="submit" name="submit" class="press" value="Sign-in" ></input>
</form>
</div>
</div>
    </body>
    <footer class="foot" ></footer>
</html>