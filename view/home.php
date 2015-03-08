<?php 
	$news = new News();
	$re = $news->Select();
	for($i=0; $i<4; $i++){
		if($re[$i][4] == "Y"){
		?>
      <div class="span6">
       <div class="caption">
        <h2><?php $md1 = md5($re[$i][0]); $md2 = md5(md5($re[$i][0]));?>
					<br/><?php echo $re[$i][1]; ?></h2>
       
                    </div>
       <img src="AdminDashboard/images/<?php echo $re[$i][7]; ?>" class="img-text right-margin img-responsive img-circle" width="40%" />
                <p>
                <?php 
				if($re[$i][4] == "Y"){
					read_files($re[$i][2], "600");
				}else{
					read_files($re[$i][2], "300");
				}
				
				?>
                <a class="btn btn-default read-btn" 
					href="?p=read-details&id=<?php echo $re[$i][0]; ?>&one=<?php echo $md1; ?>&three=<?php echo $md2; ?>">Read More</a>
                <!--<a class="btn btn-default read-btn" 
					href="?p=read_details&id=*/">Read More</a>-->
				</p>
       
       
       
      </div>
               <?php }
			   } ?>

               
        
    <?php 
	$news = new News();
	$re = $news->Select();
	for($i=0; $i<4; $i++){
		if($re[$i][4] == "Y"){
		?>
      <div class="span6">
       <div class="caption">
        <h2><?php $md1 = md5($re[$i][0]); $md2 = md5(md5($re[$i][0]));?>
					<br/><?php echo $re[$i][1]; ?></h2>
       
                    </div>
       <img src="AdminDashboard/images/<?php echo $re[$i][7]; ?>" class="img-text right-margin img-responsive img-circle" width="40%" />
                <p>
                <?php 
				if($re[$i][4] == "Y"){
					read_files($re[$i][2], "600");
				}else{
					read_files($re[$i][2], "300");
				}
				?>
                <a class="btn btn-default read-btn" 
					href="?p=read-details&id=<?php echo $re[$i][0]; ?>&one=<?php echo $md1; ?>&three=<?php echo $md2; ?>">Read More</a>
                <!--<a class="btn btn-default read-btn" 
					href="?p=read_details&id=*/">Read More</a>-->
			</p>
       
       
       
      </div>
               <?php }
			   } ?>
