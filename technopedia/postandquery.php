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
?>
<html>
	<head>
		<title>TECHNOPEDIA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="style/css/bootstrap.css" />
		
	</head>
	<body class="index">
	

	
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo" style="" ><a href="index.php" style="text-decoration:none; font-size:15px;">TECHNOPEDIA</a></h1>
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
							<h2>ASK YOUR DOUBTS HERE</h2>
						</header>
						<p> Clear all your doubts across the world. 
						<br />
						and rate their answer.
						<br />
						</p>

					</div>
				
					
				</section >
            <br><br>
			<!-- Main -->
            
			<section class="wrapper style1 container special" >
						<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Click here to ask your query</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ask your question</h4>
      </div>
      <div class="modal-body">
        <p>
		<form action="ques.php" method="POST">
		<input type="text" name="question" placeholder="Type your Question">
		<input type="submit" name="submit" value="submit" style="margin:10px;">		
		</form>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<br>

<br><br>

<!-- previous questions-->

<div class="container">
  <div class="row" >
   
     <?php
          
							    $sql = "SELECT * FROM ques;";
                                $result = mysqli_query($con,$sql);
                                $resultcheck = mysqli_num_rows($result);
								$i =0;

        if ($resultcheck>0) {
        	while ($row = mysqli_fetch_assoc($result)) {
				$i=$i+1;
				
        		?>
				
        		<div class="resultbox col-lg-3" style="text-align:justify;" >
				
        		<div style="border:1px solid black; text-align:justify; border-radius:5px; padding:5px;">
				<?php
        		echo  "<br> Ques_no: " .  $row['id'] . "<br> Question: " . $row['question'] . " <br> Email: " . $row['email'] . "<br>";
        		?>
				
				
				<!-- Trigger the modal with a button -->

<!--start of ans model-->
<br>
<form action="result.php" method="POST">							
<button type="submit" name="id" value='<?php echo $i;?>' style="background-color:green;" class="btn btn-primary" >Answers</button>				
</form>
<br>
<button type="button"   style="background-color:orange;"  class="btn btn-primary" data-toggle="modal" data-target="#myModala" onclick="setId(<?php echo $i?>)">Reply</button>
<script> 
		function setId(id)
		{
			document.getElementById('qno').value=id;
			document.getElementById('qno2').value=id;
		}
		
		</script>
<!-- Modal -->
<div id="myModala" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply the question</h4>
      </div>
      <div class="modal-body">
        <p>
		<form action="answer.php" method="POST">
	<h6 >Question number:</h6>
		<input type="text" id='qno' placeholder="Question No." disabled><br>
		<input type="hidden" name="qid" id='qno2' placeholder="Question No." >
		<input type="text" name="answer" placeholder="Type your Answer">
		
		<input type="submit" name="submit" value="submit" style="margin:10px;">		
		</form>
		
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
				
				</div>
        		
        		</div>
        		<?php
        	}
        }
						   

?>

</div>
</div>

  

<br><br><br><br>
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
            
			<script type="text/javascript" src="style\jquery\jquery-3.2.1.js"></script>
            <script type="text/javascript" src="style\js\bootstrap.js"></script>
	</body>
</html>