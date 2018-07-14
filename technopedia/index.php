<?php
session_start();
$bool=false; //starts the session
if(isset($_SESSION['email'])){ // checks if the user is logged in  
$bool=true;
   }
   else{
      $bool=false;
   }
?>
<html>
	<head>
		<title>TECHNOPEDIA</title>
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

					<div class="inner">

						<header>
							<h2>TECHNOPEDIA</h2>
						</header>
						<p > The environment providing free learning, 
						<br />
						around the world with evalution and hesisant free learning.
						<br />
						</p>
						<footer>
							<ul class="buttons vertical">
								<li><a href="aboutus.php" class="button fit scrolly">ABOUT US!</a></li>
							</ul>
						</footer>

					</div>
				
					
				</section>

			<!-- Main -->

<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="row"><br><br><br>
								<div class="4u 12u(narrower)">
                                    <?php if($bool)
											echo '<a href="livevideos.php">';
										  else
											 echo '<a href="login.php">' ;?>
									
									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3 style="color:black;"><b>live Streaming Video</b></h3>
										</header>
										<p style="color:black;">Connect live to the lecture and learn with more fun and interaction sessions.</p>
									</section>
									</a>
									

								</div>
								<div class="4u 12u(narrower)">
								<?php if($bool)
											echo '<a href="audiosession.php">';
										  else
											 echo '<a href="login.php">'; ?>
                             
									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3 style="color:black;"><b>Live Audio Session</b></h3>
										</header>
										<p style="color:black;">Hear the live interactive lecture and grasp more with easy learning sessions.</p>
									</section>
                                   </a>
								</div>
								<div class="4u 12u(narrower)">
								<?php if($bool)
											echo '<a href="postandquery.php">';
										  else
											 echo '<a href="login.php">'; ?>
                               
									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3 style="color:black;"><b>Post or Answer a Query</b></h3>
										</header>
										<p style="color:black;">Post a query which you feel doubt upon, and answer the query which you feel confident about.</p>
									</section>
                                   </a>
								</div>
							</div>
						</section>			

			
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