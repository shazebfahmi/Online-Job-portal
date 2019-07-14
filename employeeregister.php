<?php
	require 'dbconfig/config.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Employee Company</title>
   <link rel="stylesheet" type="text/css" href="cssfiles/design.css" />
   <link rel="stylesheet" href="cssfiles/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

   <div class="navbar1" style="font-family:'Arial Rounded MT Bold'; ">
    <a>Helpline no:<i class="fa fa-fw fa-phone"></i> :+91 7892915411</a>
    <a>Like and subsribe to our channel on various Social media platforms</a>
           <a  target="_blank" href="https://twitter.com/jobsportal4/"><i class="fa fa-fw fa-twitter"></i></a>       <a  target="_blank" href=" https://www.instagram.com/accounts/signup/"><i class="fa fa-fw fa-instagram"></i></a>              <a target="_blank" href="https://www.youtube.com/channel/UCvPA500SDHuyzN3AaYDbCQw?disable_polymer=true" ><i class="fa fa-fw fa-youtube"></i></a>       <a  target="_blank" href="https://api.whatsapp.com/send?phone=917892919657&text=&source=&data="><i class="fa fa-fw fa-whatsapp"></i></a>  
       

  </div>
<div class="header" style="background-color:#e6f0ff;">
 <h1 style="font-family:'Algerian';" >$UPER JOBS PORTAL</h1>
  <p>#THE DEMOCRATIC JOB PORTAL</p>
</div>

<div class="navbar">
  <a href="home.php">HOME <i class="fa fa-home"></i></a>
<div class="dropdown">
  <button class="dropbtn">CARRIER INFO
  <i class="fa fa-paper-plane"></i>
</button>
  <div class="dropdown-content">
  <a href="jobsearchstratergy.php">Job Search Stratergy </a>
  <a href="interviewtips.php">Interview Tips </a>
  <a href="resumeletter.php">Resume and Cover Lover </a>
  <a href="salarynegotiation.php">Salary Negotiation </a>
  <a href="carriermanagement.php">Carrier Management  </a>
</div>
</div>

<a href="faq.php">FAQ's <i class="fa fa-language"></i></a>
<a href="jobs.php">JOBS <i class="fa fa-handshake-o"></i></a>
<!--  <a href="#" class="right">Login <i class="fa fa-user"></i></a> -->


  <div class="dropdown">
    <button class="dropbtn">LOGIN
    <i class="fa fa-user"></i>
  </button>
    <div class="dropdown-content">
    <a href="adminloginpage.php">Admin Login <i class="fa fa-user-secret"></i></a>
    <a href="companyloginpage.php">Company Login   <i class="fa fa-building"></i></a>
    <a href="employeeloginpage.php">Employee Login   <i class="fa fa-users"></i></a>
  </div>
</div>

</div>

