<?php

	//book2 data access object

	include("Book2DAO_interface.php");

	class Book2DAO implements Book2DAO_interface{

		private $findpkSQL = "SELECT * FROM Book WHERE BookID = ?";
		private $getAllSQL = "SELECT * FROM Book";
		

		public function insert($book2){

		}

		public function update($book2){

		}

		public function delete($bookID){

		}

		public function findOnePK($bookID){
			
			global $conn;
			mysqli_select_db($conn, "db2");

			$stmt = $conn->prepare($this->findpkSQL);
			
			$stmt->bind_param('i', $bookID);
				
			if($stmt->execute()){
				$result = $stmt->get_result();
				$arr = $result->fetch_assoc();
			}else{
				echo $stmt->error;
			}
			
			$stmt->close();
			$conn->close();

			return $arr; //return array type
			
		}

		public function getAll(){
			
			global $conn;
			mysqli_select_db($conn, "db2");
			$multiarr = array();
			$stmt = $conn->prepare($this->getAllSQL);

			if($stmt->execute()){
				$result = $stmt->get_result();

				while($arr = $result->fetch_assoc()){
					$multiarr[] = $arr; //this is same as array_push but efficient. put arr to multiarr
				}
			}else{
				echo $stmt->error;
			}

			$stmt->close();
			$conn->close();

			return $multiarr; //return multi-array e.g. array(array(),array()......)
			
		}

		public function query($keyword,$attribute,$db,$conn){

			
			mysqli_select_db($conn, $db);
			$querySQL = "SELECT * FROM Book WHERE ".$attribute." LIKE ?";
			$keyword = htmlspecialchars($keyword); //change characters in html. e.g. < is changed to &lt;
			$keyword = $conn->real_escape_string($keyword); //make sure no SQL injection
			$keyword = "%$keyword%"; // The ? must be the entire string or integer literal value 
			
			$multi_arr = array();
			$stmt = $conn->prepare($querySQL);
			$stmt->bind_param('s', $keyword);

			if($stmt->execute()){
				$result = $stmt->get_result();

				while($arr = $result->fetch_assoc()){
					$multi_arr[] = $arr; //this is same as array_push but efficient. put arr to multiarr
				}
			}else{
				echo $stmt->error;
			}

			$stmt->close();

			return $multi_arr; //return multi-array e.g. array(array(),array()......)
			
		}

	}


?>