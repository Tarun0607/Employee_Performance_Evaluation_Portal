<?php 
  session_start();
  require 'dbconfig/config.php';
 ?>

  <?php
  if(isset($_POST['echeck'])){
    $username=$_POST['usernamee'];
    $password=$_POST['passworde'];
    $query="select * from employee WHERE Username='$username' AND Password='$password'";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              $_SESSION['eusername']=$username;
              header("location:employeedashboard.php");
    }
    else{
       echo "<script type='text/javascript'>alert('Invalid credentials')</script>";      
    }

         
    }
    ?>

  <?php
   if(isset($_POST['acheck'])){
   	$username=$_POST['usernamea'];
    $password=$_POST['passworda'];
    if($username=='Admin' && $password=='Admin'){
            //$_SESSION['check']="Admin";
            header("location:admindashboard.php");	
    }
    else{
        echo "<script type='text/javascript'>alert('Invalid credentials')</script>";	
    }
   }

  ?>

 <?php
  if(isset($_POST['man_submit'])){
    $username=$_POST['usernamem'];
    $password=$_POST['passwordm'];
    $query="select * from manager WHERE Username='$username' AND Password='$password'";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              $_SESSION['musername']=$username;
              header("location:managerdashboard.php");
    }
    else{
       echo "<script type='text/javascript'>alert('Invalid credentials')</script>";      
    }

         
    }
    ?>








 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login Page</title>
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <script type="text/javascript">


      function homepagego(){
        window.location.href = "index.php";
      }



       function changetoadmin(){
        document.getElementById('homeselected').className="";
        document.getElementById('MLselected').className="";
        document.getElementById('ELselected').className="";
        document.getElementById('ALselected').className="active";
    		document.getElementsByClassName('container')[0].style.display='none';
            document.getElementById('try').style.display='block';
            document.getElementById('try1').style.display='none';
            document.getElementById('try2').style.display='none';
    	}

    	function homepage(){
        document.getElementById('homeselected').className="active";
        document.getElementById('ALselected').className="";
        document.getElementById('MLselected').className="";
        document.getElementById('ELselected').className="";
    		document.getElementById('try').style.display='none';
    		document.getElementsByClassName('container')[0].style.display='block';
    		document.getElementById('try1').style.display='none';
    		document.getElementById('try2').style.display='none';
    	}

    	function changetoemployee(){
        document.getElementById('homeselected').className="";
        document.getElementById('ALselected').className="";
        document.getElementById('MLselected').className="";
        document.getElementById('ELselected').className="active";
    		document.getElementById('try').style.display='none';
    		document.getElementsByClassName('container')[0].style.display='none';
    		document.getElementById('try1').style.display='block';
    		document.getElementById('try2').style.display='none';
    	}
    	
    	function changetomanager(){
        document.getElementById('homeselected').className="";
        document.getElementById('ALselected').className="";
        document.getElementById('ELselected').className="";
        document.getElementById('MLselected').className="active";
    		document.getElementById('try').style.display='none';
    		document.getElementsByClassName('container')[0].style.display='none';
    		document.getElementById('try1').style.display='none';
    		document.getElementById('try2').style.display='block';
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
  float: left;
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


#employee-logo{
	width: 200px;
	height: 200px;
	margin-left: 25%;
}

#employee-logo1{
  width: 100px;
  height: 100px;
  margin-left: 47%;
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

#Special{
  background: linear-gradient(to left, #f3904f, #3b4371); 
}
	
  #justlabel{
    padding-top: 0px;
    padding-bottom: 0px;
    margin-bottom: 0px;
    margin-top: 10px;
    color: #FFA07A;
  }

  .icon-input-btn{
        display: inline-block;
        position: relative;
    }
    .icon-input-btn input[type="submit"]{
        padding-left: 2em;
    }
    .icon-input-btn .glyphicon{
        display: inline-block;
        position: absolute;
        left: 0.65em;
        top: 30%;
    }

    #head{
      background-color: #9370DB;
    }







    </style>


 </head>
 <body  onload="javascript:homepage()"  style="background-image:linear-gradient(to right, #355c7d, #6c5b7b, #c06c84);">

