<?php 
  require 'dbconfig/config.php';
 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>View Managers</title>
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript">
    	
    	
        function result(){
          
        
        document.getElementById('trynew4').style.display='none';
        document.getElementById('new').style.display='none';
        document.getElementById('showprofile').style.display='block';


        }


        function homepage(){
          window.location.href = "index.php";
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
  background-image: url("imgs/annie-spratt-QckxruozjRg-unsplash.jpg");
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
	
}



#try2{
	border:2px gold solid;
	margin-left: 40%;	
	margin-right: 30%;
	background: linear-gradient(to bottom, #000000, #e74c3c);
	padding-bottom: 2%;
	
}

#try3{
  border:2px gold solid;
  margin-left: 40%; 
  margin-right: 30%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  
}

#try4{
  border:2px gold solid;
  margin-left: 40%; 
  margin-right: 30%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  
}

#try5{
  border:2px gold solid;
  margin-left: 40%; 
  margin-right: 30%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  
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
	margin-left: 40%;
	margin-right: 20%;
}

.btn-success{
	margin-left: 40%;
}

.btn-primary{
  margin-left: 25%;
  width: 220px;
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
}

#trynew3{
  border:2px gold solid;
  margin-left: 10%; 
  margin-right: 10%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
}

#trynew4{
  border:2px gold solid;
  margin-left: 10%; 
  margin-right: 10%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
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



#showprofile{
   border:2px gold solid;
   border-radius: 4px;
   background: linear-gradient(to bottom, #c31432, #240b36);
  margin-left: 10%; 
  margin-right: 10%;
  padding-bottom: 2%;

  

  }
  
#showprofile1{
   border:2px gold solid;
   border-radius: 4px;
   background: linear-gradient(to bottom, #c31432, #240b36);
  margin-left: 10%; 
  margin-right: 10%;
  margin-bottom: 15%;
  padding-right: 2%;
  padding-bottom:7%;
  float: left;
  width: 30%;


  }

  .seperate{

      float: left;
  }

  .icon-input-btn{
        display: inline-block;
        position: relative;
    }
    .icon-input-btn input[type="submit"]{
        padding-left: 2em;
        margin-left: 25%;
    }
    .icon-input-btn .glyphicon{
        display: inline-block;
        position: absolute;
        left: 0.65em;
        top: 30%;
    }





    </style>




 </head>

 <body style="background-image:linear-gradient(to right, #355c7d, #6c5b7b, #c06c84);">

<span class="icon-input-btn" >   
  <span class="glyphicon glyphicon-home"></span>
   <input type="submit" id="homego" onclick="javascript:homepage()" name="searchname" value="Home" class="btn btn-success" style="margin-left: 1%">
  </span>




   
<h1 align="center">Employee Performance Evaluation Portal</h1>
 <h2 align="center">View Managers</h2>

<form action="" method="post">
<div id="trynew4">
<div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>Search managers by name:</strong></label>
    <input type="text" name="manname" class="form-control" id="formGroupExampleInput">
    <br>
<span class="icon-input-btn" >   
  <span class="glyphicon glyphicon-search"></span>





   <input type="submit" onclick="javascript:result()" name="searchname" value="Search" class="btn btn-success" style="margin-left: 1%">
  </span>
  </div>


  

<table align="center" id="new">
  <tr>
    <th>Username&emsp;</th>
    <th>Password</th>
    <th width="25%">EmailID&emsp;&emsp;</th>
    <th>ManagerID</th>
  </tr>




<?php


    
    $query="select * from manager";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
                   
                   echo '<tr><td>' .$row["Username"] .'</td><td>' .$row["Password"] .'</td><td>' .$row["EmailID"] .'</td><td>' .$row["ManagerID"] .'</td></tr>';
              }
              echo "</table>";
    }
   


?>

</div>
</form>
<?php


    if(isset($_POST["searchname"])){
    $manname=$_POST['manname'];    
    $query="select * from manager where Username='$manname'";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
             ?>
             <br>
             <br>
             
             <div id="showprofile">

             <div class="form-group">
    <br>
    <label><strong>Search Results : Profile Info</strong></label>
  </div>

            <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>Username</strong> &emsp;&emsp;
    <?php echo $row['Username']?></label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Password</strong>&emsp;&emsp;
    <?php echo $row['Password']?></label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>EmailID</strong>&emsp;&emsp;
    <?php echo $row['EmailID']?></label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>EmpID</strong>&emsp;&emsp;
   <?php echo $row['ManagerID']?></label>
  </div>
  
  <div class="form-group">
    <br>
    <label>&emsp;&emsp;<strong>Employees Under the Manager</strong></label>
  </div>
  <?php


    if(isset($_POST["searchname"])){
    $empname=$_POST['manname'];    
    $query="select e.EmpID,e.Username from employee e,employee_under_manager eu where e.EmpID=eu.EmpID AND eu.ManagerID=(select ManagerID from Manager where Username='$manname')";

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
 
 

  
    <?php    }
              
    }
  }
   ?>



                            
                   
          <?php    }
              
    }
  }
   ?>
 </div>
             
 </body>
 </html>
