<?php
$news = new News();
$news->Id = $_GET['id'];
$news->SelectById();
$des = "files/" . $news->Description;


$pic = "images/" . $news->Picture;
//echo $pic;
	
	if($news->Delete()){
		unlink($des);
		unlink($pic);
		Redirect("?a=SportsNews&ms=Deleted Successfully");
	}else{
		Redirect("?a=SportsNews&ms={$news->Err}");
	}





?>