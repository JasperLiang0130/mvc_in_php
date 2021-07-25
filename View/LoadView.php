<?php
class LoadView {

	function view ($file_name, $object = null, $data=null) //$data can be optional, which means user can type data or not
	{

		if (is_array($data))
		{
		    extract($data, EXTR_PREFIX_INVALID);

		}
		include '../View/'.$file_name;
	
	}

	function query_view($file_name, $table1= null, $table2= null, $table3= null){
		include '../View/'.$file_name;
	}

	function db1_table ($mulit_arr){

		$result = null;
		if(count($mulit_arr)==0){
			$result = "<h2>Utas Library</h2> No query result on Utas Library DB1";
			return $result;
		}else{
			$result= "<h2>Utas Library</h2> <table><tr><th>BookID</th><th>Book Name</th><th>Author</th><th>Year</th></tr>";
			foreach ($mulit_arr as $key){
	            $result = $result."<tr><td>".$key['BookID']."</td><td>".$key['Book']."</td><td>".$key['Author']."</td><td>".$key["Year"]."</td></tr>";
	        }
	        return $result."</table>";
		}
		
	}

	function db2_table ($mulit_arr){

		$result = null;
		if(count($mulit_arr)==0){
			$result = "<h2>Hobart Library</h2> No query result on Hobart Library DB2";
			return $result;
		}else{
			$result= "<h2>Hobart Library</h2> <table><tr><th>BookID</th><th>Book Name</th><th>Author</th><th>Publisher</th><th>Genre</th><th>Year</th></tr>";
			foreach ($mulit_arr as $key){
	            $result = $result."<tr><td>".$key['BookID']."</td><td>".$key['Book']."</td><td>".$key['Author']."</td><td>".$key["Publisher"]."</td><td>".$key["Genre"]."</td><td>".$key["Year"]."</td></tr>";
	        }
	        return $result."</table>";
    	}
	}

	function db3_table ($mulit_arr){

		$result = null;
		if(count($mulit_arr)==0){
			$result = "<h2>Launceston Library</h2> No query result on Launceston Library DB3";
			return $result;
		}else{
			$result= "<h2>Launceston Library</h2> <table><tr><th>BookID</th><th>Book Name</th><th>Author</th><th>Publisher</th><th>Genre</th><th>Year</th><th>Detail</th></tr>";
			foreach ($mulit_arr as $key){
	            $result = $result."<tr><td>".$key['BookID']."</td><td>".$key['Book']."</td><td>".$key['Author']."</td><td>".$key["Publisher"]."</td><td>".$key["Genre"]."</td><td>".$key["Year"]."</td><td>".$key["Detail"]."</td></tr>";
	        }
	        return $result."</table>";
    	}
	}

}
?>