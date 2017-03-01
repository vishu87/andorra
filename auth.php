<?php
	session_start();
	if(!isset($_SESSION["MEM_ID"])){
		header("location: login.php");
	}
?>