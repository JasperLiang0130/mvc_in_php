<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Registration Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../View/comUse.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../View/userValidation.js"></script>
	<script type="text/javascript" src="../View/AutoInsertFakeData.js"></script>
	<style type="text/css">
		 
		.column-3 + .column-3:before {
		    content: "-";
		    position: absolute;
		    left: -2%;
		    top: 2px;
		}
		.invalid {
			border-color:red !important; 
		}
		.error{
			color:red;
			float:right;
		}
		.form-control{
			width: 100%;
		}
		
		/*Turn Off Number Input Spinners*/
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
		  -webkit-appearance: none; 
		  margin: 0; 
		}

		.push-column-4{
			margin-left: 33.333333333%;
		}
		h1{
			margin:0px;
		}
		
	</style>

</head>
<body >
	<!-- This nav is for sign in, sign up and some of links of cafe menu -->   
    <div class="container">
    <?php include ('../View/navbar.txt') ;?>
	    <div class="row" style="">
		<div class="column-4 push-column-4">
			<h1> Join Us</h1>
			<form action="../Controller/FrontController.php"  method="post" >
				<div class="form-group">
					<label for="Username">*User Name</label>
					<span class="error"><?php echo $data['errUsername']; ?></span>
					<input type="text" class="form-control" name="username" id="username">	    
				</div>
				<div class="form-group">
					<label for="Fullname">*Full Name</label>
					<span class="error"><?php echo $data['errName']; ?></span>	
					<input type="text" class="form-control" name="name" id="name" value="">		 
				</div>
				<div class="form-group">
					<label for="age">*Age</label>
					<span class="error"><?php echo $data['errAge'] ?></span>
					<input type="number" class="form-control" name="age" id="age">
				</div>				  
				<div class="form-group">
					<label for="address">*Address</label>
					<span class="error"><?php echo $data['errAddress'] ?></span>		
					<input type="text" class="form-control" name="address" id="address">	    
				</div>
				<div class="form-group">
					<label for="pwd">*Password</label>
					<span class="error"><?php echo $data['errPassword'] ?></span>
					<input type="password" class="form-control" name="password" id="pwd">
				</div>
				<div class="form-group">
					<label for="repwd">*Repeat Password</label>
					<span class="error"><?php echo $data['errRepassword'] ?></span>
					<input type="password" class="form-control" name="repassword" id="repwd">
				</div>
				<div class="form-group">
					<label for="email">*Email</label>
					<span class="error"><?php echo $data['errEmail'] ?></span>
					<input type="email" class="form-control" name="email" id="email">
				</div>
				<div class="form-group">
					<label for="domain">*Domain</label>
					<span class="error"><?php echo $data['errDomain'] ?></span>
					<select class="form-control" id="domain" name="domain">
						<option disabled selected value="">-- Select a domain --</option>
						<option value="db1">Utas Library</option>
						<option value="db2">Hobart City Library</option>
						<option value="db3">Launceston City Library</option>
					</select>
				</div>
				<div class="form-group">
					<div class="column-6">						  
						<button type="submit" class="row btn-blue btn-block">Submit</button>
						<input type="hidden" name="action" value="register">
					</div>
					<div class="text-center column-6" >
						<a href="../View/LoginPage.php"> Log In &nbsp; <img src="../image/sign-in.png" style="padding-top: 2px;"></a>
					</div>
				</div>
			</form>				
		</div>
		</div>
	</div>

    
</body>
</html>