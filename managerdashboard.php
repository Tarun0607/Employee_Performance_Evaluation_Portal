<?php 
  session_start();
  require 'dbconfig/config.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Manager Dashboard</title>
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript">
    	
    
    function upload(){
        
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('try').style.display='none';
        document.getElementById('Viewemp').style.display='none';   
        document.getElementById('try7').style.display='block';
        document.getElementById('trynew1').style.display='none';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='none';
        document.getElementById('trynew2').style.display='none';
     
    }  
     
  function viewemp(){
     document.getElementsByClassName('container')[0].style.display='none';
     document.getElementById('Viewemp').style.display='block';
     document.getElementById('try').style.display='none';
     document.getElementById('try3').style.display='none';
     document.getElementById('try4').style.display='none';
     document.getElementById('trynew1').style.display='none';
     document.getElementById('try7').style.display='none';
     document.getElementById('trynew2').style.display='none';
  }


function viewprofile(){
  document.getElementById('viewproselected').className='active';
  document.getElementById('tasksselected').className='';
   document.getElementsByClassName('container')[0].style.display='none';
     document.getElementById('Viewemp').style.display='none';
     document.getElementById('try').style.display='block';
    document.getElementById('try3').style.display='none';
    document.getElementById('try4').style.display='none';
    document.getElementById('trynew1').style.display='none';
    document.getElementById('try7').style.display='none';
    document.getElementById('trynew2').style.display='none';
}


function assigntask(){
 document.getElementsByClassName('container')[0].style.display='none';
 document.getElementById('Viewemp').style.display='none';
 document.getElementById('try').style.display='none';
 document.getElementById('try3').style.display='none';
document.getElementById('try4').style.display='block';
document.getElementById('trynew1').style.display='none';
document.getElementById('try7').style.display='none';
document.getElementById('trynew2').style.display='none';

}



    function homepage(){
        document.getElementsByClassName('container')[0].style.display='block';
        document.getElementById('Viewemp').style.display='none';
        document.getElementById('try').style.display='none';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='none';
        document.getElementById('trynew1').style.display='none';
        document.getElementById('try7').style.display='none';
        document.getElementById('trynew2').style.display='none';
      }

       function tasks(){
        document.getElementById('viewproselected').className='';
        document.getElementById('tasksselected').className='active';
  
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('Viewemp').style.display='none';
        document.getElementById('try').style.display='none';
        document.getElementById('try3').style.display='block';
        document.getElementById('try4').style.display='none';
        document.getElementById('trynew1').style.display='none';      
        document.getElementById('try7').style.display='none';
        document.getElementById('trynew2').style.display='none';
      }


      function evalutask(){
         document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('Viewemp').style.display='none';
        document.getElementById('try').style.display='none';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='none';
        document.getElementById('trynew1').style.display='block';
        document.getElementById('try7').style.display='none';
        document.getElementById('trynew2').style.display='none';
      }

      function comptask(){

         document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('Viewemp').style.display='none';
        document.getElementById('try').style.display='none';
        document.getElementById('try3').style.display='none';
        document.getElementById('try4').style.display='none';
        document.getElementById('trynew1').style.display='none';
        document.getElementById('try7').style.display='none';
        document.getElementById('trynew2').style.display='block';

      }
      function result(){

          window.location.href="viewemployee.php";

      }

      
       function logout(){

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
  background-image: url("https://images.unsplash.com/photo-1558698972-c50e325e6799?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80");
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

#try3{
  display: none;
  border:2px gold solid;
  margin-left: 40%; 
  margin-right: 30%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  
}


  #trynew{
  border:2px gold solid;
  margin-left: 10%; 
  margin-right: 10%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  display: none;
}

#trynew1{
  border:2px gold solid;
  margin-left: 10%; 
  margin-right: 10%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  display: none;
}


#trynew2{
  border:2px gold solid;
  margin-left: 10%; 
  margin-right: 10%;
  background: linear-gradient(to bottom, #000000, #e74c3c);
  padding-bottom: 2%;
  display: none;
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

#try2{
	border:2px gold solid;
	margin-left: 40%;	
	margin-right: 30%;
	background: linear-gradient(to bottom, #000000, #e74c3c);
	padding-bottom: 2%;
	display: none;
}


#try7{
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


#Viewemp{
    border-collapse: collapse;
    width: 25%;
    color: #ffffff;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
    display: none;
  }


#employee-logo{
	width: 200px;
	height: 200px;
	margin-left: 25%;
}

#employee-logo2{
  width: 100px;
  height: 100px;
  margin-left: 47%;
}


