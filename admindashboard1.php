<?php 
  require 'dbconfig/config.php';
 ?>



 <!DOCTYPE html>
 <html>
 <head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript">
      
      function homepage() {
        document.getElementById('try').style.display='none';
        document.getElementsByClassName('container')[0].style.display='block';
        document.getElementById('Viewemp').style.display='none';

      }



      function addemployee(){
        document.getElementById('try').style.display='block';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('Viewemp').style.display='none';

        }

        function viewemployee() {
             document.getElementById('try').style.display='none';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('Viewemp').style.display='block';
        
          
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

#admin-logo{
  margin-left: 25%;
}

#employee-logo

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
 <body  onload="javascript:homepage()"  style="background-image:linear-gradient(to right, #355c7d, #6c5b7b, #c06c84);">
 <h1 align="center">Employee Performance Evaluation Portal</h1>
 <h2 align="center">Admin Dashboard</h2>
<br>
<br>
<div class="topnav">
  
    <img id="navlogo" src="imgs\images.jfif">
  <a href="#" onclick="javascript:logout()">Logout</a>
  <a href="#about" onclick="javascript:changetoemployee()">Task</a>
<a href="#contact" onclick="javascript:viewemployee()">View Employees</a>
<a href="#news" onclick="javascript:changetoadmin()">Add Manager</a>
  <a class="active" href="#home" onclick="javascript:addemployee()">Add Employee</a>
  
  
  
</div>










<br>
 <div class="container">
 <div class="jumbotron">
  <h2>Employee Performance evaluation</h2>

  <p>This portal helps in evaluating the perfomance of the employee and to reward the employee with the best organisational skills..</p>
   
  <button type="button" class="btn btn-primary">Read more</button>
</div>
</div>

<form action="admindashboard.php" method="post">

<div id="try">
  <h3 align="center">ADD AN EMPLOYEE</h3>
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

<input name="submit_btn" type="submit" class="btn btn-success" value="Register">


  </div>

</form>

<?php  
  if(isset($_POST["submit_btn"])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $emailid=$_POST['emailid'];
    $query="select * from employee WHERE Username='$username'";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
       echo "<script type='text/javascript'>alert('Username already exists')</script";
    }
    else{
       $query="insert into employee values('$username','$password','$emailid')";
       $query_run=mysqli_query($con,$query);
       if($query_run){
         echo "<script type='text/javascript'>alert('Employee added successfully')</script";
       }
       else{
        echo "<script type='text/javascript'>alert('Error!')</script";
       }      
    }

  }



?>


<table align="center" id="Viewemp">
  <tr>
    <th>Username&emsp;</th>
    <th>Password</th>

  </tr>




<?php


    
    $query="select * from employee";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
                   
                   echo '<tr><td>' .$row["Username"] .'</td><td>' .$row["Password"] .'</td></tr>';
              }
              echo "</table>";
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