<?php 
  session_start();
  require 'dbconfig/config.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Employee Dashboard</title>
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript">
    	
    
      
    function upload(){
        document.getElementById('trynew2').style.display='none';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('try').style.display='none';
        document.getElementById('trynew').style.display='none';
        document.getElementById('try7').style.display='block';
        document.getElementById('trynew1').style.display='none';
    }
  
     
    function viewcomplete(){
      document.getElementById('proselected').className='';
      document.getElementById('vctselected').className='active';
      document.getElementById('vptselected').className='';
        



        document.getElementById('trynew2').style.display='none';
         document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('try').style.display='none';
        document.getElementById('trynew').style.display='none';
        document.getElementById('try7').style.display='none';
        document.getElementById('trynew1').style.display='block';


    }
     










      function homepage(){
        document.getElementsByClassName('container')[0].style.display='block';
        document.getElementById('try').style.display='none';
        document.getElementById('trynew').style.display='none';
        document.getElementById('try7').style.display='none';
        document.getElementById('trynew1').style.display='none';
        document.getElementById('trynew2').style.display='block';
      }

      function viewprofile(){
        document.getElementById('proselected').className='active';
        document.getElementById('vctselected').className='';
        document.getElementById('vptselected').className='';
        

        document.getElementById('trynew2').style.display='none';

       document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('try').style.display='block';
        document.getElementById('trynew').style.display='none';
        document.getElementById('try7').style.display='none'; 
        document.getElementById('trynew1').style.display='none';
      }

      function viewpendingemp(){
        document.getElementById('proselected').className='';
        document.getElementById('vctselected').className='';
        document.getElementById('vptselected').className='active';
        



        document.getElementById('trynew2').style.display='none';
        document.getElementById('trynew').style.display='block';
        document.getElementsByClassName('container')[0].style.display='none';
        document.getElementById('try').style.display='none';
        document.getElementById('try7').style.display='none';
        document.getElementById('trynew1').style.display='none'; 

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
  background-image: url("https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80");
  background-size: cover;
  padding-top: 10%;
  padding-bottom: 20%;

}

h2{
color: #32CD32;
font-weight: bold;
}

p{
color: #333;
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

h3{
  padding-top: 2%;
  color: #ffffff;
  font-family: sans-serif;
}




#employee-logo2{
  width: 100px;
  height: 100px;
  margin-left: 47%;
}





#employee-logo{
	width: 200px;
	height: 200px;
	margin-left: 25%;
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

#admin-logo{
	margin-left: 25%;
}

#new{
  margin-right: auto;
  margin-left: auto;

}


label{
	color: #ffffff;
}
	




    </style>


 </head>
 <body  onload="javascript:homepage()"  style="background-image:linear-gradient(to right, #355c7d, #6c5b7b, #c06c84);">
<div class="topnav">
  
    <img id="navlogo" src="imgs\images.jfif">
  
  <a href="#about" onclick="javascript:logout()">Logout</a>
<a href="#contact" id="vctselected" onclick="javascript:viewcomplete()">View completed tasks</a>
<a href="#news" id="vptselected" onclick="javascript:viewpendingemp()">View Pending tasks</a>
  <a href="#home" id="proselected" onclick="javascript:viewprofile()">View Profile</a>
  
  
  
</div>

 <img align="center" id="employee-logo2" src="https://cdn2.iconfinder.com/data/icons/employee-appraisal-filled-outline-1/64/individual_appraisal-appraisal-assessment-evaluate-review-test-512.png">


 
 <h1 align="center">Employee Performance Evaluation Portal</h1>
 <h2 align="center">Employee Dashboard</h2>
 <h2 align="center">Welcome
     <?php echo $_SESSION['eusername']  ?>
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


