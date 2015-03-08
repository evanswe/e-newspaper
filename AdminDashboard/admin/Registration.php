
<div id="content" style="width:80%">
    <?php
		$country = new Country();
		$city= new City();
		$users = new Users();
		 
	?>
    <script language="JavaScript"><!--
		function setOptions(chosen) {
			var selbox = document.myform.city;
			 //alert("Hi");
			selbox.options.length = 0;
			if (chosen == "0") {
			  selbox.options[selbox.options.length] = new Option('Please select one of the options above first', '0');	 
			}
		<?php
				$r= $country->Select();
				for($i = 0; $i < count($r); $i++) {
		?>
			if (chosen == "<?php echo $r[$i][0]; ?>") {
				<?php
					$city->CountryId = $r[$i][0];
					$datar = $city->Select();
					if($datar != "") {
					for($j = 0; $j < count($datar); $j++) {
						
				?>
					selbox.options[selbox.options.length] = new Option("<?php echo $datar[$j][1]; ?>", "<?php echo $datar[$j][0]; ?>");
			  <?php } }else{ ?>
			  		selbox.options[selbox.options.length] = new Option("No City Found", "0");
			  <?php }?>
			}
		<?php } ?>	
				
		}
//--></script>
    
    <?php
    $Err ="";
	
	
    if(isset($_POST['sub'])){
	if($err == 0){
			$users->Name = $_POST["name"];
			$users->Email= $_POST["email"];
			$users->Password= $_POST["password"];
			$users->CityId = $_POST["city"];
			$users->UserType = $_POST["utype"];
			$users->Gender = $_POST["gen"];
			$users->Picture =  UploadImage($_FILES["image"]);
		    $users->Status = 0;
			
			
			
			if($users->Insert()){
				$msg = "Regitered User Added Sucessfully";
			}else{
				echo $users->Err;
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
                                    <h5>Sign Up Users</h5>
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
                                            <label class="control-label col-lg-4">Name</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="name" name="name" class="form-control">
                                            </div>
                                        </div>
                                        
 																
                                       <div class="form-group">
	                                        <label class="control-label col-lg-4">Email</label>
                                            <div class="col-lg-4">
                                               <input type="text" id="email" name="email" class="form-control">
                                            </div>
					                   </div>
                                       
                                       <div class="form-group">
	                                        <label class="control-label col-lg-4">Password</label>
                                            <div class="col-lg-4">
                                               <input type="password" id="password" name="password" class="form-control">
                                            </div>
					                   </div>
                                       
                                       
                                       
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Country Name</label>
                                            <div class="col-lg-4">
                                                <select name="country" size="1" class="form-control"
                                                 onchange="setOptions(document.myform.country.options
                                                 [document.myform.country.selectedIndex].value);">
                                                    <option value="0">Select One</option>
												   	<?php
                                                    	    Option($country->Select());
                                                   	?>              
                       							</select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">City Name</label>
                                            <div class="col-lg-4">
                                                <select name="city" class="form-control">
                                                    <option value="0">Select a City first</option>
                                              
                                                </select>
                                            </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">User Type</label>
                                            <div class="col-lg-4">
	                                        	<select name="utype" class="form-control">
                                                	<option value="">Select</option>
                                                    <option value="u">User</option>
                                                    <option value="o">Operator</option>
                                                    <option value="sa">Super Admin</option>
												</select>
                                            </div>
                                        </div>
                                       
                                       
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                         
                                        
                                        <div class="form-group">
	                                        <label class="control-label col-lg-4">Gender</label>
                                            <div class="col-lg-4">
                                            	<label class="radio-inline">
                                                	<input type="radio" name="gen" value="m" checked="checked">Male
                                            	</label>                                            	
                                                <label class="radio-inline">
                                                	<input type="radio" name="gen" value="f" checked="checked">Female
                                            	</label>
                                            </div>
					                   </div>
                               
                               
                               

                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Image Upload</label>
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
                               
                               
                                       
                                  <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="ADD USER" style="margin-left:276px" class="btn btn-primary" name="sub">
                                        </div>
                                 
                                 
                                 
                                 </form>
   
   
   
   
                                </div>
                            </div>
                            
                        </div>
                    </div>
   
                    <!--End of Total Form-->
                    
                    
