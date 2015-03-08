	<?php
	class News extends DB{
		public $Id;
		public $Title;
		public $Description;
		public $FirstPage;
		public $Marquee;
		public $BreakingNews;
		public $Date;
		public $Video;
		public $Image;
		public $CategoryId;
		public $HitView;
		public $UserId;
		
		
		
		
		
      public function Insert(){
		  $this->Connect();
		  $sql = "insert into news(title, description, firstpage, breakingnews, date, video, image, categoryid,  hitview ,userid)
		           values('".MS($this->Title)."',
						   '".MS($this->Description)."',
						   '".MS($this->FirstPage)."',
                            '".MS($this->BreakingNews)."',
                            '".MS($this->Date)."',
							'".MS($this->Video)."',
						    '".MS($this->Image)."',
						    '".MS($this->CategoryId)."',
						    '".MS($this->HitView)."',
						    '".MS($this->UserId)."')";
						                             
						   
						   if(mysql_query($sql)){
							   
							   return true;
							   }
							   echo $sql;
							   
		              $this->err = mysql_error();
					  return false;
		  
		  
		  
		  }	
		 
		
		 
		 
		 
		 
		  public function Update(){
			  $this->Connect();
			  $sql = "update news
			            set
						title ='".MS($this->Title)."',
						
						description ='".MS($this->Description)."',
						firstpage ='".MS($this->FirstPage)."',
						breakingnews = '".MS($this->BreakingNews)."',
						date ='".MS($this->Date)."',
						video ='".MS($this->Video)."',
						image ='".MS($this->Image)."',
						categoryid ='".MS($this->CategoryId)."',
						hitview = '".MS($this->HitView)."',
						userid ='".MS($this->UserId)."'
						 where
			             id ='".MS($this->Id)."'";
						 
						 echo $sql;
						 
						 if(mysql_query($sql)){
							 return true;
							  
							
							 }
			               $this->err = mysql_error();
						   return false;
			  
			  }	
		
		
		public function Delete(){
             $this->Connect();
			 $sql ="delete from news  where id = '".MS($this->Id)."' ";
			 if(mysql_query($sql)){
				 return true;
				 }
			 	$this->err = mysql_error();		
			  return false;
    			}
		
		
		public function SelectById(){
			$this->Connect();
			$sql= "select * from news where id = '".MS($this->Id)."'";
			$sql = mysql_query($sql);
			while($r = mysql_fetch_row($sql)){
				$this->Title = $r[1];
				$this->Description = $r[2];
				$this->FirstPage = $r[3];
				$this->BreakingNews = $r[4];
				$this->Date = $r[5];
				$this->Video = $r[6];
				$this->Image = $r[7];
				$this->CategoryId = $r[8];
				$this->HitView =$r[9];
				$this->UserId = $r[10];
				
				}
			
			}
			
			
		public function Select(){
			$this->Connect();
			$a = "";
			$sql ="select news.id, news.title, news.description, news.firstpage, news.breakingnews, news.date, news.video,  news.image, category.name, news.hitview, users.name
						from news, category, users
						where 
						news.categoryid = category.id 
							and 
                      news.userid = users.id";
					  
			$sql .= " ORDER BY news.Id DESC";
			$sql = mysql_query($sql);
			while($r = mysql_fetch_row($sql)) {
				$a[] = $r;	
			}
			return $a;
		}
			
	
		
	}
?>