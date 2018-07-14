
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>

</style>
  
 
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="assets/css/main.css" />
  
</head>

<body  style="background-image: url('pic03.jpg');background-repeat: no-repeat;background-size: cover; ">

  <div class="login-page" >
  <div class="form" style="background-color:#ffffff;">
    <A href="index.php" style="text-decoration:none;">
	
	<h2 style="color:blue">TECHNOPEDIA<h2></a> <form class="register-form" name="myform" method="POST" action="register.php" onsubmit="return validateform()" >
      <input type="text" placeholder="First Name" name="firstname" required="required" size="10" pattern="[A-Za-z]{3,10}"/>
	  <input type="text" placeholder="Last Name" name="lastname" required="required" size="10" pattern="[A-Za-z]{3,10}"/>
      
      <input type="text" placeholder="Email Address" name="email" required="required" size="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
	 
	  <input type="password" placeholder="Password" name="password" required="required" size="30" />
      
	  <button style="background-color:#40363B;">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="POST" action="login.php" >
      <input type="text" placeholder="Email" name="email" required="required" size="50"/>
      <input type="password" placeholder="password" name="password" required="required" size="30"/>
      <button style="background-color:#40363B;">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>

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


</body>

</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	session_start();
	$con=mysqli_connect("localhost","prakhar","12345678","project");
	$email = $_POST['email'];
	$password = $_POST['password'];
	$bool=true;
	$query=mysqli_query($con,"select * from login_details");
		    $u_name = $firstname;
			$u_last = $lastname;
			$U_email = $email;
	while($row=mysqli_fetch_array($query))
	{
		$e_mail=$row['Email'];
		$pwd=$row['Password'];
		if($email==$e_mail && $password==$pwd)
		{
			$bool=false;
			$_SESSION['email'] = $email;
		    header("location:index.php");
		}else
		{
			//header("location:login.php");
		}
	}
	
	
  if($bool)
  {
     echo '<script>alert("E-mail or password is incorrect")</script>';
  }
  mysqli_close($con);
}
?>

