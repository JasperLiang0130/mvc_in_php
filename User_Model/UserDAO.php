<?php

	include("UserDAO_interface.php");
	class UserDAO implements UserDAO_interface{

		private $findpkSQL = "SELECT * FROM User WHERE Username = ?";
		private $insertSQL = "INSERT INTO User (Username,Name,Age,Address,Password,Email) VALUES (?,?,?,?,?,?)";

		public function insert(User $user, $domain){
			
			global $conn;
			mysqli_select_db($conn, $domain);

			$stmt = $conn->prepare($this->insertSQL);
			
			$stmt->bind_param('ssisss',$user->getUsername(),$user->getName(),$user->getAge(),$user->getAddress(),$user->getPassword(),$user->getEmail());
			
			$stmt->execute();
			
			$stmt->close();
			//$conn->close();
			
		}
		public function update(User $user){

		}
		public function delete($username){

		}
		public function findOnePK($username){

			global $conn;
			//mysqli_select_db($conn, $domain);

			$stmt = $conn->prepare($this->findpkSQL);
			
			$stmt->bind_param('s', $username);
				
			if($stmt->execute()){
				$result = $stmt->get_result();
				$arr = $result->fetch_assoc();
			}else{
				echo $stmt->error;
			}
			
			$stmt->close();
			//$conn->close();

			return $arr; //return array type
		}
		public function getAll(){

		}
	}

?>