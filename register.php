<?php
session_start();
include "config.php";
if(isset($_POST["sub"]))
	  {
		  $email = $_POST["email"];
		  $username = $_POST["username"];
		  $pass = md5($_POST["pass"]);	  
		  
		  $result = mysqli_query($conn,"SELECT * FROM `login page' WHERE id='$id'") ;
		  $member_check = mysqli_num_rows($result);
		  
		  if($member_check ==0)
		  {
			  	  
			  $query = mysqli_query($conn,"INSERT INTO `login page`  VALUES(0,'$firstname','$lastname','$phonenumber','$password')")  
				  ;
								  
					  echo "<script>alert('Memeber registration successful!!');location.href='index.php';</script>";
				  }else{
            echo "<script>alert('The member already exists!!');</script>";

          }
		  }
		
		 
?>
