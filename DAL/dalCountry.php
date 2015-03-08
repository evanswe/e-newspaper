<?php
	class Country extends DB{
		public $Id;
		public $Name;
		public $Date;
		public $Operation;
		
		
		public function Insert() {
			$this->Connect();
			$sql = "insert into country ( name, operation)
						values('".MS($this->Name)."',
						       '".MS($this->Operation)."')"; //echo $sql;
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Update() {
			$this->Connect();
			$sql = "update country 
						set
							name = '".MS($this->Name)."'
							
						where
							id = '".MS($this->Id)."'";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Delete() {
			$this->Connect();
			$sql = "delete from country
						where
							id = '".MS($this->Id)."'";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}	
		
		public function SelectById() {
			$this->Connect();
			$sql = "select * from country where	id = '".MS($this->Id)."'";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$this->Name = $d[1];
					
			}
		}	
		
		public function Select()
		{
			$this->Connect();
			$a = "";
			$sql = "select * from country";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$a[] = $d;	
			}
			return $a;
		}
	}

?>














