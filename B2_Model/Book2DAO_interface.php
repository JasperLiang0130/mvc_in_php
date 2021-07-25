<?php 

	interface Book2DAO_interface{

		public function insert($book2);
		public function update($book2);
		public function delete($bookID);
		public function findOnePK($bookID);
		public function getAll();
		public function query($keyword,$attribute,$db,$conn);

	}
	


?>