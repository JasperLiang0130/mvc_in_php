<?php 

	class Book2	{

		private $bookID;
		private $bookName;
		private $author;
		private $publisher;
		private $genre;
		private $year;

		function __construct($bookID, $bookName, $author, $publisher, $genre, $year){
			$this->bookID = $bookID;
			$this->bookName = $bookName;
			$this->author = $author;
			$this->publisher = $publisher;
			$this->genre = $genre;
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

		function setPublisher($publisher){
			$this->publisher = $publisher;
		}

		function getPublisher(){
			return $this->publisher;
		}

		function setGenre($genre){
			$this->genre = $genre;
		}

		function getGenre(){
			return $this->genre;
		}

		function setYear($year){
			$this->year = $year;
		}

		function getYear(){
			return $this->year;
		}

	}

?>