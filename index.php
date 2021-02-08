<?php include_once("header.php");
#conteudo
if(empty($_SERVER["QUERY_STRING"])) {
	$var = "home.php";
	include_once("$var");
}else{
	$pg = $_GET['pg'];
	if(is_file("$pg.php")) {
		include_once("$pg.php");
	}else{
		include_once("404.php");
	}
}
include_once("footer.php");
