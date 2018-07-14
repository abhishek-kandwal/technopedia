<?php
session_start();
$bool=false; //starts the session
if(isset($_SESSION['email'])){ // checks if the user is logged in  
$bool=true;
   }
   else{
      $bool=false;
   }
   $con=mysqli_connect("localhost","prakhar","12345678","project");
$email=$_SESSION['email'];
$query=mysqli_query($con,"select * from login_details where Email='$email'");
$row=mysqli_fetch_array($query);
$firstname=$row['Firstname'];
$lastname=$row['Lastname'];
$dob=$row['DOB'];
$occupation=$row['Occupation'];
$gender=$row['gender'];
$nationality=$row['nationality'];
$specialization=$row['specialization'];?>
<html>
	<head>
		<title>Profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.php">TECHNOPEDIA</a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.php">Home</a></li>
							<li class="current">
								<?php if($bool)
										echo '<a href="profile.php">Profile</a>';
									?>
								
							</li>
							
							<?php if($bool)
									echo '<li class="current"><a href="logout.php">Logout</a></li>';
								   else
									 echo '<li class="current"><a href="login.php">Login</a></li>';  ?>							
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
				
               <div  style="text-align:justify; margin:0px 150px 0px 400px ;" >
               <div ><h1><b>First Name: </b><?php echo $firstname ?></h1></div>
			   <div><h1><b>Last Name: </b><?php echo $lastname ?></h1></div>
			   <div><h1><b>Email: </b><?php echo $email ?></h1></div>
			   <div><h1><b>DOB: </b><?php echo $dob ?></h1></div>
			   <div><h1><b>Occupation: </b><?php echo $occupation ?></h1></div>
			   <div><h1><b>Specialization: </b><?php echo $specialization  ?></h1></div>
			   <div><h1><b>Gender: </b><?php echo $gender ?></h1></div>
			   <div><h1><b>Nationality: </b><?php echo $nationality  ?></h1></div>
			    </div>
			  
			  
			   
				
					
				</section>

			<!-- Main -->
				
			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="https://twitter.com/technopediaInd" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/technopediaInd/" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://plus.google.com/116713526825573327800" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="https://www.github.com/technopediaInd/" class="icon circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="https://dribbble.com/technopediaInd" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			
			<script src="assets/js/main.js"></script>

	</body>
</html>