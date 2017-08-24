<?php
	class Students{

		public $mat_no;
		public $first_name;
		public $last_name;
		public $status;

		public function get_fullname(){
			return $this->first_name.' '.$this->last_name;
		}
	}

?>