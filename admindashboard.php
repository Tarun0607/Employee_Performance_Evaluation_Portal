<?php 
session_start();
  require 'dbconfig/config.php';
  
  //if($_SESSION['check']="Admin"){
    //echo "<script type=text/javascript>alert('Invalid credentials')</script>";
  //}

 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin Dashboard</title>
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript">
    	
    	function homepage() {
        document.getElementById('trynew2').style.display='none';
        document.getElementById('try9').style.display='none';
        document.getElementById('try8').style.display='none';
        document.getElementById('try').style.display='none';
        document.getElementsByClassName('container')[0].style.display='block';
        document.getElementById('trymax').style.display='block';
        document.getElementById('trynew4').style.display='none';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='none';
        document.getElementById('try5').style.display='none';
        
        document.getElementById('trynew3').style.display='none';
        document.getElementById('showprofile').style.display='none';
        
        
      }

      function task(){
           document.getElementById('trynew2').style.display='none';
        document.getElementById('trynew3').style.display='none';
        
           document.getElementById('try9').style.display='none';
           document.getElementById('try4').style.display='none';
           document.getElementById('try8').style.display='none';
           document.getElementById('try3').style.display='block';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('trymax').style.display='none';
        document.getElementById('trynew4').style.display='none';
        document.getElementById('try').style.display='none';
        
        document.getElementById('try5').style.display='none';
        document.getElementById('showprofile').style.display='none';
        //document.getElementById('try8').style.display='none';
        
      }



    	function addemployee(){
    		document.getElementById('try').style.display='block';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('trymax').style.display='none';
        document.getElementById('trynew4').style.display='none';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='none';
        document.getElementById('try5').style.display='none';
        document.getElementById('trynew2').style.display='none';
        document.getElementById('trynew3').style.display='none';
        document.getElementById('showprofile').style.display='none';
        document.getElementById('try8').style.display='none';
        document.getElementById('try9').style.display='none';
        }

        function viewemployee() {
             document.getElementById('try').style.display='none';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('trymax').style.display='none';
        document.getElementById('trynew4').style.display='block';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='none';
        document.getElementById('try5').style.display='none'; 
        document.getElementById('trynew2').style.display='none';
        document.getElementById('trynew3').style.display='none'; 
        document.getElementById('showprofile').style.display='none';
        document.getElementById('try8').style.display='none';
        document.getElementById('try9').style.display='none';
        }

        function addtask(){
        document.getElementById('try').style.display='none';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('trymax').style.display='none';
        document.getElementById('trynew4').style.display='none';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='block';
        document.getElementById('try5').style.display='none';
        document.getElementById('trynew2').style.display='none';
        document.getElementById('trynew3').style.display='none';
        document.getElementById('showprofile').style.display='none';
        document.getElementById('try8').style.display='none';
        document.getElementById('try9').style.display='none';
        }

        function addman(){
        document.getElementById('try').style.display='none';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('trymax').style.display='none';
        document.getElementById('trynew4').style.display='none';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='none';
        document.getElementById('try5').style.display='block';
        document.getElementById('trynew2').style.display='none';
        document.getElementById('trynew3').style.display='none';
        document.getElementById('showprofile').style.display='none';
        document.getElementById('try8').style.display='none';
        document.getElementById('try9').style.display='none';
        }


        function comptask(){
           document.getElementById('try').style.display='none';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('trymax').style.display='none';
        document.getElementById('trynew4').style.display='none';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='none';
        document.getElementById('try5').style.display='none';
        document.getElementById('trynew2').style.display='block';
        document.getElementById('trynew3').style.display='none';
        document.getElementById('showprofile').style.display='none';
        document.getElementById('try8').style.display='none';
        document.getElementById('try9').style.display='none';
        }

        function viewrate(){
         document.getElementById('try').style.display='none';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('trymax').style.display='none';
        document.getElementById('trynew4').style.display='none';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='none';
        document.getElementById('try5').style.display='none';
        document.getElementById('trynew2').style.display='none';
        document.getElementById('trynew3').style.display='block';
        document.getElementById('showprofile').style.display='none';
        document.getElementById('try8').style.display='none';
        document.getElementById('try9').style.display='none';
        }
      
      function aete(){
        document.getElementById('try8').style.display='block';
        document.getElementById('try').style.display='none';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('trymax').style.display='none';
        document.getElementById('trynew4').style.display='none';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='none';
        document.getElementById('try5').style.display='none';
        document.getElementById('trynew2').style.display='none';
        document.getElementById('trynew3').style.display='none';
        document.getElementById('showprofile').style.display='none';
        document.getElementById('try9').style.display='none';
      }



      function aetm(){
        document.getElementById('try9').style.display='block';
        document.getElementById('try8').style.display='none';
        document.getElementById('try').style.display='none';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('trymax').style.display='none';
        document.getElementById('trynew4').style.display='none';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='none';
        document.getElementById('try5').style.display='none';
        document.getElementById('trynew2').style.display='none';
        document.getElementById('trynew3').style.display='none';
        document.getElementById('showprofile').style.display='none';

      }



        function result(){

          window.location.href="viewemployee.php";
          //document.getElementById('try').style.display='none';
        //document.getElementsByClassName('container')[0].style.display='none';
        //document.getElementById('trynew4').style.display='none';
        //document.getElementById('try3').style.display='none';
        //document.getElementById('try4').style.display='none';
        //document.getElementById('try5').style.display='none';
        //document.getElementById('trynew2').style.display='none';
        //document.getElementById('trynew3').style.display='none';
        //document.getElementById('showprofile').style.display='block';


        }



        function mango(){
          window.location.href="viewmanager.php";
        }


        function logout(){

          window.location.href = "index.php";
        }


        function adminpagego(){
          window.location.href="index.php";
        }


    </script>


    <style type="text/css">
    	
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

}

