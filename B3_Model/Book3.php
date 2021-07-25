<?php 

	class Book3	{

		private $bookID;
		private $bookName;
		private $author;
		private $publisher;
		private $genre;
		private $year;
		private $detail;

		function __construct($bookID, $bookName, $author, $publisher, $genre, $year, $detail){
			$this->bookID = $bookID;
			$this->bookName = $bookName;
			$this->author = $author;
			$this->publisher = $publisher;
			$this->genre = $genre;
			$this->year = $year;
			$this->detail = $detail;
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
			return $this->Genre;
		}

		function setYear($year){
			$this->year = $year;
		}

		function getYear(){
			return $this->year;
		}

		function setDetail($detail){
			$this->detail = $detail;
		}

		function getDetail(){
			return $this->detail;
		}

	}

?>