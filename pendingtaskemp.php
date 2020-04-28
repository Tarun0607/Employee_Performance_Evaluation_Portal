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
  <h3 align="center" style="color: #ffffff">PENDING TASKS</h3>
  <br>

  
  <table align="center">
  <tr>
    <th>TaskID&emsp;</th>
    <th width="25%">Taskname&emsp;</th>
    <th>Duration&emsp;</th>
    <th>Stages&emsp;</th>
    <th>Due date of each stage&emsp;</th>
    <th>Task description&emsp;</th>



<?php


    
    $query="select t.TaskID,t.Task_name,t.Duration,t.Stages,t.Due_date_each_stage,t.Task_description from tasks t,employee e  where t.EmpId=e.EmpID AND e.Username='tarun'";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
                   
                   echo '<tr><td>' .$row["TaskID"] .'</td><td>' .$row["Task_name"].'</td><td>' .$row["Duration"].'</td><td>' .$row["Stages"].'</td><td>' .$row["Due_date_each_stage"].'</td><td>' .$row["Task_description"].'</td></tr>' ;
              }
              echo "</table>";
    }
   


?>  
    
  

  




</div>
</form>

</body>
</html>