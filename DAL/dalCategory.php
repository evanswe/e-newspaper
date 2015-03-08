	<?php
	class Category extends DB{
		public $Id;
		public $Name;
		public $UserId;
		public $Date;
		public $Operation;
		
      public function Insert(){
		  $this->Connect();
		  $sql = "insert into category(name, userid, operation)
		           values('".MS($this->Name)."',
						    '".MS($this->UserId)."',
							'".MS($this->Operation)."')";
						   if(mysql_query($sql)){
							   
							   return true;
							   }
		              $this->err = mysql_error();
					  return false;
		  
		  
		  
		  }	
		  
		  public function Update(){
			  $this->Connect();
			  $sql = "update category
			            set
						name ='".MS($this->Name)."',
						userid = '".MS($this->UserId)."',
						date = '".MS($this->Date)."',
						operation = '".MS($this->Operation)."'
						where
			             id ='".MS($this->Id)."'";
						 //echo $sql;
						 if(mysql_query($sql)){
							 return true;
							 }
			               $this->err = mysql_error();
						   return false;
			  
			  }	
		
		
		public function Delete(){
             $this->Connect();
			 $sql ="delete from category  where  id = '".MS($this->Id)."' "; //echo $sql;
			 if(mysql_query($sql)){
				 return true;
				 
				 }
			 	$this->err = mysql_error();		
			  return false;
    			}
				 
		
		
		public function SelectById(){
			$this->Connect();
			$sql= "select * from category where id = '".MS($this->Id)."'";
			$sql = mysql_query($sql);
			while($r = mysql_fetch_row($sql)){
				$this->Name = $r[1];
				$this->UserId = $r[2];
				$this->Date = $r[3];
				$this->Operation = $r[4];
				
				}
			
		}
		
		
		public function Select(){
			$a = "";
			$this->Connect();
			$sql = "SELECT c.Id, c.Name, u.Name, c.Date, c.Operation from Category as c, Users as u where c.userid = u.id";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)){
				$a[] = $d;
			}
			return $a;
		}
		
		
		}
	
	
	
	
	
	
	?>