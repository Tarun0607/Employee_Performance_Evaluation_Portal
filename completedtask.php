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

td{
   color: #ffffff;
}

th{
  font-weight: bold;
}

#trynew{
  border:2px gold solid;
  margin-left: 10%; 
  margin-right: 10%;
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
		<div id="trynew">
  <h3 align="center" style="color: #ffffff">COMPLETED TASKS</h3>
  <br>

  
  <table align="center">
  <tr>
    <th>TaskID&emsp;</th>
    <th width="25%">Taskname&emsp;</th>
   </tr> 


<?php


    
    $query="select t.TaskID,t.TaskName from completedtask t,employee e where t.EmpId=e.EmpID AND e.Username='tarun'";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
                   
                   echo '<tr><td>' .$row["TaskID"] .'</td><td>' .$row["TaskName"].'</td></tr>';
              }
              echo "</table>";
    }
   


?>  
    
  

  




</div>
</form>

</body>
</html>