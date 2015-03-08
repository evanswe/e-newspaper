<?php 
	if(isset($_GET["p"])){
		include_once("view/".$_GET['p'].".php");
	}else{
		include_once("view/home.php");
	}
?>