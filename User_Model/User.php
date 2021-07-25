<?php

	class User {

		private $name;
		private $username;
		private $age;
		private $address;
		private $password;
		private $email;

		function __construct($name,$username,$age,$address,$password,$email){
			$this ->name = $name;
			$this ->username = $username;
			$this ->age = $age;
			$this ->address = $address;
			$this ->password = $password;
			$this ->email = $email;
		}

		public function setName($name){
			$this ->name = $name;
		}

		public function getName(){
			return $this ->name;
		}

		public function setUsername($username){
			$this ->username = $username;
		}

		public function getUsername(){
			return $this ->username;
		}

		public function setAge($age){
			$this ->age = $age;
		}

		public function getAge(){
			return $this ->age;
		}

		public function setAddress($address){
			$this ->address = $address;
		}

		public function getAddress(){
			return $this ->address;
		}

		public function setPassword($password){
			$this ->password = $password;
		}

		public function getPassword(){
			return $this ->password;
		}

		public function setEmail($email){
			$this ->email = $email;
		}

		public function getEmail(){
			return $this ->email;
		}
	}

?>