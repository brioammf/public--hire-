<?php
session_start();
			
			unset($_SESSION["EMAIL"]);
			
			echo "<script>alert('You are Logged out!!');location.href='index.php';</script>";
?>