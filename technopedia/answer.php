<?php
session_start();
$bool=false; //starts the session
if(isset($_SESSION['email'])){ // checks if the user is logged in  
$email = $_SESSION['email'];

$bool=true;
   }
   else{
      $bool=false;
   }
?>
<?php
if(isset($_POST['submit']))
{  $ans = $_POST['answer'];  
   $qid = $_POST['qid'];   
   $con=mysqli_connect("localhost","prakhar","12345678","project");
   $sqla = "INSERT INTO answer (answer,qid,email) VALUES ( '$ans','$qid','$email') ; ";   
   $query=mysqli_query($con,$sqla);
   
}
header('location:postandquery.php');
?>