#logo{
	width: 20px;
	height: 20px;
}

#footer{
	border: 5px #FFFACD solid;
	   background: linear-gradient(to right, #dae2f8, #d6a4a4);
	   padding-bottom:1%;
	 
}

table{
	margin-left: 45%;
	margin-right: 50%;
	border-collapse: separate;
	border-spacing: 0 1em;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;     	
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #8B0000;
  color: white;
}

#id{
	float: left;
}
 #navlogo{
 	width: 50px;
 	height: 50px;
 }

 .jumbotron {
  background-image: url("https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1030&q=80");
  background-size: cover;
  padding-top: 10%;
  padding-bottom: 20%;
}

h2{
color: #32CD32;
font-weight: bold;
}

p{
color: #D2691E;
font-weight: bold;
}

h1{
	color: #ffffff;
}

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
	margin-left: 40%;	
	margin-right: 30%;
	background: linear-gradient(to bottom, #000000, #e74c3c);
	padding-bottom: 2%;
	display: none;
}


#try1{
	border:2px gold solid;
	margin-left: 40%;	
	margin-right: 30%;
	background: linear-gradient(to bottom, #000000, #e74c3c);
	padding-bottom: 2%;
	display: none;
}



#try2{
	border:2px gold solid;
	margin-left: 40%;	
	margin-right: 30%;
	background: linear-gradient(to bottom, #000000, #e74c3c);
	padding-bottom: 2%;
	display: none;
}

#try3{
  border:2px gold solid;
  margin-left: 40%; 
  margin-right: 30%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  display: none;
  
}

#try4{
  border:2px gold solid;
  margin-left: 40%; 
  margin-right: 30%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  display: none;
  
}


#try8{
  border:2px gold solid;
  margin-left: 40%; 
  margin-right: 30%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  display: none;
  
}

#try9{
  border:2px gold solid;
  margin-left: 40%; 
  margin-right: 30%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  display: none;
}





#try5{
  border:2px gold solid;
  margin-left: 40%; 
  margin-right: 30%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  display: none;
  
}


#employee-logo{
	width: 200px;
	height: 200px;
	margin-left: 25%;
}

#manager-logo{

	width: 200px;
	height: 200px;
	margin-left: 25%;
}

.form-group{
	margin-left: 25%;
	margin-right: 20%;
}

.btn-success{
	margin-left: 40%;
}

.btn-primary{
  margin-left: 25%;
  width: 223px;
}
#admin-logo{
	margin-left: 25%;
}

#employee-logo1{

  width: 200px;
  height: 200px;
  margin-left: 40%;
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

#trynew2{
  border:2px gold solid;
  margin-left: 10%; 
  margin-right: 10%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  display: none;
}

#trynew3{
  border:2px gold solid;
  margin-left: 10%; 
  margin-right: 10%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  display: none;
}

#trynew4{
  border:2px gold solid;
  margin-left: 10%; 
  margin-right: 10%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  display: none;
}


#trynew5{
  border:2px gold solid;
  margin-left: 10%; 
  margin-right: 10%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  display: none;
}




