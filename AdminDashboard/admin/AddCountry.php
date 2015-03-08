<div id="content">
<script type="text/javascript">
	$("#check").click(function(){
		alert("Hi");
	});
</script>
	<?php 
		$country = new Country();
		$err = 0;
		$ecountryName = "";
		$msg = "";
		if(isset($_POST['sub'])){
			if($err == 0){
				$country->Name = $_POST['country'];
				$country->Operation = "Insert";
				if($country->Insert()){
					$msg = "Country added successfully";
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
                                    <h5 id="check">Add Country</h5>
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
                                    <form action="" class="form-horizontal" id="block-validate" method="post" novalidate="novalidate">
																
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Country Name</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="country" name="country" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Add Country" style="margin-left:132px" class="btn btn-primary btn-lg " name="sub">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
		<!--Start of Table-->                    
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 198px;">Country Name</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Modification Date</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 170px;">Operation</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 170px;">Edit</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 170px;">Delete</th></tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        
                                        
                                        
                            <?php 
								$r = $country->Select();
								if($r != ""){
									for($i=0; $i<count($r); $i++){
										
							?>
                                    <tr class="gradeA odd">
                                            <td class="sorting_1"><?php echo $r[$i][1]; ?></td>
                                            <td class=" "><?php echo $r[$i][2]; ?></td>
                                            <td class=" "><?php echo $r[$i][3]; ?></td>
                                           
                                            <td class="center" style="text-align:center"><a title="Edit" href="#"><i class="icon-edit"></i></a></td>
                                            <td class="center" style="text-align:center"><a title="Delete" href="#"><i class="icon-remove"></i></a></td>
                                    </tr>
                             <?php }
							 }?>
                                        
                                     </tbody>
                                </table><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>        
        <!--End of Table-->
</div>


     <!--END PAGE LEVEL SCRIPT-->