<div class="topnav">
  
    
  <img id="navlogo" src="imgs\images.jfif">&nbsp;
  <a href="#contactus" name="top" style="float: right;">Contact Us</a>
  <a style="float: right;" href="#">Feedback</a>

   <a class="active" id="homeselected" style="float: left;"  href="#home" onclick="javascript:homepage()">Home Page</a>
  <a href="#about" id="ELselected" style="float: left;" onclick="javascript:changetoemployee()">Employee Login</a>
<a href="#contact" id="MLselected" style="float: left;" onclick="javascript:changetomanager()">Manager Login</a>
<a href="#news" id="ALselected"  style="float: left;" onclick="javascript:changetoadmin()">Admin Login</a>
  
  
  
  <!--<h3 id="justlabel" style="float: right;">Evaluation of employees now made easy!!&emsp;</h3>-->
  
  
</div>




<img onclick="javascript:homepagego()" align="center" id="employee-logo1" src="https://cdn2.iconfinder.com/data/icons/employee-appraisal-filled-outline-1/64/individual_appraisal-appraisal-assessment-evaluate-review-test-512.png">
 
 
 <h1 align="center">Employee Performance Evaluation Portal</h1>
<!-- <marquee behaviour="slide" direction="left" scrollamount="25"><h2>Evaluation of employees now made easy!!</h2></marquee>-->

<br>





<br>





<div class="container">
 <div class="jumbotron">
  <h2>Employee Performance evaluation</h2>
  <p>This portal helps in evaluating the perfomance of the employee and to reward the employee with the best organisational skills..</p>
   
  <button type="button" class="btn btn-primary">Read more</button>
</div>
</div>

<form action="index.php" method="post">
<div id="try">

	<h3  style="color: #ffffff"  align="center">ADMIN LOGIN</h3>
  <br>
  <img id="admin-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI2nG8-uti9xBo5IFIOgQ4d6_KnhW9ckoxzzb4ZnCdtfnLt66eTQ&s">
 
  <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>Username</strong></label>
    <input type="text" name="usernamea" class="form-control" id="formGroupExampleInput" placeholder="Enter your Username">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Password</strong></label>
    <input type="password" class="form-control" name="passworda" id="formGroupExampleInput2" placeholder="Enter your password">
  </div>
  <input type="submit" name="acheck" class="btn btn-success" value="Sign In">

	</div>
</form>

<form action="index.php" method="post">
<div id="try1">
  <h3 align="center" style="color: #ffffff">EMPLOYEE LOGIN</h3>
  <br>
  <img id="employee-logo" src="https://cdn0.iconfinder.com/data/icons/business-collection-2/128/user_man-512.png">
 
  <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>Username</strong></label>
    <input type="text" class="form-control" name="usernamee" id="formGroupExampleInput" placeholder="Enter your Username">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Password</strong></label>
    <input type="password" class="form-control"  name="passworde" id="formGroupExampleInput2" placeholder="Enter your password">
  </div>
  
<input type="submit" name="echeck" class="btn btn-success" value="Sign In">

	</div>
</form>

<form action="index.php" method="post">
<div id="try2">
  <h3 align="center" style="color: #ffffff">MANAGER LOGIN</h3>
  <br>
  <img id="manager-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkA1X4b-oaYZBJdLs3w2YnvfEYbH6-V4rp3ZNQVQ2Safv2th4w&s">
 
  <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>Username</strong></label>
    <input type="text" class="form-control" name="usernamem" id="formGroupExampleInput" placeholder="Enter your Username">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Password</strong></label>
    <input type="password" class="form-control" name="passwordm" id="formGroupExampleInput2" placeholder="Enter your password">
  </div>
  
<input type="submit" name="man_submit" class="btn btn-success" value="Sign In">

	</div>
</form>




<br>

<a name="contactus"></a>
<div id="footer">
  <h5 align="center" style="color: #663399">Copyright 2017 Employee Evaluation Portal - All Rights Reserved</h5><br>
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