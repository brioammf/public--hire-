<?php
session_start();
include "config.php";
if(isset($_POST["sub"]))	  {
      $id = $_POST['id'];
      $phonenumber = $_POST['phonenumber'];
      $date = $_POST['date'];
      $passengers = $_POST['passengers'];
      $book = $_POST['book'];
		  $result = mysqli_query($conn,"FROM `login page` WHERE id='$id'"); 
		  
		  if($member_check ==0)
		  {
			  	  
			  $query = mysqli_query($conn,"INSERT INTO `home`((`id`, `phonenumber`, `date`, `passengers`, `book`)) VALUES('$id','$phonenumber','$date','$passengers','$book')") 
				  ;
								  
					  echo "<script>alert('Memeber Booked successful!!');location.href='index.php';</script>";
				  }else{
            echo "<script>alert('The member has already booked!!');</script>";

          }
		  }
		
		 
?>
<!doctype >

<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewpoint" content="width=device width, initial scale=1.0">
  <link rel="stylesheet" type="text/css" href="brian.CSS">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>


  <title>Matwana Hire</title>
</head>
<body>

  <header>
  <nav class="nav">
    <div class="nav__logo">

    
      
      <ul class="nav__links">
        
        <li class="link"><a href="#home">Home</a></li>
        <li class="link"><a href="#Matwana">About</a></li>
        <li class="link"><a href="#Booking">Booking</a></li>
        <li class="link"><a href="#Contact">Contact</a></li>
         <li><button class="primary__btn" name="button">Book Now</button></li>
      </ul>
  </nav> 
  </header>
  
 <header class="section__container header__container">
    <div class="header__image__container">
     <h1>Enjoy Your Ride</h1>
      <p>Book Nganya at the Lowest Price</p>
      <div class="booking__container">
         <form action="" method="POST">
         
          <div class="form__group"> 
            <div class="inupt__group">
              <input type="number"name="phonenumber" value="<?php echo"$phonenumber"?>";>  
              <p>Enter your phone number</p>
          </div>
          
           </div>
           <div class="form__group">
            <input type="date" id="booking-date"value="<?php echo $date;?>">  
            <p>Book a date</p>
           </div>
           <div class="form__group">
            <div class="inupt__group">
            <input type="number"name="passengers"value="<?php "echo $passengers";?>">   
            <P>How many passengers</P> 
</div>
          
          
          <button class="primary___btn" value="<?php echo"$book";?>" name="update">Book Now</button>
      </div>

    </div>
    
  </header>
  <br><br>
  <section class="section__container popular__container">
  <h2 class="section__header">Available Nganyas</h2>
  <div class="image-container">
  <div class="image-row top-row">
    <img src="boombox.jpg" alt="Image 1">
    <img src="genesis.jpg" alt="Image 2">
    <img src="oppsite.jpg" alt="Image 3">
  </div>
  <h2 class="section__header">  Available Sacco</h2>
  <div class="image-row bottom-row">
    <img src="Easy Coach.jpg" alt="Image 4"width="">
    <img src="2nk.jpg" alt="Image 5" width="900px"height="900px">
    <img src="supermetro.jpg" alt="Image 6" width="">
  </div>
</div>
</section>
<section class="client">
  <div class="section__container client__container">
    <h2 class="section__header">What our Client Say</h2>
    <div class="client__grid">
      <div class="client__card">
        <img src="kevin.jpeg" alt="">
        <p>The booking process was easy, and the confirmation was instant. I highly recommend Matw for nganya bookings.

        </p>
      </div>
      <div class="client__card">
        <img src="mbinda.jpeg" alt="" class="">
        <br><br><br><br>
        <p>The website provided detailed information about the Vehicle,which helped me to make an informed decision.</p>
    </div>
    <div class="client__card">
      <img src="brian2.jpeg" alt="" class="">
      <p>I was able to book within few minutes,and the website exceeded my expectations. I appreciate Matwana effiency and reliablity.</p>
  </div>
</section>
<section class="section__container">
  <div class="reward__container">
    <p>100+ discount codes</p>
    <h4>Join rewards and discover amazing discounts on your booking</h4>
    <button class="reward__btn">Book Now </button>
  </div>
</section>
<footer class="footer">
  <div class="section__container footer__container">
    <div class="footer__col">
      <h3 id="#about">Matwana</h3>
      <p>
        Matwana is a premier Public Vehicle Booking Website That Offers a Seamless and 
        convenient way to find to book.
      </p>
      <P>
        With a user-friendly interface and a vast selection of vehicles,
        Matwana aims to provide a stress-free experience for travelers
        seeking adventure.
      </P>
    </div>
    <div class="footer__col">
      <h4>Contact</h4>
      <a href="https://www.instagram.com/?hl=en"><img src="instagram.png"></a>
      <a href="https://twitter.com/"><img src="x.jpg"></a>
      <a href="https://www.facebook.com/"><img src="facebook.png"></a>
    </div>
    <div class="footer__col">
      <h4> Legal</h4>
      <p>Legal</p>
      <p>FAQS</p>
      <p>Terms & Conditions</p>
      <p>Privacy Policy</p>
     
    
  </div>
  <div class="footer__col">
    <h4>Resources</h4>
    <p>Resources</p>
    <p>Social Media</p>
    <p>Help Center</p>
    <p>Partnerships</p>
    </div>
    </div>
    <div class="footer__bar">
      <p>Copyright © 2023 Web Design Brian Komo. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
