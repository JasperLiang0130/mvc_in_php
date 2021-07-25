<?php 

	class Book1	{

		private $bookID;
		private $bookName;
		private $author;
		private $year;

		function __construct($bookID, $bookName, $author, $year){
			$this->bookID = $bookID;
			$this->bookName = $bookName;
			$this->author = $author;
			$this->year = $year;
		}

		function setBookID($bookID){
			$this->bookID = $bookID;
		}

		function getBookID(){
			return $this->bookID;
		}

		function setBookName($bookName){
			$this->bookName = $bookName;
		}

		function getBookName(){
			return $this->bookName;
		}

		function setAuthor($author){
			$this->author = $author;
		}

		function getAuthor(){
			return $this->author;
		}

		function setYear($year){
			$this->year = $year;
		}

		function getYear(){
			return $this->year;
		}

	}

?>