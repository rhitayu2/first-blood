<?php
	function isEmpty($str){
    	return (!isset($str) || trim($str) === '');
	}

	session_start();
	$redirect = $_GET['redirect'];
	$message = $_GET['message'];
	// echo $redirect;
	// echo $message;
	session_destroy();
	if(!isEmpty($redirect)){
		if(!isEmpty($message)){
			header("Location: ". $redirect. ".php?message=" . $message);
			die();
		}
		header("Location: ".$redirect.".php");
		die();
	}
	else{
		header("Location: index.php");
		die();
	}
?>