<?php 

$token=util::getToken();

switch(req::get("g")->get("action")){
	default:

/*for post
/post/index.php
Inclusion*/
	?>
	<form action='/pcs/wp.php' method='post' enctype='multipart/form-data' >
	<input type='hidden' name='MAX_FILE_SIZE' value='102048' />
	<input type='hidden' name='act' value='index' />
	<input type='hidden' name='token' value='<?php echo $token; ?>' />
	<br >
	<input type='text' name='title' placeholder='Title' class='form-control text text-info text-center' />
	<br >
	<textarea rows='10' cols='3' name='post' class='form-control text text-info' ></textarea>
<input type='file' accept='.zip,.7z,.tar,.tar.gz,.apk' name='file' class='form-control' />
	<input type='submit' name='sub' value='Post' class='sub' />
	</form>
	<?php
;
/*closed here */

	}
	?>