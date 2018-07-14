<?php
    session_start();
    session_destroy();
	echo "<script>alert('Successfully Logged out!!!')</script>";
    header("location:index.php");
?>