#trymax{
  border:2px gold solid;
  margin-left: 13%; 
  margin-right: 13%;
  background: linear-gradient(to bottom, #c31432, #240b36);
  padding-bottom: 2%;
  border-radius: 20px;
  
}



#new td{
  color: #ffffff;
}

#new tr{
  font-weight: bold;
}

#new th{
  color: #FF1493;
}

#new{
  margin-right: auto;
  margin-left: auto;

}
#employee-logo2{
  width: 100px;
  height: 100px;
  margin-left: 47%;
}

  




    </style>



 </head>
 <body  onload="javascript:homepage()"  style="background-image:linear-gradient(to right, #355c7d, #6c5b7b, #c06c84);">

<div class="topnav">
  
    <img id="navlogo" src="imgs\images.jfif">
  <a href="#" onclick="javascript:logout()">Logout</a>
  <a href="#" onclick="javascript:task()">Task</a>
<a href="#" onclick="javascript:result()">View Employees</a>
<a href="#" onclick="javascript:mango()">View Managers</a>
<a href="#" onclick="javascript:addman()">Add Manager</a>
  <a class="active" href="#" onclick="javascript:addemployee()">Add Employee</a>
  
</div>










 <img align="center" onclick="javascript:adminpagego()" id="employee-logo2" src="https://cdn2.iconfinder.com/data/icons/employee-appraisal-filled-outline-1/64/individual_appraisal-appraisal-assessment-evaluate-review-test-512.png">
 
 <h1 align="center">Employee Performance Evaluation Portal</h1>
 <h2 align="center">Admin Dashboard</h2>
<br>
<br>


 <div class="container">
 <div class="jumbotron">






  <h2>Employee Performance evaluation</h2>

  <p>This portal helps in evaluating the perfomance of the employee and to reward the employee with the best organisational skills..</p>
   
  <button type="button" class="btn btn-primary">Read more</button>
</div>
</div>




<div id="trymax">
<div class="form-group">

    <br>
    <h3 align="center">Employee with the highest ratings</h3>
   
   <!--<marquee behaviour="slide" direction="left" scrollamount="25"><h3>Ratings as of now !!</h3></marquee>-->

    <?php

    
    $query="select EmpID,Username,EmailID from employee where EmpID=(select EmpID from manager_rating where Rating=(select max(Rating) from manager_rating))";
     

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
             ?>
             
             

            <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>EmpID</strong> &emsp;&emsp;
    <?php echo $row['EmpID']?></label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Username</strong>&emsp;&emsp;
    <?php echo $row['Username']?></label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>EmailID</strong>&emsp;&emsp;
    <?php echo $row['EmailID']?></label>
  </div>
  
  

  
  
                            
                   
          <?php    }
              
    }
    ?>
  
  
                  

  </div>
  
</div>




<form action="admindashboard.php" method="post">

<div id="try">
  <h3 align="center" style="color: #ffffff">ADD AN EMPLOYEE</h3>
  <br>
  <img id="admin-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI2nG8-uti9xBo5IFIOgQ4d6_KnhW9ckoxzzb4ZnCdtfnLt66eTQ&s">
 
  <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>Username</strong></label>
    <input name="username" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Username" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Password</strong></label>
    <input name="password" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter password" required>
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>EmailID</strong></label>
    <input name="emailid" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter mailID" required>
  </div>

  <div class="form-group">
   
    <label for="formGroupExampleInput"><strong>Assign under Manager</strong></label>
    <select name="manselect" class="form-control" id="formGroupExampleInput">
      <?php
      $res=mysqli_query($con,"select * from manager");
      while($row=mysqli_fetch_array($res))
      {
        ?>
        <option><?php echo $row["ManagerID"]; ?></option>
        <?php
      }
      ?>
    </select>
  </div>
 
  
  <!--<div class="form-group">
    <label for="formGroupExampleInput2"><strong>First Name</strong></label>
    <input name="emailid" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter mailID" required>
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Last Name</strong></label>
    <input name="emailid" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter mailID" required>
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Employee ID</strong></label>
    <input name="emailid" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter mailID" required>
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Destination</strong></label>
    <input name="emailid" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter mailID" required>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Phone number</strong></label>
    <input name="emailid" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter mailID" required>
  </div>
  
    -->

<input name="submit_btn" onclick="javascript:homepage()" type="submit" class="btn btn-success" value="Register">


  </div>

</form>

