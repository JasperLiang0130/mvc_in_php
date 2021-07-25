<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>LoginPage</title>
<link rel="stylesheet" type="text/css" href="../View/comUse.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<style type="text/css">
	.loginArea{
		position: absolute;
		top: 50%;
		left: 50%;
		max-width: 320px;
		max-height: auto;
		margin-top: 50vh;
		padding: 30px 30px 20px 30px;
		background-color: white;
		transform: translate(-50%, -50%);
	}
	.error{
		color:red;
	}

</style>
</head>

<body>

    <div class="container">
    <?php include 'navbar.txt' ?>
    <div class="row" style="position: relative;">
		<form class="loginArea" action="../Controller/FrontController.php" method="post">
			<img src="../image/loginIcon.png" alt="" style="width: 260px; ">
			<div class="form-group">
				<div class="error"><?php echo $data; ?></div>
				<input type="text" class="form-control" name="username" placeholder="User Name"><br>
				<input type="password" class="form-control" name="pwd" placeholder="Password"><br>
				<select class="form-control" name="domain">
					<option value="db1">Utas Library</option>
					<option value="db2">Hobart City Library</option>
					<option value="db3">Launceston City Library</option>
				</select>
			</div>
			
			<button type="submit" class="btn-blue btn-block" value="Login">Login</button>
			<input type="hidden" name="action" value="valid">
		</form>
	</div>	
	</div>
	
</html>