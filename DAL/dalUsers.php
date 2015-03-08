<?php
class Users extends DB{
		public $Id;
		public $Name;
		public $Email;
		public $Password;
		public $CityId;
	    public $JoinData;
		public $UserType;
		public $Gender;
		public $Picture;
				public $Status;
		
      public function Insert(){
		  $this->Connect();
		  $sql = "insert into users(name, email, password, cityid, usertype, gender, picture,  status)
		           values( '".MS($this->Name)."',
						   '".MS($this->Email)."',
						   '".MS($this->Password)."',
						   '".MS($this->CityId)."',
						   '".MS($this->UserType)."',
						   '".MS($this->Gender)."',
						   '".MS($this->Picture)."',
						   '".MS($this->Status)."' )"; //echo $sql;
						   if(mysql_query($sql)){
							   return true;
						   }
						$this->err = mysql_error();
						return false;
		  
		  }	
		  
		  
		  public function Update(){
			  $this->Connect();
			  $sql = "update users
			            set
						name ='".MS($this->Name)."',
						email ='".MS($this->Email)."',
						password ='".MS($this->Password)."',
						cityid ='".MS($this->CityId)."',
						usertype = '".MS($this->UserType)."',
						gender = '".MS($this->Gender)."',
						picture = '".MS($this->Picture)."',
						status = '".MS($this->Status)."'
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
			 $sql ="delete from users  where id = '".MS($this->Id)."' ";
			 if(mysql_query($sql)){
				 return true;
			 }
		 	$this->err = mysql_error();		
			return false;
    	}
		
		
		
		public function Login()
		{
			$this->Connect();
			$sql = "select * from users 
								where
									email = '".MS($this->Email)."' AND
									password = '".MS($this->Password)."'"; //echo $sql;
			$sql = mysql_query($sql);
			if(mysql_num_rows($sql) > 0) {
				while($d = mysql_fetch_row($sql)) {
					$this->Id = $d[0];
				}				
				return true;
			}	
			return false;						
		}
		
		public function SelectById(){
			$this->Connect();
			$sql= "select * from users where id = '".MS($this->Id)."'";
			$sql = mysql_query($sql);
			while($r = mysql_fetch_row($sql)){
				$this->Name = $r[1];
				$this->Email = $r[2];
				$this->Password = $r[3];
				$this->CityId =$r[4];
				$this->Gender = $r[5];
				$this->Date = $r[6];
				$this->UserType = $r[7];
				$this->Picture = $r[8];
				$this->Information = $r[9];
			}
		}
		
		
}
	
	



?>