<?php 
if(isset($_GET['o'])){
	include_once("operator/".$_GET['o'].".php");
}
else if(isset($_GET['a'])){
	include_once("admin/".$_GET['a'].".php");
}
?>