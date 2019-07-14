<?php
	require 'dbconfig/config.php';
	session_start();
	
?>

<!DOCTYPE html>
<html>
<head>
<head>
<title>$uper Job Portal</title>
   <link rel="stylesheet" type="text/css" href="cssfiles/design.css" />
   <link rel="stylesheet" type="text/css" href="cssfiles/style.css" />
    <!--<link rel="stylesheet" type="text/css" href="faq.css" /> -->
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
  <div class="main">
    <div class="support">
      <center>
           <h2 "color:#99ff66">FIND YOUR NEXT JOB HERE</h2><span  style="font-family:Harlow Solid Italic;	">(Kindly Login to apply) </span> <br/><br/>
		   
           <form action ="jobs.php" method ="post" class="myform" style="width:800px;">
		   
           <br><p> I  Am Looking For  <select name="work" id="signupbtn2">
						<option value="any">---Any---</option>
                      <option value="BackEnd Engineer">BackEnd Engineer</option>
                      <option value="Data Scientist">Data Scientist</option>
                      <option value="Full Stack Developer">Full Stack Developer</option>
                      <option value="FrontEnd Engineer">FrontEnd Engineer</option>
                      <option value="HR Manager">HR Manager</option>
                      <option value="Q/A TEST Engineer">Q/A TEST Engineer</option>
                      <option value="Software  Engineer">Software  Engineer</option>
                      <option value="Team Lead">Team Lead</option>
				</select>
                roles <br/><br/> In <select name="place"  id="signupbtn2"  >
							<option value="any">---Any---</option>
                             <option value="Bengaluru">Bengaluru</option>
                             <option value="Chennai">Chennai</option>
                             <option value="Noida">Noida</option>
                             <option value="Pune">Pune</option>
                             <option value="Ghuwati">Ghuwati</option>
                             <option value="Mumbai">Mumbai</option>
                             <option value="Cochin">Cochin</option>
                             <option value="Ahamadabad">Ahamadabad</option>
                     </select></p>
					 <h4> Note: Kindly select atleast one, from the above fields</h4>
            <br/>
          <input name="login_btn" type="submit"  id ="signupbtn" value="Search" style="width:45%;"  ><br/><br/><br/><br/>
		  
         <?php
					if(isset($_POST['login_btn']))
						{
							
							$work = $_POST['work'];
							$place = $_POST['place'];
							
							if($work == 'any')
							{
								$query1 = "select * from job where location='$place'  ";
							}
							else if($place == 'any')
							{
								$query1 = "select * from job where type='$work' ";
							}
							else
								$query1 = "select * from job where type='$work' and location='$place'  ";

							$res = mysqli_query($con,$query1);
							
							echo '<h4> '.mysqli_num_rows($res).' Job(s) found.  </h4>';
							if(mysqli_num_rows($res))
							{
								echo '<table id="table1" width="80%"  border="1px"  cellpadding="5px" cellspacing="5px" bgcolor="pink" style="border-radius:10px;" >';

								echo "<tr>
											<th><h3>Job ID</h3></th>
											<th><h3>Company Name</h3></th>
											<th><h3>Job Type</h3></th>
											<th><h3>Location</h3></th>
											<th><h3>CTC</h3></th>
											<th><center><h3>Years of Experience</h3></center></th>
									</tr>";

								while($row = mysqli_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>" . $row['jid'] . "</td>";

									$temp = $row['compid'];
									$quer="select  cname from company where cid='$temp'";
									$ress1 = mysqli_query($con,$quer);
									if($ress1)
									{
										$row1 = mysqli_fetch_array($ress1);
										$comname = $row1['cname'];
									}

									echo "<td>" . $comname . "</td>";
									echo "<td>" . $row['type'] . "</td>";
									echo "<td>" . $row['location'] . "</td>";
									echo "<td>" . $row['ctc'] . "</td>";
									echo "<td><center>" . $row['yoe'] . "</center></td>";
	
									echo "</tr>";
								}
								echo "</table> <br><br>";
							}
							else
							{
								echo '<script type="text/javascript"> alert("No relevent jobs found.");</script> ';
							}

						}

					?>



          </form>
      </center>
    </div>
  </div>
</div>


<div class="footer" style="background-color:#000AA2; color:white; font-family:'Ariel';"></br>
 #77,7th block 3rd main road behind BDA COMPLEX,nagarabhavi bengaluru 560056 </br>
   Contact information: aliasing126@gmail.com <hr/>
  � Copyright 2019 www.Superjobsportal.com. All rights reserved. Developed by $uperTeam.
</p>
</div>

</body>
</html>
