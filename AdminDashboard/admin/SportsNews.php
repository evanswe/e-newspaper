<script>
	$(document).ready(function(){
		$("#table_news td").click(function(){
			if($(this).index() == 3){
				//alert("Hi");
				var newsTitle = $(this).prev().text();
				var newsDescription = $(this).text();
				$("#news_title").text(newsTitle);
				$("#news_description").text(newsDescription);
			}
		});
		
	});
</script>
<div id="content" style="width:80%">
    <?php
		$c = new Category();
		
		$news = new News();
		 
	?>
    
    
    <?php
 
     $Err = "";
	 
	 if(isset($_POST["sub"])){
		 
		 if($err == 0){
			      $news->Title =$_POST["title"];
				  $news->Description = CreateFile($_POST["description"]);
				  $news->FirstPage = $_POST["firstpage"];
				  $news->BreakingNews = $_POST["breakingnews"];
				  $news->Date = $_POST[""];
				  $news->Video = "";
				  $news->Image = UploadImage($_FILES["image"]);
				  $news->CategoryId = $_POST["category"];
				  $news->HitView = 0;
				  $news->UserId = "1";
				  
				  
				  if($news->Insert()){
					     $msg ="News Added Succesfully";
						  
					  }else{
						  echo $news->Err;
						  }
			      }
		 
		 } 
 
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
                                    <h5>Add News Document</h5>
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
                                    <form action="" class="form-horizontal" id="block-validate" method="post" enctype="multipart/form-data" name="myform" novalidate>
																
                                        
 																
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Sports Title</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="title" name="title" class="form-control">
                                            </div>
                                        </div>
                                        
 																
                                       <div class="form-group">
	                                        <label class="control-label col-lg-4">Sports Description</label>
                                            <div class="col-lg-4">
                                                <textarea id="description" name="description" class="form-control"></textarea>
                                            </div>
					                   </div>
                                       
                                       
                                        
 																
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Sports 1st Page</label>
                                            <div class="col-lg-4">
	                                        	<select name="firstpage" class="form-control">
                                                	<option value="">Select</option>
                                                    <option value="Y">Yes</option>
                                                    <option value="N">No</option>
												</select>
                                            </div>
                                        </div>
                                        
 										
                                        
 																
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Sports BreakingNews</label>
                                            <div class="col-lg-4">
	                                        	<select name="breakingnews" class="form-control">
                                                	<option value="">Select</option>
                                                    <option value="Y">Yes</option>
                                                    <option value="N">No</option>
												</select>
                                            </div>
                                       </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Sports Picture</label>
                                            <div class="col-lg-8">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                                    <div>
                                                        <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image" /></span>
                                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
 																
                        
                                        
 																
                                        <div class="form-group">
                                            <label class="control-label col-lg-4"> Sports Category</label>
                                            <div class="col-lg-4">
                                                
                                                 <select name="category" class="form-control">
                                                    <option value="0">Select One</option>
												   	<?php
                                                    	    Option($c->Select());
                                                   	?>              
                       							</select>
                                            </div>
                                        </div>
                                        
                                   
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Add Sports  News" style="margin-left:160px" class="btn btn-primary btn-lg " name="sub">
                                        </div>

                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!--End of Total Form-->
                    
                    
		<!--Start of Table-->                    

		<!--Start of Table-->                    
<div class="row">
                <div class="col-lg-12">
                            <div style="overflow: scroll">
                                <table style="width: 1400px" class="table table-bordered table-hover" id="table_news" >
                                        <tr role="row">
                                            <th style="width:100px">Edit</th>
                                            <th>Delete</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>First Page</th>
                                            <th>BreakingNews</th>
                                            <th>Date</th>
                                            <th>Videos</th>
                                           <th>Image</th>
                                            <th>CategoryName</th>
                                            <th>HitView</th>
                                            <th>Modified By</th>
                                        </tr>
                                        
                     
                                        
                                        
                            <?php 
								$r= $news->Select();
								if($r!= ""){
									for($i=0; $i<count($r); $i++){
										
							?>
                                    <tr class="gradeA odd">
                                            <td class="center" style="text-align:center"><a title="Edit" href="?a=SportsNewsEdit&id=<?php echo $r[$i][0]; ?>"><i class="icon-edit"></i></a></td>
                                            <td class="center" style="text-align:center"><a title="Delete" href="?a=SportsNewsDel&id=<?php echo $r[$i][0]; ?>"><i class="icon-remove"></i></a></td>
                                            <td class="sorting_1"><?php echo $r[$i][1]; ?></td>
                                            <td  data-toggle="modal" data-target="#notificationModal">
											
											<div  style="height: 40px; overflow: hidden">
											<?php
											if(substr($r[$i][2], -4) == ".txt"){
						                           FileRead("files/" . $r[$i][2]);
											}
											
											
											 
											?>
                                            </div>
											<input data-toggle="tooltip" data-placement="top" title="READ DETAILS" class="btn btn-default btn-sm btn-line btn-rect" type="button" value="READ FULL">
											
											</td>
                                            <td class=" ">
											<?php 
												if($r[$i][3] == "Y"){
													echo "Yes";
												}else{
													echo "No";
												}
											?>
											
                                            </td>
                                            <td class=" ">
												<?php 
													if($r[$i][4] == "Y"){
														echo "Yes";
													}else{
														echo "No";
													}
												?>
											</td>
                                            
                                            <td class=" "><?php echo $r[$i][5]; ?></td>
                                            <td class=" "><?php echo $r[$i][6]; ?></td>
                                            
                                          
                                            <td class=" ">
											<?php 
											if($r[$i][7] != ""){
							                    echo '<img src="images/'.$r[$i][7].'" width="100" height="60"/>';
											}else{
												echo "No Image";
											}
				                            ?>
                                             </td> 	
                                             <td class=" "><?php echo $r[$i][8]; ?></td>
                                            <td class=" "><?php echo $r[$i][9]; ?></td>
                                            <td class=" "><?php echo $r[$i][10]; ?></td>
                                             
                                            
                                            
                                            
                                            
                                    </tr>>
										<?php }
							 }?>
                             
                                        
                                </table>
						</div>
						<div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>
                    
                </div>
            </div>        
        <!--End of Table-->
      
	  
	  <!--Modal for News Display-->
		<div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="width: 80%">
                                    <div class="modal-content">
									<button type="button" class="close" 
									class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top"
									data-dismiss="modal" aria-hidden="true">×</button>
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="news_title">Modal title</h4>
                                        </div>
                                        <div class="modal-body" id="news_read">
                                            
                                        </div>
										<div class="modal-body">
											<b>Description: </b><div id="news_description"></div>
											<b>First Page:</b> <span  id="news_first_page"></span><br/>
											<b>Marquee:</b> <span  id="news_first_marquee"></span><br/>
											
										<div>
                                    </div>
                                </div>
                            </div>
                    </div>
		</div>
	  
</div>
<!--End of Content-->
