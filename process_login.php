<?php session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$flag = false;

if($username == 'demo' && $password == 'Andorra2017'){
	$flag = true;
	$mem_id = 1;
}

if($flag){
	$_SESSION["MEM_ID"] = $mem_id;
	header("location: index.php");
} else {
	header("location: login.php?err=1");
}

?>