<?php  
  if(isset($_POST["submit_btn"])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $emailid=$_POST['emailid'];
    $manselect=$_POST['manselect'];
    $query="select * from employee WHERE Username='$username'";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
       echo "<script type='text/javascript'>alert('Username already exists')</script>";
    }
    else{
       $query="insert into employee values('$username','$password','$emailid','')";
       $query_run=mysqli_query($con,$query);
       if($query_run){
         echo "<script type='text/javascript'>alert('Employee added successfully')</script>";
       }
       else{
        echo "<script type='text/javascript'>alert('Error!')</script";
       }

       $query="insert into employee_under_manager values('','$manselect')";
       $query_run=mysqli_query($con,$query);
       if($query_run){
         echo "<script type='text/javascript'>alert('Employee assigned under manager')</script>";
       }
       else{
         echo "<script type='text/javascript'>alert('Error')</script>";
       }

       $query="update employee_under_manager set EmpID=(SELECT EmpID FROM employee ORDER BY EmpID DESC LIMIT 1) where EmpID=(SELECT EmpID FROM employee_under_manager ORDER BY EmpID LIMIT 1)";
       $query_run=mysqli_query($con,$query);
       if($query_run){
         echo "<script type='text/javascript'>alert('Updated')</script>";
       }
       else{
         echo "<script type='text/javascript'>alert('Error')</script>";
       }


    }




  }


?>


<div id="try3">
  <h3 align="center" style="color: #ffffff">TASK OPTIONS</h3>
  <br>
  
<button type="button" class="btn btn-primary" onclick="javascript:addtask()">Add and Assign Tasks</button>
<br>
<br>
<button type="button" class="btn btn-primary" onclick="javascript:aete()">Assign existing tasks to employee</button>
<br>
<br>
<button type="button" class="btn btn-primary" onclick="javascript:aetm()">Assign existing tasks to manager</button>
<br>
<br>
<button type="button" class="btn btn-primary" onclick="javascript:comptask()">View previously completed Tasks</button>
<br>
<br>
<button type="button" class="btn btn-primary" onclick="javascript:viewrate()" >View ratings from Managers</button>
<br>
<br>
<button type="button" class="btn btn-primary">Evaluate tasks</button>
<br>
  </div>

<form method="post">
<div id="trynew4">
<div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>Search employees by name:</strong></label>
    <input type="text" name="empname" class="form-control" id="formGroupExampleInput">
    <br>
   <input type="submit" onclick="javascript:result()" name="searchname" value="Search" class="btn btn-success" style="margin-left: 1%">
  </div>


  

<table align="center" id="new">
  <tr>
    <th>Username&emsp;</th>
    <th>Password</th>
    <th width="25%">EmailID&emsp;&emsp;</th>
    <th>EmpID</th>
  </tr>




<?php


    
    $query="select * from employee";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
                   
                   echo '<tr><td>' .$row["Username"] .'</td><td>' .$row["Password"] .'</td><td>' .$row["EmailID"] .'</td><td>' .$row["EmpID"] .'</td></tr>';
              }
              echo "</table>";
    }
   


?>

</div>
</form>
<?php


    if(isset($_POST["searchname"])){
    $empname=$_POST['empname'];    
    $query="select * from employee where Username='$empname'";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
             ?>
             <div id="showprofile">
            <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>Username</strong></label>
    <?php echo $row['Username']?>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Password</strong></label>
    <?php echo $row['Password']?>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>EmailID</strong></label>
    <?php echo $row['EmailID']?>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>EmpID</strong></label>
   <?php echo $row['EmpID']?>
  </div>
</div>
  
  
                            
                   
          <?php    }
              
    }
  }
   ?>





<form action="admindashboard.php" method="post">
<div id="try4">
  <h3 align="center" style="color: #ffffff">ADD AND ASSIGN TASKS</h3>
  <br>

  <img id="employee-logo" src="https://cdn3.iconfinder.com/data/icons/seo-and-internet-marketing/70/1-10-512.png">
  
 
  <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>TaskID</strong></label>
    <input type="text" name="taskid" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Task Name</strong></label>
    <input type="text" name="taskname" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Employee ID</strong></label>
    <input type="text" name="empid" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Task Duration (in days)</strong></label>
    <input type="text" name="taskdur" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>No.of.Stages</strong></label>
    <input type="text" name="noofstage" class="form-control" id="formGroupExampleInput2" >
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Due date of each stage</strong></label>
    <input type="date" name="duedateeach" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Task Description</strong></label>
    <input type="text" name="taskdesc" class="form-control" id="formGroupExampleInput2" >
  </div>
  
  
<input name="task_submit" onclick="javascript:homepage()"  type="submit" class="btn btn-success" value="Add tasks">

  </div>

