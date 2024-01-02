<!-- IT22198518 WALD Semasingha-->
<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="INSERT INTO `signup`(`fname`, `lname`, `email`, `password`) VALUES ('$fname','$lname','$email','$password')";
        
        
        $result = $conn->query($sql);

        if($result == TRUE) {
            echo "&nbsp&nbsp&nbspRegistration successfull";
        }else{
            echo "ERROR:". $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>

<html>
	<head>
		<link rel="stylesheet" href=".\CSS\signUp.css">
		<link rel="icon" type="image/x-icon" href=".\Resources\ico.png">
		<title>Genius 24/7 Home</title>
	</head>
	<body>
        <div id="time" class="main"style="font-size: 20px;"></div>
	
	
	<div class="animated-word">
		<div class="letter">G</div>&nbsp
		<div class="letter">E</div>&nbsp
		<div class="letter">N</div>&nbsp
		<div class="letter">I</div>&nbsp
		<div class="letter">U</div>&nbsp
		<div class="letter">S</div>&nbsp&nbsp
		<div class="letter">2</div>&nbsp
		<div class="letter">4</div>&nbsp
		<div class="letter">/</div>&nbsp
		<div class="letter">7</div>
	</div><br>
	<br>
	<form method="post">
		<div class="frm">
			<label for="fname" class="txts">First name:</label><br>
			<input type="text" id="fname" name="fname" placeholder="Enter First Name" autocomplete="off" required><br>
		</div>
		<div class="frm">
			<label for="lname" class="txts">Last name:</label><br>
			<input type="text" id="lname" name="lname" placeholder="Enter Last Name" autocomplete="off" required>
	    </div>
		<div class="frm">
			<label for="email" class="txts">Email:</label><br>
			<input type="email" id="email" name="email" placeholder="Enter e-mail" autocomplete="off" required>
	    </div>
		<div class="frm">
			<label for="password" class="txts">Password :</label><br>
			<input type="password" id="password" name="password" placeholder="Enter Password" autocomplete="off" required>
	    </div><br>
        <button class="submit" name="submit">SignUp</button>
	</form>
	<button onclick="window.location.href='index.html'" class="home1">Return Home</button><br><br>
	<footer class="footer-distributed">

      <div class="footer-left">

        <h3><button onclick="window.location.href='index.html'" class="indexbtn">GENIUS 24/7</a></h3>

        <p class="footer-links">
          <a href="index.html" class="link-1">Home</a>
          
          <a href="serviceType.html" class="link-1">Service Types</a>
        
          <a href="contactUs.php" class="link-1">Contact Us</a>
        
          <a href="aboutUs.html" class="link-1">About Us</a>
          
          <a href="faq.php" class="link-1">FAQ</a>
          
        </p>

        <p class="footer-company-name">Copyrights Genius 24/7 2023</p>
      </div>

      <div class="footer-center">

        <div>
          <i></i>
          <p><span>Malambe</span>Colombo</p>
        </div>

        <div>
          <i></i>
          <p>+94-11-000-1111</p>
        </div>

        <div>
          <i></i>
          <p><a href="#">Email US</a></p>
        </div>

      </div>

      <div class="footer-right">

        <div class="footer-icons">

          <a href="#"><img src="./Resources/facebook.png" class="social"></a>&nbsp&nbsp
          <a href="#"><img src="./Resources/instagram.png" class="social"></a>&nbsp&nbsp
          <a href="#"><img src="./Resources/whatsapp.png" class="social"></a>&nbsp&nbsp
          <a href="#"><img src="./Resources/youtube.png" class="social"></a>

        </div>

      </div>

    </footer>
    <script src=".\JS\myScript.js"></script>
    </body>
</html>