	<?php
	class Comment extends DB{
		public $Id;
		public $NewsId;
		public $UserId;
		public $Comment;


		
      public function Insert(){
		  $this->Connect();
		  $sql = "insert into comment(id, newsid, userid, comment)
		           values('".MS($this->Id)."',
				           '".MS($this->NewsId)."',
						   '".MS($this->UserId)."',
						   '".MS($this->Comment)."'
						    )";
						   if(mysql_query($sql)){
							   
							   return true;
							   }
		              $this->err = mysql_error();
					  return false;
		  
		  
		  
		  }	
		  
		  public function Update(){
			  $this->Connect();
			  $sql = "update comment
			            set
					    newsid ='".MS($this->NewsId)."',
						userid ='".MS($this->UserId)."',
						comment ='".MS($this->Comment)."'
						
						where
			             id ='".MS($this->Id)."'";
						 
						 if(mysql_query($sql)){
							 return true;
							 }
			               $this->err = mysql_error();
						   return false;
			  
			  }	
		
		
		public function Delete(){
             $this->Connect();
			 $sql ="delete from comment  where id = '".MS($this->Id)."' ";
			 if(mysql_query($sql)){
				 return true;
				 }
			 	$this->err = mysql_error();		
			  return false;
    			}
		
		
		public function SelectById(){
			$this->Connect();
			$sql= "select * from comment where id = '".MS($this->Id)."'";
			$sql = mysql_query($sql);
			while($r = mysql_fetch_row($sql)){
				$this->NewsId = $r[1];
				$this->UserId = $r[2];
				$this->Comment = $r[3];
				
				}
			
			}
		
		
		}
	
	
	
	
	
	?>