<div id="trynew2">
<div class="form-group">

    <br>
    <h3 align="center">Remainder</h3>
   
   <marquee behaviour="slide" direction="left" scrollamount="25"><h3>The following tasks are to be completed soon!!</h3></marquee>

    <?php

    
    $query="select TaskID,Task_name,Due_date_each_stage from tasks where (Due_date_each_stage=(select min(Due_date_each_stage) from tasks WHERE Due_date_each_stage IN (select Due_date_each_stage from tasks where EMPID=(select EmpID from employee where Username='".$_SESSION['eusername']."'))))";
     

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
             ?>
             
             

            <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>TaskID</strong> &emsp;&emsp;
    <?php echo $row['TaskID']?></label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Taskname</strong>&emsp;&emsp;
    <?php echo $row['Task_name']?></label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Due_date</strong>&emsp;&emsp;
    <?php echo $row['Due_date_each_stage']?></label>
  </div>
  
  

  
  
                            
                   
          <?php    }
              
    }
    else{

      $query1="select t.TaskID,t.Task_name,t.Due_date_each_stage from tasks t,employee e,task_employee_admin te where te.TaskID=t.TaskID AND te.EmpID=e.EmpID AND e.Username='".$_SESSION['eusername']."'";
       $query_run1=mysqli_query($con,$query1);
       if(mysqli_num_rows($query_run1)>0){
         while ($row=$query_run1->fetch_assoc()) {
               ?>


               <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>TaskID</strong> &emsp;&emsp;
    <?php echo $row['TaskID']?></label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Taskname</strong>&emsp;&emsp;
    <?php echo $row['Task_name']?></label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Due_date</strong>&emsp;&emsp;
    <?php echo $row['Due_date_each_stage']?></label>
  </div>
         
         <?php    
              
      
         }
       }


    }

   ?>


  
  
                  

  </div>
  
</div>






<form action="employeedashboard.php" method="post">
    <div id="try">
  <h3 align="center" style="color: #ffffff">VIEW PROFILE</h3>
  <br>

  <img id="employee-logo" src="https://cdn0.iconfinder.com/data/icons/business-collection-2/128/user_man-512.png">
  
    
  

  



<?php


    
    $query="select * from employee where Username='".$_SESSION['eusername']."'";

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
    <input type="text" name="empidr" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['EmpID']?>">
  </div>
  
  
                            
                   
          <?php    }
              
    }
   ?>

  <input type="submit" class="btn btn-success" value="Update Profile">
 

 
  
  

</div>
</form>

    <div id="trynew">
  <h3 align="center" style="color: #ffffff">PENDING TASKS</h3>
  <br>
  <img id="employee-logo1" src="https://cdn3.iconfinder.com/data/icons/seo-and-internet-marketing/70/1-10-512.png">
  
  <table id="new" align="center">
  <tr>
    <th>TaskID&emsp;</th>
    <th width="25%">Taskname&emsp;</th>
    <th>Duration&emsp;</th>
    <th>Stages&emsp;</th>
    <th>Due date of each stage&emsp;</th>
    <th>Task description&emsp;</th>
    <th></th>
</tr>


<?php


    
    $query="select t.TaskID,t.Task_name,t.Duration,t.Stages,t.Due_date_each_stage,t.Task_description from tasks t,employee e where t.EmpId=e.EmpID AND e.Username='".$_SESSION['eusername']."'";

    $query_run=mysqli_query($con,$query);

    
    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
                   
                   echo '<tr><td>' .$row["TaskID"] .'</td><td>' .$row["Task_name"].'</td><td>' .$row["Duration"].'</td><td>' .$row["Stages"].'</td><td>' .$row["Due_date_each_stage"].'</td><td>' .$row["Task_description"].'</td><td><button onclick="javascript:upload()" class="btn btn-info">Upload</button></td></tr>' ;
              }
              echo "</table>";
    }
   
//else{
  //echo "</table>";
//}
  ?>
<?php

$query1="select t.TaskID,t.Task_name,t.Duration,t.Stages,t.Due_date_each_stage,t.Task_description from tasks t,employee e,task_employee_admin te where te.TaskID=t.TaskID AND te.EmpID=e.EmpID AND e.Username='".$_SESSION['eusername']."'";

    $query_run1=mysqli_query($con,$query1);


if(mysqli_num_rows($query_run1)>0){
              
              while($row=$query_run1->fetch_assoc()){
                   
                   echo '<tr><td>' .$row["TaskID"] .'</td><td>' .$row["Task_name"].'</td><td>' .$row["Duration"].'</td><td>' .$row["Stages"].'</td><td>' .$row["Due_date_each_stage"].'</td><td>' .$row["Task_description"].'</td><td><button onclick="javascript:upload()" class="btn btn-info">Upload</button></td></tr>' ;
              }
              echo "</table>";
    }
   
