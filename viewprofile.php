<?php
session_start();
  require 'dbconfig/config.php';

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


#Viewemp{
    border-collapse: collapse;
    width: 25%;
    color: #ffffff;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
    
  }
	

</style>


	
</head>
<body>


	<form>
		<div id="try">
  <h3 align="center" style="color: #ffffff">VIEW PROFILE</h3>
  <br>

  <img id="employee-logo" src="https://cdn0.iconfinder.com/data/icons/business-collection-2/128/user_man-512.png">
  
    
  

  



<?php


    
    $query="select * from employee where Username='tarun'";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
             ?>
            <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>Username</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['Username']?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Password</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['Password']?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>EmailID</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['EmailID']?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>EmpID</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['EmpID']?>">
  </div>
  
  
                            
                   
          <?php    }
              
    }
   ?>

  <button type="button" class="btn btn-success">Update Profile</button>
 

 
  
  

</div>
</form>

</body>
</html>