</form>

<?php  
  if(isset($_POST["task_submit"])){
    $taskid=$_POST['taskid'];
    $taskname=$_POST['taskname'];
    $empid=$_POST['empid'];
    $taskdur=$_POST['taskdur'];
    $noofstage=$_POST['noofstage'];
    $duedateeach=$_POST['duedateeach'];
    $taskdesc=$_POST['taskdesc'];
    
    
    
       $query="insert into tasks values('$taskid','$empid','$taskname','$taskdur','$noofstage','$duedateeach','$taskdesc')";
       $query_run=mysqli_query($con,$query);
       if($query_run){
         echo "<script type='text/javascript'>alert('Task added and assigned successfully')</script";
       }
       else{
        echo "<script type='text/javascript'>alert('Error!')</script";
       }
                  
  }


?>

<form action="" method="post">
<div id="try8">
  <h3 align="center" style="color: #ffffff">ASSIGN TASKS TO EMPLOYEE</h3>
  <br>

  <img id="employee-logo" src="https://cdn3.iconfinder.com/data/icons/seo-and-internet-marketing/70/1-10-512.png">
  <br>
  
 <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>TaskID</strong></label>
    <select name="taskidt" class="form-control" id="formGroupExampleInput">
      <?php
      $res=mysqli_query($con,"select * from tasks");
      while($row=mysqli_fetch_array($res))
      {
        ?>
        <option><?php echo $row["TaskID"]; ?></option>
        <?php
      }
      ?>
    </select>
  </div>
   

   <div class="form-group">
    <label for="formGroupExampleInput2" name="labele" ><strong>Employee ID</strong></label>
    <select name="empidt" class="form-control" id="formGroupExampleInput2" >
     <?php
      $res=mysqli_query($con,"select * from employee");
      while($row=mysqli_fetch_array($res))
      {
        ?>
        <option><?php echo $row["EmpID"]; ?></option>
        <?php
      }
      ?>
    </select> 
  </div>

  
     
  
<input name="task_assign_emp" onclick="javascript:homepage()" type="submit" class="btn btn-success" value="Assign task">

  </div>

</form>

<form action="admindashboard.php" method="post">
<div id="try9">
  <h3 align="center" style="color: #ffffff">ASSIGN TASKS TO MANAGER</h3>
  <br>

  <img id="employee-logo" src="https://cdn3.iconfinder.com/data/icons/seo-and-internet-marketing/70/1-10-512.png">
  <br>
  
 <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>TaskID</strong></label>
    <select name="taskidt1" class="form-control" id="formGroupExampleInput">
      <?php
      $res=mysqli_query($con,"select * from tasks");
      while($row=mysqli_fetch_array($res))
      {
        ?>
        <option><?php echo $row["TaskID"]; ?></option>
        <?php
      }
      ?>
    </select>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" name="labelm" ><strong>Manager ID</strong></label>
    <select name="manidt" class="form-control" id="formGroupExampleInput2" >
     <?php
      $res=mysqli_query($con,"select * from manager");
      while($row=mysqli_fetch_array($res))
      {
        ?>
        <option><?php echo $row["ManagerID"]; ?></option>
        <?php
      }
      ?>
    </select> 
  </div>
  
   

   
  
     
  
<input name="task_assign_man" onclick="javascript:homepage()" type="submit" class="btn btn-success" value="Assign task">

  </div>

</form>






 
<?php  
  if(isset($_POST["task_assign_emp"])){
    $taskid=$_POST['taskidt'];
    $empid=$_POST['empidt'];
    
    
    
       $query="insert into task_employee_admin values('$taskid','$empid')";
       $query_run=mysqli_query($con,$query);
       if($query_run){
         echo "<script type='text/javascript'>alert('Task assigned to employee successfully')</script";
       }
       else{
        echo "<script type='text/javascript'>alert('Error!')</script";
       }      
    

  }  
?>

<?php  
  if(isset($_POST["task_assign_man"])){
    $taskid=$_POST['taskidt1'];
    $manid=$_POST['manidt'];
       $query="insert into task_manager_admin values('$taskid','$manid')";
       $query_run=mysqli_query($con,$query);
       if($query_run){
         echo "<script type='text/javascript'>alert('Task assigned to manager successfully')</script";
       }
       else{
        echo "<script type='text/javascript'>alert('Error!')</script";
       }      
    

  }

  ?>


  

