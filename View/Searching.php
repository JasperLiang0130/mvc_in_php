<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="../View/comUse.css">
	<title>searching Page</title>	
	<!-- google font -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		table{
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
		table td, table th{
			border: 1px solid #ddd;
  			padding: 8px;
		}
		table tr:nth-child(even){background-color: #f2f2f2;}
		table tr::hover {background-color: #ddd;}
		table th{
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}
		
		.search{
			width: 10%;
		    padding: 6px 12px; 
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    border-radius: 0px;
			border-bottom-right-radius: 4px;
		    border-top-right-radius: 4px;
		}
		label{
			font-size: 24px;
			font-weight: bold;
		}

	</style>

</head>

<body>
	
	<div class="container">
	<?php include("../View/navbar.txt"); ?>
		<div class="row"> 
		    <center>
		    <hr><h1>Searching Library Books</h1><hr>
			<!-- This is for sign in -->   
		    <form action="../Controller/FrontController.php" method="post">
			    <label>Searching: </label>
			    <input class="search" type="text" name="key">
			    <select class="search" name="searchType">
			    	<option value="Publisher">By publish Name</option>
			    	<option value="Author">By Author</option>
			    	<option value="Book">By Book Name</option>
			    	<option value="Genre">By Genre</option>
			    	<option value="Year">By Year published</option>
			    </select>
			    <input type="hidden" name="action" value="search">
			    <input type="submit" class="btn-orange">
		    </form>
		    </center>
		    <div class="column-6 column-offset-3">    
		        <div class="row">   	
		        	<?php echo $table1;?>
		        </div>
		        <div class="row ">
		        	<?php echo $table2;?>
		        </div>
		        <div class="row ">
		        	<?php echo $table3;?>
		        </div>
		    </div>
	    </div> 
    </div>
    
</body>
</html>