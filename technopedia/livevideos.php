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
		<script>
		function changesrc(ch)
		{
		
			switch(ch)
			{
				case 1:document.getElementById("iframe").src="//iframe.dacast.com/b/106163/c/462982"; break;
				case 2:document.getElementById("iframe").src="//iframe.dacast.com/b/106148/c/462983";break;
				case 3:document.getElementById("iframe").src="//iframe.dacast.com/b/106163/c/462982";break;
				case 4:document.getElementById("iframe").src="//iframe.dacast.com/b/106148/c/462983";break;
			}
		}
		</script>
		
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
			    
				<section id="banner" style="Background-color:#ffffff; text-color:#ffffff;">
				<h1 ><b style="background-color:#AA1B0D; padding:5px;border-radius:5px;">Streaming Live Videos</b></h1>
				<a onClick="changesrc(1)" style="border:1px solid black; border-radius:5px; background-color:#766B76;margin:10px;padding:5px;color:white;">Channel 1</a>
				<a onclick="changesrc(2)" style="border:1px solid black; border-radius:5px; background-color:#766B76;margin:10px;padding:5px;color:white;">Channel 2</a>
				<a onclick="changesrc(3)" style="border:1px solid black; border-radius:5px; background-color:#766B76;margin:10px;padding:5px;color:white;">Channel 3</a>
				<a onclick="changesrc(4)" style="border:1px solid black; border-radius:5px; background-color:#766B76;margin:10px;padding:5px;color:white;">Channel 4</a>
				<br><br>
				
				
<iframe id="iframe" src="//iframe.dacast.com/b/106163/c/462982" width="590" height="431" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>					
<br>
<div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com" >Comment Form</a> is loading comments...</div>
                <script type="text/javascript" id="hcb"> /*<!--*/ if (!window.hcb_user) { hcb_user = {}; } (function () { var s = document.createElement("script"), l = hcb_user.PAGE || ("" + window.location).replace(/'/g, "%27"), h = "//www.htmlcommentbox.com"; s.setAttribute("type", "text/javascript"); s.setAttribute("src", h + "/jread?page=" + encodeURIComponent(l).replace("+", "%2B") + "&opts=16862&num=10&ts=1518877195195"); if (typeof s != "undefined") document.getElementsByTagName("head")[0].appendChild(s); })(); /*-->*/ </script>

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