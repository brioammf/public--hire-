
<?php

session_start();
include "config.php";
if(isset($_POST["sub"]))
	  {
      $id = $_POST['id'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $phonenumber = $_POST['phonenumber'];
      $password = $_POST['password'];
		  $result = mysqli_query($conn,"FROM `login page` WHERE id='$id'"); 
		  
		  if($member_check ==0)
		  {
			  	  
			  $query = mysqli_query($conn,"INSERT INTO `login page` VALUES(0,'$firstname','$lastname','$phonenumber','$password')") 
				  ;
								  
					  echo "<script>alert('Memeber registration successful!!');location.href='index.php';</script>";
				  }else{
            echo "<script>alert('The member already exists!!');</script>";

          }
		  }
		
		 
?>

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width,
    initial-scale=1.0">
    <title>Login form| Codehal</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <div class="wrapper">
      <form action="loginpage.php" method="post">
        <h1>Login</h1>
        <div class="input-box" >
          <input type="text" placeholder="FirstName" requiredvalue="<?php echo $firstname;?>">
          
        </div>
        <div class="input-box">
          <input type="text" placeholder="LastName"requiredvalue="<?php echo $lastname;?>">
        </div>
        <div class="input-box" >
          <input type="text" placeholder="Phonenumber" requiredvalue="<?php echo $phonenumber;?>">
         
        </div>

        
          <div class="input-box" >
            <input type="Password" placeholder="Password" requiredvalue="<?php echo $password;?>">
       
          </div>

        <div class="remember-forgot">
          <label><input type="checkbox">Remember me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" class="btn" value="Login">Login</button value="<?php echo"y0u have login in"?>">
       
      </form>
    </div>
  </body>
</html>
</html>