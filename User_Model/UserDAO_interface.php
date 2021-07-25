<?php
	include("User.php");
	interface UserDAO_interface{

		public function insert(User $user, $domain);
		public function update(User $user);
		public function delete($username);
		public function findOnePK($username);
		public function getAll();
	}

?>