<div id="trynew2">
  <h3 align="center" style="color: #ffffff">COMPLETED TASKS</h3>
  <br>

  <img id="employee-logo1" src="https://cdn3.iconfinder.com/data/icons/seo-and-internet-marketing/70/1-10-512.png">
  <table id="new" align="center">
  <tr>
    <th>EmpID&emsp;</th>
    <th>TaskID&emsp;</th>
    <th width="25%">Details</th>
   </tr> 

<?php


    
    $query="select EmpID,TaskID,GROUP_CONCAT(stage_info SEPARATOR '<br>') AS stage_info from taskinfo group by EmpID,TaskID";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
                   
                   echo  '<tr><td>' .$row["EmpID"] .'</td><td>' .$row["TaskID"] .'</td><td>' .$row["stage_info"] .'</td></tr>';
              }
              echo "</table>";
    }

    else{
      echo "</table>";
    }
   


?>  
    
</div> 


<div id="trynew3">
  <h3 align="center" style="color: #ffffff">RATINGS</h3>
  <br>

  <img id="employee-logo1" src="https://cdn3.iconfinder.com/data/icons/seo-and-internet-marketing/70/1-10-512.png">
  <table id="new" align="center">
  <tr>
    <th>TaskID&emsp;</th>
    <th>EmpID&emsp;</th>
    <th width="25%">ManagerID&emsp;</th>
    <th width="25%">Ratings</th>
   </tr> 

<?php


    
    $query="select * from manager_rating";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
                   
                   echo  '<tr><td>' .$row["TaskID"] .'</td><td>' .$row["EmpID"] .'</td><td>' .$row["Man_ID"]  .'</td><td>' .$row["Rating"] .'</td></tr>';
              }
              echo "</table>";
    }
    else{
      echo "</table>";
    }
   


?>  
    
</div> 



<form action="admindashboard.php" method="post">
<div id="try5">
  <h3 align="center" style="color: #ffffff">ADD MANAGER</h3>
  <br>

  <img id="employee-logo" src="https://cdn3.iconfinder.com/data/icons/seo-and-internet-marketing/70/1-10-512.png">
  
 
  <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>Manager Name</strong></label>
    <input  name="manname" type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Username</strong></label>
    <input type="text" name="uname" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Password</strong></label>
    <input type="text" name="pass" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>EmailID</strong></label>
    <input type="text"  name="manmail" class="form-control" id="formGroupExampleInput2" >
  </div>
  
  
<input name="man_submit" onclick="javascript:homepage()" type="submit" class="btn btn-success" value="Add manager">

  </div>

</form>

<?php  
  if(isset($_POST["man_submit"])){
    $manname=$_POST['manname'];
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $manmail=$_POST['manmail'];
    
    
    
       $query="insert into manager values('','$manname','$uname','$pass','$manmail')";
       $query_run=mysqli_query($con,$query);
       if($query_run){
         echo "<script type='text/javascript'>alert('Manager added successfully')</script";
       }
       else{
        echo "<script type='text/javascript'>alert('Error!')</script";
       }      
    

  }



?>








<br>
<div id="footer">
	<h4 align="center" style="color: #FF7F50">Contact Us</h4>
	  <table>
	  	<tr>
	  	<td><img id="logo" src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/612/aiga_mail_bg-512.png">&emsp;&emsp;&emsp;</td>
	  	<td>tarun.ambili123@gmail.com</td>
	  </tr>
	  <tr>
	  	<td><img id="logo" src="https://cdn.clipart.email/c69289d80763b9354ab25bb2f3a81617_logo-symbol-computer-icons-telephone-clip-art-mobile-phone-logo-_900-1520.jpeg"></td>&emsp;&emsp;&emsp;
	  	<td>8098672000</td>
	   </tr>
	   <tr>
	   	<td><img src="https://cdn1.vectorstock.com/i/1000x1000/35/90/fax-web-icon-vector-21093590.jpg" id="logo"></td>&emsp;&emsp;&emsp;
	   	<td>ABCD</td>
	   </tr>
	   <tr>
	   	<td><img src="https://workingwithdog.com/wp-content/uploads/2016/05/new_instagram_logo-1024x1024.jpg" id="logo"></td>&emsp;&emsp;&emsp;
	   	<td>@tarun.jpeg</td>
	   </tr>
	   <tr>
	   	<td><img src="https://www.facebook.com/images/fb_icon_325x325.png" id="logo"></td>&emsp;&emsp;&emsp;
	   	<td>harikuttan_tarun</td>
	   </tr>
	</table>
</div>
 </body>
 </html>