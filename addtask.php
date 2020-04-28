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

#employee-logo{
	width: 200px;
	height: 200px;
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
  <h3 align="center" style="color: #ffffff">ADD AND ASSIGN TASKS</h3>
  <br>

  <img id="employee-logo" src="https://cdn3.iconfinder.com/data/icons/seo-and-internet-marketing/70/1-10-512.png">
  
 
  <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>TaskID</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Task Name</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Employee ID</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Task Duration</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>No.of.Stages</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" >
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Due date of each stage</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Task Description</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" >
  </div>
  
  
<button type="button" class="btn btn-success">Sign In</button>

	</div>
</form>
</body>
</html>