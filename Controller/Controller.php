<?php 
	
	include("../db_conn.php");
	include("../B1_Model/Book1DAO.php");
	include("../B2_Model/Book2DAO.php");
	include("../B3_Model/Book3DAO.php");
	//include("../User_Model/UserDAO.php");
	include("../User_Model/UserBusinessLogic.php");
	include("../View/LoadView.php");

	class Controller{

		private $book1dao;
		private $book2dao;
		private $book3dao;
		private $loadView;
		//private $userdao;
		private $userBL;

		function  __construct(){
			$this -> book1dao = new Book1DAO();
			$this -> book2dao = new Book2DAO();
			$this -> book3dao = new Book3DAO();
			$this -> loadView = new LoadView();
			//$this -> userdao = new UserDAO();
			$this -> userBL = new UserBusinessLogic();
		}

		public function register($username,$name,$age,$address,$password,$repassword,$email,$domain){
			
			global $conn;
			$err = $this -> userBL ->registerNewMember($username,$name,$age,$address,$password,$repassword,$email,$domain);
			$conn->close();
			if(count($err)==0){
				$this -> loadView -> view("Searching.php"); //register successful
			}else{
				$this -> loadView -> view("RegistrationPage.php",null,$err);
			}

		}

		public function validLogin($username, $password, $domain){
			global $conn;
			mysqli_select_db($conn, $domain);
			$msg = $this -> userBL-> valid_Login($username, $password);
			$conn->close();
			if($msg =="successful"){
				$this -> loadView -> view("Searching.php");
			}else{
				$this -> loadView -> view("LoginPage.php",null,$msg);
			}

		}

		public function logout(){
			session_destroy();
			$this -> loadView -> view("LoginPage.php");
		}

		public function searchBooks($keyword, $searchType){

			global $conn;
			if( $searchType == "Book" || $searchType == "Author"|| $searchType == "Year" ){
				$multi_arr1 = $this-> book1dao ->query($keyword,$searchType,"db1", $conn);
				$table1 = $this -> loadView -> db1_table($multi_arr1);
				$multi_arr2 = $this-> book2dao ->query($keyword,$searchType,"db2", $conn);
				$table2 = $this -> loadView -> db2_table($multi_arr2);
				$multi_arr3 = $this-> book3dao ->query($keyword,$searchType,"db3", $conn);
				$table3 = $this -> loadView -> db3_table($multi_arr3);
			}else if($searchType == "Publisher" || $searchType == "Genre"){
				$table1 = null;
				$multi_arr2 = $this-> book2dao ->query($keyword,$searchType,"db2", $conn);
				$table2 = $this -> loadView -> db2_table($multi_arr2);
				$multi_arr3 = $this-> book3dao ->query($keyword,$searchType,"db3", $conn);
				$table3 = $this -> loadView -> db3_table($multi_arr3);
			}
			$conn->close();

			$this -> loadView -> query_view("Searching.php",$table1,$table2,$table3 );

		}

	}

	

?>