<div class="row">
	<div class="side" style="font-family:'Bauhaus 93'; background-color:#A0AEF7; " >
		<h2>ABOUT US</h2>
    <h5 style="font-family:'Arial Rounded MT Bold';" ><i class="fa fa-angle-double-right"></i>We have initiated this platform to avoid the job seekers from being exploited while seeking job. The website even creates an end-to-end contact between employee and employers. Thus avoiding overhead for companies to find skilled skulls.</h5>
    <h5 style="font-family:'Arial Rounded MT Bold';" ><i class="fa fa-angle-double-right"></i>Currently we are holding $1.2 billion shares with funding from LinkedIn and Internshala. </h5>
      <h5 style="font-family:'Arial Rounded MT Bold';"  ><i class="fa fa-angle-double-right"></i>Currently we are in 14th place as a genuine Job platform. However we are looking to be in top 5 within 2021.</h5>
      <h2>OUR UPCOMING SERVICES</h2>
      <ul>
        <li>Technical tutorial website</li>
        <li>Video lectures for cracking Interviews</li>
        <li>Coding E-books </li>
        <li>Aptitude questions </li>
        <li>Each company's previous interview model question papers</li>
      </ul>

      <img src="images/jobs.jpg" height="200" width="332">
      <ul>
        <li><a href="ouradmin.php">Our Admins</a></li>
        <a href="designteam.php"><li>Our Design Team</li></a>
        <a href="privacy.php"><li>Privacy Policy</li></a>
        <a href="investors.php"><li>Investors </li></a>
      </ul>
	</div>

	<div class="main" id="main-wrapper">
		<center>
			<h2>Employee Register Form</h2>
			<img src="images/women.png" class="imageppt"/>
		</center>
		<form class="myform" action ="employeeregister.php" method ="post"><center>

			<label><b><br><br>Employee Name: <br></b></label><br>
			<input name="ename" type="text" class="inputvalues" placeholder="Type your Name" required/><br><br>

			<label><b>Date Of Birth: </b></label><br>
			<input name="dob" type="text" class="inputvalues" placeholder="dd/mm/yyyy" required/><br><br>

			<label><b>Email Id: </b></label><br>
			<input name="mail" type="email" class="inputvalues" placeholder="zzz@yyyy.com" required/><br><br>

			<label><b>Employee Type: </b></label><br>
			<select name="eetype">
				<option value="fresher">Fresher</option>
				<option value="experienced">Experienced</option>
            </select><br><br>

			<label><b>Sex: </b></label><br>
			<select name="esex">
				<option value="male">Male</option>
				<option value="female">Female</option>
            </select><br><br>

			<label><b>10th class pass %: </b></label><br>
			<input name="ten" type="text" class="inputvalues" placeholder="eg: '78.7' for 78.7% " required/><br><br>

			<label><b>12th class pass %: </b></label><br>
			<input name="twelve" type="text" class="inputvalues" placeholder="eg: '80.33' for 80.33% " required/><br><br>

			<label><b>Graduation CGPA: </b></label><br>
			<input name="cgpa" type="text" class="inputvalues" placeholder="eg: '4.66' for 4.66 cgpa " required/><br><br>

			<label><b>Skill acquired: </b></label><br><br></center>
			<pre>                        <input type="radio"  name="sktype" value="BackEnd Engineer">BackEnd Engineer<br>
			<input type="radio"  name="sktype" value="Data Scientist">Data Scientist<br>
			<input type="radio"  name="sktype" value="Full Stack Developer">Full Stack Developer<br>
			<input type="radio"  name="sktype" value="FrontEnd Engineer">FrontEnd Engineer<br>
			<input type="radio"  name="sktype" value="HR Manager">HR Manager<br>
			<input type="radio"  name="sktype" value="Q/A TEST Engineer">Q/A TEST Engineer<br>
			<input type="radio"  name="sktype" value="Software  Engineer">Software  Engineer<br>
			<input type="radio"  name="sktype" value="Team Lead">Team Lead<br> </pre>
			
			<center>
			

			<label><b>Hobbies: </b></label><br>
			<input name="hobbies" type="text" class="inputvalues" placeholder="Enter the list of your hobbies" /><br><br>

			<label><b>Username: </b></label><br>
			<input name="username" type="text" class="inputvalues" placeholder="Choose username" required/><br><br>

			<label><b>Password: </b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Choose Password" required/><br><br>

			<label><b>Confirm Password: </b></label><br>
			<input name="cpassword" type="password" class="inputvalues" placeholder="Re Type Password" required/><br><br>

			<input name="submit_btn" type="submit" id ="signupbtn" value="Sign Up" style="width:40%;"   /><br><br>
			<a href="companyloginpage.php"><input type="button" id ="backbtn" value="back to login " style="border-radius:4px; border: 2px  solid #3A4045;"  /></a><br>
		
		</center>
		</form>
	</div>

	<?php

		if(isset($_POST['submit_btn']))
		{

			$ename = $_POST['ename'];
			$dob = $_POST['dob'];
			$mail = $_POST['mail'];
			$eetype = $_POST['eetype'];
			$esex = $_POST['esex'];
			$ten = $_POST['ten'];
			$twelve = $_POST['twelve'];
			$cgpa = $_POST['cgpa'];
			$hobbies = $_POST['hobbies'];
			$sktype = $_POST['sktype'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];

			if($password==$cpassword)
			{


				$query2= "insert into employee values(NULL,'$username','$password','$ename','$dob','$mail','$eetype','$esex','$ten','$twelve','$cgpa','$hobbies','$sktype')";

				$query_run2 = mysqli_query($con,$query2);

				if($query_run2)
				{
					echo '<script type="text/javascript"> alert("   User registered successfully, now Login with the same credentials.");</script>';

				}
				else
				{
					echo '<script type="text/javascript"> alert("Error while running the query, to add to databse");</script>';
				}

			}
			else
			{
				echo'<script type="text/javascript"> alert("Password does\'nt match")</script>';
			}

		}


	?>


</div>

<div class="footer" style="background-color:#000AA2; color:white; font-family:'Ariel';"></br>
 #77,7th block 3rd main road behind BDA COMPLEX,nagarabhavi bengaluru 560056 </br>
   Contact information: aliasing126@gmail.com <hr/>
  © Copyright 2019 www.Superjobsportal.com. All rights reserved. Developed by $uperTeam.
</p>
</div>

</body>
</html>
