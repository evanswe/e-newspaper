<?php
     $category= new Category();
	 $category->Id = $_GET['id'];
	  if($category->Delete()){
		
		Redirect("?a=AddCategory&ms=Deleted Successfully");
	}else{
		
		Redirect("?a=AddCategory&ms={$category->Err}");
	}
?>