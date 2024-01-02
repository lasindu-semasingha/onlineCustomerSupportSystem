<!-- IT22233530 SK WIJESEKARA-->
<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $nname=$_POST['nname'];
        $email=$_POST['email'];
        $satisfaction=$_POST['satisfaction'];
        $comment=$_POST['comment'];

        $sql="INSERT INTO `feedback`(`nname`, `email`, `satisfaction`, `comment`) VALUES ('$nname','$email','$satisfaction','$comment')";
        
        
        $result = $conn->query($sql);
		
        if($result == TRUE) {
            echo "&nbsp&nbsp&nbspCommented successfully";
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
		
	<h1 class="fb">Customer Feedback</h1>
	
	<div><br>
		<img src=".\Resources\feedback.jpg" width="440px"height="275px">
		<div class="content">
			<h2>We want your feedback</h2>
		</div>
	</div>
	
	<div class="fb2">
		<h3>What do you think about our service</h3>
		<form method="post">
		
			<label for="name" class="txts">First name:</label><br><br>
			<input type="text" name="nname" placeholder="name" style="width:500px;height:30px; border-radius: 15px; margin-left: -60px;"><br><br>
			
			<label for="email" class="txts">Enter Email:</label><br><br>
			<input type="text" name="email" placeholder="Enter E-mail" style="width:500px;height:30px; border-radius: 15px;  margin-left: -60px;" required><br><br>
			
			<label for="comm" style="font-size:25px; font-family: arial;">How satisfied were you with our product/sevice </label><br><br>
			<select id="comm" name="satisfaction" style="font-size:20px; width:100px;height:30px; border-radius: 15px;">
				<option value="Excellent">Excellent</option>				
				<option value="Good">Good</option>
				<option value="Neutral">Neutral</option>
			    <option value="Poor">Poor</option>	
            </select><br><br>
			
			<label for="response" class="txts" style="margin-left: -6px;"> Enter your response:</label><br><br>
	        <textarea id="comment" name="comment" rows="4" cols="50" placeholder="Enter your comment" style="margin-left: -170px;"></textarea>
        </div><br>
			<br><br><br><br><br><br><br><br><br><br><br><br>
			<button type="submit" class="submit" style="margin-left: 550px;" name="submit">Submit</button>
  
		</form>
		
	</div>
	
	
	
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