<?php
	require 'dbconfig/config.php';
	session_start();
	if(isset($_POST['login_btn']))
	{
		$username = $_POST['uname'];
		$password = $_POST['passwd'];
		$_SESSION['comuname']= $username;

		$query = "select * from company where cuname ='$username' and  cpasswd='$password' ";

		$queryres= mysqli_query($con,$query);

		if(mysqli_num_rows($queryres)>0)
		{
		//	echo '<script type="text/javascript"> alert("The username and password matched our database..")</script>';
			
			$query11 = "select cname from company where cuname ='$username' ";

			$queryres= mysqli_query($con,$query11);
			$row = mysqli_fetch_array($queryres);
			$temp = $row['cname'];
			$_SESSION['comname']= $temp;
			header('location:companypage.php');
		}
		else
		{
			echo '<script type="text/javascript"> alert("The username and password did not match our database")</script>';
		}

	}
?>




<!DOCTYPE html>
<html>
<head>
<title>$uper Jobs Portal</title>
   <link rel="stylesheet" type="text/css" href="cssfiles/design.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="cssfiles/style.css">
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


	<div class="main" id="main-wrapper" >
		<center><h2>Enter your Company credentials</h2>
		<img src="images/women.png" class="imageppt">
		</center>

		<form  method ="post" class="myform"><center>

			<label><b><br>Username: </b></label><br>
			<input name="uname" type="text" class="inputvalues" placeholder="Type username" required><br><br>

			<label><b>Password: </b></label><br>
			<input name="passwd" type="password" class="inputvalues" placeholder="Type Password"><br><br>

			<input name="login_btn" type="submit"  id ="signupbtn" value="Login" style="width:60%;" ><br><br>
			<a href="companyregister.php"><label><b>Not registered yet? Register Now </b></label><br></a><br>
		</center>
		</form>

	</div>
</div>

<div class="footer" style="background-color:#000AA2; color:white; font-family:'Ariel';"> </br>
 #77,7th block 3rd main road behind BDA COMPLEX,nagarabhavi bengaluru 560056 </br>
   Contact information: aliasing126@gmail.com <hr/>
  © Copyright 2019 www.Superjobsportal.com. All rights reserved. Developed by $uperTeam.
</p>
</div>

</body>
</html>
