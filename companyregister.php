<?php
	require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Register Company</title>
   <link rel="stylesheet" type="text/css" href="cssfiles/design.css" />
   <link rel="stylesheet" href="cssfiles/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

   <div class="navbar1" style="font-family:'Arial Rounded MT Bold'; ">
    <a>Helpline no:<i class="fa fa-fw fa-phone"></i> :+91 7892915411</a>
    <a>Like and subsribe to our channel on various Social media platforms</a>
     
	<a  target="_blank" href="https://twitter.com/jobsportal4/"><i class="fa fa-fw fa-twitter"></i></a>       
	<a  target="_blank" href=" https://www.instagram.com/accounts/signup/"><i class="fa fa-fw fa-instagram"></i></a>   
	      
	<a target="_blank" href="https://www.youtube.com/channel/UCvPA500SDHuyzN3AaYDbCQw?disable_polymer=true" ><i class="fa fa-fw fa-youtube"></i></a> 
	<a  target="_blank" href="https://api.whatsapp.com/send?phone=917892919657&text=&source=&data="><i class="fa fa-fw fa-whatsapp"></i></a> 

      
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
			<h2>Company Register Form</h2>
			<img src="images/women.png" class="imageppt"/>
		</center>
		<form class="myform" action ="companyregister.php" method ="post"><center>

			<label><b><br><br>Company Name: </b></label><br>
			<input name="cname" type="text" class="inputvalues" placeholder="Type Comapany Name" required/><br><br>

			<label><b>Headquarter: </b></label><br>
			<input name="headquarter" type="text" class="inputvalues" placeholder="Headquarter city" required/><br><br>


			<label><b>Company Type: </b></label><br><br>
			<select name="cctype" id="signupbtn2" >
				<option value="Startup">Startup</option>
				<option value="MNC">MNC</option>
            </select><br><br>

			<label><b>Email ID: </b></label><br>
			<input name="emailid" type="email" class="inputvalues" placeholder="Mail ID" required/><br><br>

			<label><b>Username: </b></label><br>
			<input name="username" type="text" class="inputvalues" placeholder="Type username" required/><br><br>

			<label><b>Password: </b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Type Password" required/><br><br>

			<label><b>Confirm Password: </b></label><br>
			<input name="cpassword" type="password" class="inputvalues" placeholder="Re Type Password" required/><br><br>

			<input name="submit_btn" type="submit" id ="signupbtn" value="Sign Up" style="width:50%;"/><br><br>
			<a href="companyloginpage.php"><input type="button" id ="signupbtn" value="Back to Login " style="width:30%;" /></a><br><br><br>
			
		</center>
		</form>

		<?php

		if(isset($_POST['submit_btn']))
		{
			echo'<script type="text/javascript"> alert("submit button clicked")</script>';
			$cname = $_POST['cname'];
			$headquarter = $_POST['headquarter'];
			$cctype = $_POST['cctype'];
			$emailid = $_POST['emailid'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];

			if($password==$cpassword)
			{


				$query2= "insert into temp_comp values('$username','$password','$cname','$headquarter','$cctype','$emailid')";
				$query_run2 = mysqli_query($con,$query2);

				if($query_run2)
				{
					echo '<script type="text/javascript"> alert("Congratulations, Your company is under the process of verification.");</script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error while running the query, to add to temporary databse");</script>';
				}

			}
			else
			{
				echo'<script type="text/javascript"> alert("Password doesnt match")</script>';
			}

		}


		?>



	</div>
</div>

<div class="footer" style="background-color:#000AA2; color:white; font-family:'Ariel';"></br>
<p>Posted by:Admin@$uperTeam </br>
 #77,7th block 3rd main road behind BDA COMPLEX,nagarabhavi bengaluru 560056 </br>
   Contact information: aliasing126@gmail.com <hr/>
  © Copyright 2019 www.Superjobsportal.com. All rights reserved. Developed by $uperTeam.
</p>
</div>

</body>
</html>