else{
  echo "</table>";
}

?>  
   
</div>




<form action="employeedashboard.php"  method="post">
    <div id="try7">
  <h3 align="center">UPLOAD TASK INFORMATION</h3>
  <br>
  <img id="employee-logo" src="https://cdn3.iconfinder.com/data/icons/seo-and-internet-marketing/70/1-10-512.png">
 
  <div class="form-group">
    <br>
    <label for="formGroupExampleInput"><strong>TaskID</strong></label>
    <input name="taskidu" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your Username">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Task name</strong></label>
    <input type="text" name="tasknameu" class="form-control" id="formGroupExampleInput2" placeholder="Enter your password">
  </div>

   <div class="form-group">
    <label for="formGroupExampleInput2"><strong>EmpID</strong></label>
    <input type="text" name="empidu" class="form-control" id="formGroupExampleInput2" placeholder="Enter your password">
  </div>


  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Details to be entered</strong></label>
    <textarea  rows="10"  name="details" class="form-control" id="formGroupExampleInput2" placeholder="Enter your password">
  </textarea>
  </div>
  
<input type="submit" name="upload_submit" class="btn btn-success" value="Upload">
<br>
<br>
<input type="submit" name="finalize_submit" class="btn btn-success" value="Finalize">

  </div>
</form>



<?php  
  if(isset($_POST["upload_submit"])){
    $taskidu=$_POST['taskidu'];
    $tasknameu=$_POST['tasknameu'];
    $details=$_POST['details'];
    $empidu=$_POST['empidu'];
    
    
    
       $query="insert into taskinfo values('$empidu','$taskidu','$details')";
       $query_run=mysqli_query($con,$query);
       if($query_run){
         echo "<script type='text/javascript'>alert('Data uploaded successfully')</script";
       }
       else{
        echo "<script type='text/javascript'>alert('Error!')</script";
       }      
    

  }



?>


<?php  
  if(isset($_POST["finalize_submit"])){
    $taskidu=$_POST['taskidu'];
    $tasknameu=$_POST['tasknameu'];
    $empidu=$_POST['empidu'];
    
    
    
       $query="insert into completedtask values('$empidu','$taskidu','$tasknameu')";
       $query_run=mysqli_query($con,$query);
       $query1="delete from tasks where TaskID='$taskidu'";

       if($query_run){
         echo "<script type='text/javascript'>alert('Task updated as completed!')</script";
         $query_run1=mysqli_query($con,$query1);
       }
       else{
        echo "<script type='text/javascript'>alert('Error!')</script";
       } 


  }



?>






<div id="trynew1">
  <h3 align="center" style="color: #ffffff">COMPLETED TASKS</h3>
  <br>

  <img id="employee-logo1" src="https://cdn3.iconfinder.com/data/icons/seo-and-internet-marketing/70/1-10-512.png">
  <table id="new" align="center">
  <tr>
    <th>TaskID&emsp;</th>
    <th width="25%">Taskname&emsp;</th>
   </tr> 

<?php


    
    $query="select t.TaskID,t.TaskName from completedtask t,employee e where t.EmpId=e.EmpID AND e.Username='".$_SESSION['eusername']."'";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
              
              while($row=$query_run->fetch_assoc()){
                   
                   echo '<tr><td>' .$row["TaskID"] .'</td><td>' .$row["TaskName"].'</td></tr>';
              }
              echo "</table>";
    }

    else{
        echo "</table>";
    }
   


?>  
    
</div> 



<script type="text/javascript">

function setval(taskid,taskname){
    document.getElementsByName('taskidu')[0].value=taskid;
    document.getElementsByName('empidu')[0].value=document.getElementsByName('empidr')[0].value;
    document.getElementsByName('tasknameu')[0].value=taskname;
  }

  
var uploadbutton=document.getElementsByClassName('btn btn-info');
    for(var i=0;i<uploadbutton.length;i++){
        var button=uploadbutton[i];
        button.addEventListener('click',function(event){
    var buttonclicked=event.target;
    var row=buttonclicked.parentElement.parentElement;
    var taskid=row.cells[0].innerText;
    var taskname=row.cells[1].innerText;
   setval(taskid,taskname);
    

    
   

  })
  };

</script>











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