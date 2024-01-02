<!-- IT22198518 WALD Semasingha-->
<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $nname=$_POST['fname'];
        $email=$_POST['email'];
        $request=$_POST['ltext'];

        $sql="INSERT INTO `newrequest`(`nname`, `email`, `request`) VALUES ('$nname','$email','$request')";
        
        
        $result = $conn->query($sql);

        if($result == TRUE) {
            echo "&nbsp&nbsp&nbspRequested successfully";
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
        <div id="time" class="main"style="font-size: 20px;"></div><br>
	<div class="main">
		
		<button onclick="window.location.href='privacypolicy.php';" class="btn" style="margin-left: 1080px;"><strong>Privacy Policy</strong></button>
	</div><br>
	
	
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
	<nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="serviceType.html">Service Type</a></li>
          <li><a href="aboutUs.html">About Us</a></li>
          <li><a href="contactUs.html">Contact Us</a></li>
        </ul>
      </nav><br>
        <h1 class="com" style="margin-left: 500px;">Food & Beverage</h1>

    <form method="post">
		<div class="frm">
			<label for="name" class="txts">Name:</label><br><br>
			<input type="text" id="name" name="fname" placeholder="Enter Name" autocomplete="off"><br>
		</div>
		<div class="frm">
			<label for="email" class="txts">Email:</label><br><br>
			<input type="email" id="email" name="email" placeholder="Enter e-mail" autocomplete="off">
	    </div>
		<br>
        <div>
            <label for="request" class="txts"> Enter your request:</label><br><br>
            <textarea id="texts" name="ltext" rows="4" cols="50" placeholder="Enter your request details" style="margin-left: -220px;"></textarea>
        </div>
        <button class="submit" name="submit">Submit</button>
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