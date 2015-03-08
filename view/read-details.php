<div class="span10">
	
    	<?php 
			$md1 = md5($_GET["id"]);
			$md2 = md5($md1);
			
			if(($_GET["one"] = $md1) && ($_GET["three"] == $md2)){
			}else{
				Redirect("?v=home");
			}
			
			$news = new News();
			$news->Id = $_GET["id"];
			$news->SelectById();
			
			
			?>
			<div class="col-lg-12" id="news-content">
				<div class="row boxed border-bottom"  style="margin-top:20px">
					<h4><?php echo $news->Title; ?></h4>
					<p style="margin-top: -8px;">2012/10/10</p>
				</div>
				
				<div class="row boxed  shadow" style="margin-top:20px">
				<?php 
					if($news->Image != ""){
				?>
					<img src="AdminDashboard/images/<?php echo $news->Image; ?>" class="img-text right-margin img-responsive" width="50%" />
				<?php }?>
					<span class="news-description" style="text-align:right; font-size: 20px">
						<?php 
							FileRead("AdminDashboard/files/".$news->Description);
						?>
					</span>
				</div>
				
				
				<div class="col-lg-12 boxed" style="margin-top: 20px">
					<textarea class="form-control" style="width: 60%; height: 80px" placeholder="Write your comment"></textarea>
					<input type="submit" style="margin-top: 8px" name="comment" class="btn btn-large btn-success" value="SUBMIT">
				</div>
				
			</div>
</div>