#employee-logo1{

  width: 200px;
  height: 200px;
  margin-left: 40%;
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
  width: 220px;
}

#admin-logo{
	margin-left: 25%;
}

#new{
  margin-right: auto;
  margin-left: auto;

}

h3{
	padding-top: 2%;
	color: #ffffff;
	font-family: sans-serif;
}

label{
	color: #ffffff;
}
	
.alert-success{
  margin-top: 0%;

}



    </style>


 </head>
 <body  onload="javascript:homepage()"  style="background-image:linear-gradient(to right, #355c7d, #6c5b7b, #c06c84);">
 <div class="topnav">
  
    <img id="navlogo" src="imgs\images.jfif">
  
  <a href="#about" onclick="javascript:logout()">Logout</a>
<a href="#contact" id="tasksselected" onclick="javascript:tasks()">Task</a>
<a href="#" onclick="javascript:result()">View employees</a>
  <a href="#home" id="viewproselected" onclick="javascript:viewprofile()">View Profile</a>
  
  
  
</div>





 <img align="center" id="employee-logo2" src="https://cdn2.iconfinder.com/data/icons/employee-appraisal-filled-outline-1/64/individual_appraisal-appraisal-assessment-evaluate-review-test-512.png">
 <h1 align="center">Employee Performance Evaluation Portal</h1>
 <h2 align="center">Manager Dashboard</h2>
 <h2 align="center">Welcome
     <?php echo $_SESSION['musername']  ?>
   </h2>
<br>



<br>
 <div class="container">
 <div class="jumbotron">
  <h2>Employee Performance evaluation</h2>

  <p>This portal helps in evaluating the perfomance of the employee and to reward the employee with the best organisational skills..</p>
   
  <button type="button" class="btn btn-primary">Read more</button>
</div>
</div>



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


<form action="managerdashboard.php" method="post">
    <div id="try">
  <h3 align="center" style="color: #ffffff">VIEW PROFILE</h3>
  <br>

  <img id="employee-logo" src="https://cdn0.iconfinder.com/data/icons/business-collection-2/128/user_man-512.png">
  
    
  

  



<?php


    
    $query="select * from manager where Username='".$_SESSION['musername']."'";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
             ?>
            <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>Username</strong></label>
    <input type="text" name="uname" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['Username']?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Password</strong></label>
    <input type="text" name="pass" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['Password']?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>EmailID</strong></label>
    <input type="text" name="mail" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['EmailID']?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>ManagerID</strong></label>
    <input type="text"  name="manidr" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['ManagerID']?>">
  </div>
  
  
                            
                   
          <?php    }
              
    }
   ?>

  <input type="submit" name="update_profile" class="btn btn-success" value="Update Profile">
 

 
  
  

</div>
</form>


<?php  
  if(isset($_POST["update_profile"])){
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $mail=$_POST['mail'];
    $manidr=$_POST['manidr'];
    
    
    
       $query="Update manager SET Username='$uname',Password='$pass',EmailID='$mail' where ManagerID='$manidr'";
       $query_run=mysqli_query($con,$query);
       if($query_run){
         echo '<div class="alert alert-success" role="alert">This is a success alert—check it out!</div>';
       }
       else{
        echo "<script type='text/javascript'>alert('Error!')</script>";
       }      
    

  }



?>





<div id="try3">
  <h3 align="center" style="color: #ffffff">TASK OPTIONS</h3>
  <br>
  
<button type="button" class="btn btn-primary" onclick="javascript:assigntask()">Assign Tasks</button>
<br>
<br>
<button type="button" class="btn btn-primary" onclick="javascript:evalutask()">Evaluate tasks</button>
<br>
<br>
<button type="button" class="btn btn-primary" onclick="javascript:comptask()">View Completed Tasks</button>
<br>


  </div>
<br>

<form action="managerdashboard.php" method="post">
<div id="try4">
  <h3 align="center" style="color: #ffffff">ASSIGN TASKS</h3>
  <br>

  <img id="employee-logo" src="https://cdn3.iconfinder.com/data/icons/seo-and-internet-marketing/70/1-10-512.png">
  
 
  <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>TaskID</strong></label>
    <select name="taskid" class="form-control" id="formGroupExampleInput">
      <?php
      $res=mysqli_query($con,"select * from task_manager_admin where ManagerID=(select ManagerID from manager where username='".$_SESSION['musername']."')");
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
    <label for="formGroupExampleInput2"><strong>Employee ID</strong></label>
    <select name="empid" class="form-control" id="formGroupExampleInput2" >
     <?php
      $res=mysqli_query($con,"select * from employee_under_manager where ManagerID=(select ManagerID from manager where username='".$_SESSION['musername']."')");
      while($row=mysqli_fetch_array($res))
      {
        ?>
        <option><?php echo $row["EmpID"]; ?></option>
        <?php
      }
      ?>
    </select> 
  </div>
  
