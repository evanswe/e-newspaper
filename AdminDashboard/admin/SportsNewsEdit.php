
 <div id="content">
<?php
		$c = new Category();
	    $news = new News();
		 
?>

<?php 
		
		$err = 0;

	    if(isset($_POST["sub"])){
		
		if($err == 0){
			$msg = "";
			$news->Id = $_POST["id"];
			$news->SelectById();
			$previousName =$news->Title;
			
			$description = "files/" . $news->Description;
			unlink($description); 
			
			if(($_FILES["image"] != "")
				&&
				(($_FILES['image']['type'] == "image/jpeg") ||
				($_FILES['image']['type'] == "image/jpg") ||
				($_FILES['image']['type'] == "image/png") ||
				($_FILES['image']['type'] == "image/gif"))){				
			 
				
					if($news->Image != ""){
						$img = "images/".$news->Image;
						unlink($img);
					}
					$news->Image = UploadImage($_FILES["image"]);
			}
			
			
				
			$news->Title = $_POST["title"];
			$news->Description = CreateFile($_POST["description"]);
			$news->FirstPage  = $_POST["firstpage"];
		    $news->BreakingNews = $_POST["breakingnews"];
			$news->Date =  $_POST["date"];
			$news->Video = "";
			$news->CategoryId = $_POST["category"];
			$news->HitView = 0;
			$news->UserId= 1;
			
			
			echo $currentName = $_POST['title'];
			
			
			
			
			if($news->Update()){
				$msg = "You have successfully updated news name form <b>{$previousName}</b> to <b>{$currentName}</b>";
			}
		}
	}
		
	$news->Id = $_GET['id'];
	$news->SelectById();
?>		

<div class="row">

			<?php 
				if($msg != ""){
			?>
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <?php echo $msg; ?>
                                    </div>
                                 </header>
                             </div>
                         </div>
             <?php }?>
                <!--End notification-->
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Update News </h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse" href="#collapseOne">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body body in" style="height: auto;">
                                    <form action="" class="form-horizontal" id="block-validate" method="post" name="myform" enctype="multipart/form-data">

										<input type="hidden" id="id" name="id" value="<?php echo $_GET["id"]; ?>" />
                                        <input type="hidden" id="date" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>" />
                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">SportsTitle</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="title" name="title" value="<?php echo $news->Title; ?>" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Sports Description</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="description" name="description" value="<?php FileRead("files/".$news->Description); ?>" class="form-control">
                                            </div>
                                        </div>
                                      
                                       <div class="form-group">
                                            <label class="control-label col-lg-4">Sports 1st Page</label>
                                            <div class="col-lg-4">
	                                        	<select name="firstpage" class="form-control">
                                                
                                                 <option value="">Select</option>
                                                 
                                                 <?php 
												 	if($news->FirstPage == "Y"){
												 ?>
                                                 	<option value="Y" selected="selected">Yes</option>
                                                    <option value="N">No</option>
                                                 <?php }else{?>
                                                 	<option value="Y">Yes</option>
                                                    <option value="N" selected="selected">No</option>                                                 
                                                 <?php }?>
                                                    
                                                    
												</select>
                                            </div>
                                        </div>
                                        
                                        
                                       
                                        
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Sports BreakingNews</label>
                                            <div class="col-lg-4">
                                            <select name="breakingnews" class="form-control">
                                                	<option value="">Select</option>
                                                 
                                                 <?php 
												 	if($news->BreakingNews == "Y"){
												 ?>
                                                 	<option value="Y" selected="selected">Yes</option>
                                                    <option value="N">No</option>
                                                 <?php }else{?>
                                                 	<option value="Y">Yes</option>
                                                    <option value="N" selected="selected">No</option>                                                 <?php }?>
                                                    
                                                    
												</select>
                                             </div>
                                         </div>    
	                                        	
                                               
                                                  
                                      
                                
                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Change Image</label>
                                            <div class="col-lg-8">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                                                    	<?php 
															if($news->Image != ""){
																echo "<img src='images/{$news->Image}' width='200' height='150'/>";
															}
														?>
                                                    </div>
                                                    <div>
                                                        <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image" /></span>
                                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Category Name</label>
                                            <div class="col-lg-4">
                                       
                               <select name="category" class="form-control">
                                                                                                                                                                            <option value="0" selected="selected">Select Category</option>
											   <?php
                                                    Selected($c->Select(), $news->CategoryId);
                                               ?>  
                                   </select>            
                                
                                      </div>
                               </div>
                                                                
                                                
                                           
                                        
                                        
                                          
                                        
                                        
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                        	
                                            <input type="submit" value="Update" style="margin-left:124px" class="btn btn-primary btn-lg " name="sub">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
		<!--Start of Table-->                    
        <!--End of Table-->
</div>


     <!--END PAGE LEVEL SCRIPT-->
