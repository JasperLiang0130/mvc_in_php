<?php 
	session_start();
	include("UserDAO.php");
	class UserBusinessLogic{

		private $userdao;
		private $user;
		function __construct(){
			$this -> userdao = new UserDAO();
		}

		public function valid_Login($username, $password){
 
			$row = $this ->userdao ->findOnePK($username);
			if(count($row)>0){
				
				if($row["Password"]==$password){
					$_SESSION['username'] = $row['Username'];
					return "successful";
		        }else{
		        	$err="User password is incorrect!";
					return $err;
		        }
			}else{
				$err="User name is incorrect!";
				return $err;
			}

		}

		public function registerNewMember($username,$name,$age,$address,$password,$repassword,$email,$domain){
			
			$msg = array();
			
			$this->is_Value_Empty($msg,$username,$name,$age,$address,$repassword,$email,$domain);

			if($this->is_Username_Repeated($username)=="1"){
				$msg["errUsername"] ="Username is duplicated!";
			}else if($this->is_Name_Include_Num($name)){
				$msg["errName"] = "Full Name should exclude numbers!";
			}else if($this->is_Age_Below_Zero($age) && !empty($age)){
				$msg["errAge"] = "Age is required above 0 !";
			}else if($this->is_Password_Format_Correct($password)!="correct"){
				$msg["errPassword"] = $this->is_Password_Format_Correct($password);
			}else if(!$this->is_Pwd_Match_Repwd($password,$repassword)){
				$msg["errRepassword"] = "Password is not matched!";
			}else if(!$this->is_Email_Format_Correct($email)){
				$msg["errEmail"] = "Email format is incorrect!";
			}else if(count($msg)==0){
				$this-> user = new User($name,$username,$age,$address,$password,$email);
				$this ->userdao ->insert($this->user, $domain);
				$_SESSION['username'] = $username;
			}
			return $msg;
		}

		private function is_Value_Empty(&$arr,$username,$name,$age,$address,$repassword,$email,$domain){
			if(empty($username)){
				$arr["errUsername"] = "Username is required!";
			}
			if(empty($name)){
				$arr["errName"] = "Full Name is required!";
			}
			if(empty($age)){
				$arr["errAge"] = "Age is required!";
			}
			if(empty($address)){
				$arr["errAddress"] = "Address is required!";
			}
			if(empty($repassword)){
				$arr["errRepassword"] = "Repassword is required!";
			}
			if(empty($email)){
				$arr["errEmail"] = "Email is required!";
			}
			if(empty($domain)){
				$arr["errDomain"] = "Domain Area is required!";
			}

		}

		private function is_Username_Repeated($username){

			$row = $this ->userdao ->findOnePK($username);
			if(count($row) > 0){
				return "1"; // yes, it is repeat
			}else{
				return "0"; //no, it is not repeate username
			}

		}

		private function is_Pwd_Match_Repwd($password,$repassword){
			return $password==$repassword;
		}

		private function is_Name_Include_Num($name){
			return preg_match("/[0-9]/", $name);
		}

		private function is_Age_Below_Zero($age){
			return $age <= 0;
		}

		private function is_Password_Format_Correct($pwd){
			if(empty($pwd)){
				return "Password is required!";
			}else if(!preg_match("/[a-zA-Z0-9~!#$@]{6,12}/",$pwd)){
				return "Length limits 6 ~ 12 characters";
			}else if(!preg_match("/(?=.*[0-9])[a-zA-Z0-9~!#$@]{6,12}/",$pwd)){
				return "At least 1 Number";
			}else if(!preg_match("/(?=.*[a-z])[a-zA-Z0-9~!#$@]{6,12}/",$pwd)){
				return "At least 1 Lowercase";
			}else if(!preg_match("/(?=.*[A-Z])[a-zA-Z0-9~!#$@]{6,12}/",$pwd)){
				return "At least 1 Uppercase";
			}else if(!preg_match("/(?=.*[~!#$@])[a-zA-Z0-9~!#$@]{6,12}/",$pwd)){
				return "At least 1 character from '~!#$@'";
			}else{
				return "correct";
			}
		}

		private function is_Email_Format_Correct($email){
			return preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$email);
		}

	}


 ?>