<input name="taskassign_submit" type="submit" class="btn btn-success" value="Assign tasks">

  </div>

</form>


<?php  
  if(isset($_POST["taskassign_submit"])){
    $taskid=$_POST['taskid'];
    
    $empid=$_POST['empid'];
    
    
    
       $query="insert into task_manager values('$taskid','$empid')";
       $query_run=mysqli_query($con,$query);
       if($query_run){
         echo "<script type='text/javascript'>alert('Task assigned successfully')</script";
       }
       else{
        echo "<script type='text/javascript'>alert('Error!')</script";
       }      
    

  }



?>



<div id="trynew1">
  <h3 align="center" style="color: #ffffff">TASKS LIST</h3>
  <br>

  <img id="employee-logo1" src="https://cdn3.iconfinder.com/data/icons/seo-and-internet-marketing/70/1-10-512.png">
  <table id="new" align="center">
  <tr>
    <th>EmpID&emsp;</th>
    <th>TaskID&emsp;</th>
    <th width="25%">Taskname&emsp;</th>
    <th></th>
   </tr> 

<?php


    
    $query="select * from completedtask";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
                   
                   echo  '<tr><td>' .$row["EmpID"] .'</td><td>' .$row["TaskID"] .'</td><td>' .$row["TaskName"]  .'</td><td><button onclick="javascript:upload()" class="btn btn-info">Rate</button></td></tr>';
              }
              echo "</table>";
    }
   else{
    echo "</table>";
   }


?>  
    
</div> 


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






<form action="managerdashboard.php"  method="post">
    <div id="try7">
  <h3 align="center">RATE TASK</h3>
  <br>
  <img id="employee-logo" src="https://cdn4.iconfinder.com/data/icons/business-ash-gray-set-2/64/b-01-512.png">
 
  <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>TaskID</strong></label>
    <input name="taskiduu" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your Username">
  </div>


  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Task name</strong></label>
    <input type="text" name="tasknameuu" class="form-control" id="formGroupExampleInput2" placeholder="Enter your password">
  </div>

   <div class="form-group">
    <label for="formGroupExampleInput2"><strong>EmpID</strong></label>
    <input type="text" name="empiduu" class="form-control" id="formGroupExampleInput2" placeholder="Enter your password">
  </div>


  



   
   <div class="form-group">
    <label for="formGroupExampleInput2"><strong>ManagerID</strong></label>
    <input type="text" name="maniduu" class="form-control" id="formGroupExampleInput2" placeholder="Enter your password">
  </div>
   
     

   <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Ratings</strong></label>
    <input type="text" name="rateuu" class="form-control" id="formGroupExampleInput2" placeholder="Enter your Ratings">
  </div>
  
<input type="submit"  name="rate_submit" class="btn btn-success" value="Submit ratings">
<br>

  </div>
</form>


<script type="text/javascript">

function setval(taskid,taskname,empid){
    document.getElementsByName('taskiduu')[0].value=taskid;
    document.getElementsByName('empiduu')[0].value=empid;
    document.getElementsByName('tasknameuu')[0].value=taskname;
    document.getElementsByName('maniduu')[0].value=document.getElementsByName('manidr')[0].value;
    '<%Session["taskidr"]="'+taskid+'";%>';
    '<%Session["empidr"]="'+empid+'";%>';
  }

  
var ratebutton=document.getElementsByClassName('btn btn-info');
    for(var i=0;i<ratebutton.length;i++){
        var button=ratebutton[i];
        button.addEventListener('click',function(event){
    var buttonclicked=event.target;
    var row=buttonclicked.parentElement.parentElement;
    var taskid=row.cells[1].innerText;
    var taskname=row.cells[2].innerText;
    var empid=row.cells[0].innerText;
   setval(taskid,taskname,empid);
    

    
   

  })
  };

</script>






<?php  
  if(isset($_POST["rate_submit"])){
    $taskiduu=$_POST['taskiduu'];
    $empiduu=$_POST['empiduu'];
    $rateuu=$_POST['rateuu'];
    $maniduu=$_POST['maniduu'];
    
    
       $query="insert into manager_rating values('$taskiduu','$empiduu','$maniduu','$rateuu')";
       $query_run=mysqli_query($con,$query);
       if($query_run){
         echo "<script type='text/javascript'>alert('Rating uploaded successfully')</script>";
       }
       else{
        echo "<script type='text/javascript'>alert('Error!')</script>";
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