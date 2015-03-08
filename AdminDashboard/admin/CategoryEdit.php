<div id="content">
	<?php
		
		$category = new Category();
		$msg = "";
		$err = 0;
		$ecategoryName = "";
        $category->Id = $_GET["id"];
		$category->SelectById();
		$previousName =$category->Name;
		
		if(isset($_POST["sub"])){
			
			if($err == 0){
				
			$category->Id = $_POST["id"];
			$category->SelectById();
			$category->Name = $_POST["category"];
			$category->UserId = "1";
			$category->Date = $_POST["date"];
			$category->Operation ="Update";
			
			echo $currentName =$_POST["category"] ;
			
			if($category->Update()){
				$msg = "You have succesfully updated category name <b>{$previousName}<b> to <b>{$currentName}</b>";
				
				}	
			}
		}	
		$category->Id = $_GET["id"];
		$category->SelectById();	

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
                                    <h5>Update News Category</h5>
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
                                    <form action="" class="form-horizontal" id="block-validate" method="post" novalidate>
										<input type="hidden" id="id" name="id" value="<?php echo $_GET["id"]; ?>" />
                                        <input type="hidden" id="date" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>" />
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Category Name</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="category" name="category" value="<?php echo $category->Name; ?>" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                        	<a href="" title="Back" class="btn btn-default btn-lg btn-grad"><i class="icon-long-arrow-left"></i></a>
                                            <input type="submit" value="Update Category" style="margin-left:50px" class="btn btn-primary btn-lg " name="sub">
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
