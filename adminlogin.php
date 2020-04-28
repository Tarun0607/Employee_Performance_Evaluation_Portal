<?php  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		
<style type="text/css">
#formGroupExampleInput{
	width: 230px;
	border:2px solid #2C5364;
	
}

#formGroupExampleInput2{
	width: 230px;
	border:2px solid #2C5364;
	
}


#try{
	border:2px gold solid;
	margin-left: 30%;	
	margin-right: 40%;
	background: linear-gradient(to bottom, #000000, #e74c3c);
	padding-bottom: 2%;
}
.form-group{
	margin-left: 25%;
	margin-right: 20%;
}

.btn-success{
	margin-left: 40%;
}

#admin-logo{
	margin-left: 25%;
}

h3{
	padding-top: 2%;
	color: #ffffff;
	font-family: sans-serif;
}

label{
	color: #ffffff;
}
	

</style>


	
</head>
<body>


	<form>
		<div id="try">
  <h3 align="center">ADMIN LOGIN</h3>
  <br>
  <img id="admin-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI2nG8-uti9xBo5IFIOgQ4d6_KnhW9ckoxzzb4ZnCdtfnLt66eTQ&s">
 
  <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>Username</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your Username">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Password</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your password">
  </div>
  
<button type="button" class="btn btn-success">Sign In</button>

	</div>
</form>
</body>
</html>