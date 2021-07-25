<?php 

	interface Book1DAO_interface{

		public function insert($book1);
		public function update($book1);
		public function delete($bookID);
		public function findOnePK($bookID);
		public function getAll();
		public function query($keyword,$attribute,$db,$conn);

	}
	


?>