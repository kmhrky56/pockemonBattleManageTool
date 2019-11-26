<?php
	header('content-type : application/json; charset=utf-8');
	
	if($_GET['method']){
		print json_encode({
		response:'HelloWorld!'
	});
	}	
?>