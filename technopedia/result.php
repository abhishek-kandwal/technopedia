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
$qid=$_POST['id'];
?>
<html>
	<head>
		<title>Answers</title>
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
				<h1><b>Question : </b><?php echo $qid;?></h1>
               <div  style="text-align:justify; margin:0px 150px 0px 400px ;" >
               <?php
			   $sql = "SELECT * FROM answer where qid='$qid' ORDER BY id DESC;";
                                $result = mysqli_query($con,$sql);
                                $resultcheck = mysqli_num_rows($result);

			if ($resultcheck>0) {
        	while ($row = mysqli_fetch_assoc($result)) {
        		?>
        		<div class="resultbox col-lg-3" style="text-align:justify;" >
				
        		<div style="border:1px solid black; text-align:justify; border-radius:5px; padding:5px;">
				<?php
				
        		echo  "Answer: " . $row['answer'] . " <br> Email: " . $row['email'] . "<br>";
				echo '</div><br>';
			}}
			
				?>
	
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