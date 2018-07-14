<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$con=mysqli_connect("localhost","prakhar","12345678","project");
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$occupation = $_POST['occupation'];
	$specialization = $_POST['specialization'];
	$gender = $_POST['gender'];
	$nationality = $_POST['nationality'];
	$password = $_POST['password'];
	
	$sql = "insert into login_details values ('$firstname','$lastname','$email','$password','$dob','$occupation','$specialization','$gender ','$nationality')";

	$bool=true;
	$query=mysqli_query($con,"select * from login_details");
	while($row=mysqli_fetch_array($query))
	{
		$e_mail=$row['Email'];
		if($email==$e_mail)
		{
			$bool=false;
			echo '<script>alert("E-mail address already registered")</script>';
			header("location:login.php");
			break;
		}
	}
	
	
  if($bool)
  {
	 mysqli_query($con,$sql);
     echo '<script>alert("Successfully Registered")</script>';
	 header("location:login.php");
  }
  mysqli_close($con);
}
?>