<?php 

	interface Book3DAO_interface{

		public function insert($book3);
		public function update($book3);
		public function delete($bookID);
		public function findOnePK($bookID);
		public function getAll();
		public function query($keyword,$attribute,$db,$conn);

	}
	


?>