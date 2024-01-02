<!-- IT22233530 SK WIJESEKARA-->
<!DOCTYPE html>
<html>
<head>
    <title>FAQ Page</title>
    <link rel="stylesheet" href=".\CSS\index.css">
	<link rel="icon" type="image/x-icon" href=".\Resources\ico.png">
</head>
<body>
<div id="time" class="main"style="font-size: 20px;"></div><br>
	
	
	
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
          <li><a href="contactUs.php">Contact Us</a></li>
		  
        </ul>
      </nav><br>
    <div class="faq-container">
        <h1>Frequently Asked Questions</h1>

        <?php
        
        $faqs = array(
            array(
                'question' => '<font face="arial">How to connect with a customer support representative?</font>',
                'answer' => '<font face="arial">Go to service type page and select the service you want then you can contact an agent.</font>'
            ),
            array(
                'question' => '<font face="arial">How do I contact admin?</font>',
                'answer' => '<font face="arial">Simply you can contact through contact us page</font>'
            ),
            array(
                'question' => '<font face="arial">What is the contact number of Genius 24/7?</font>',
                'answer' => '<font face="arial">+94-11-000-1111</font>'
            ),
            array(
                'question' => '<font face="arial">What is the contact email of Genius 24/7?</font><br>',
                'answer' => '<font face="arial">admin@genius247.com</font><br>'
            ),
            
        );

        
        foreach ($faqs as $faq) {
            echo '<div class="question" onclick="toggleAnswer(this)">' . $faq['question'] . '</div>';
            echo '<div class="answer">' . $faq['answer'] . '</div>';
        }
        ?>
    </div>
    <br>
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
