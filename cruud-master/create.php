<?php 

include "config.php";

  if (isset($_POST['submit']))
    
    $phonenumber = $_POST['phonenumber'];

    $place = $_POST[ 'place'];

    $date = $_POST['date'];

    $passengers = $_POST['passengers'];

   
    
   $sql= "INSERT INTO `new`(`id`, `phonenumber`, `place`, `date`, `passengers`) VALUES ($phonenumber','$place','$date',$passengers)";

    $sql = "INSERT INTO `new`(` `phonenumber`, `place`, `date`) VALUES ($phonenumber','$place','$date')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  ?>


