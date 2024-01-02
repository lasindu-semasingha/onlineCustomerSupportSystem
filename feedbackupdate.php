<!-- IT22233530 SK WIJESEKARA-->
<?php
    include 'connect.php';
    $id=$_GET['updateid'];
    if(isset($_POST['submit'])){
        $nname=$_POST['nname'];
        $email=$_POST['email'];
        $satisfaction=$_POST['satisfaction'];
        $comment=$_POST['comment'];

        $sql="UPDATE `feedback` SET `fID`='$id',`nname`='$nname',`email`='$email',`satisfaction`='$satisfaction',`comment`='$comment' WHERE fID=$id";
        
        
        $result = $conn->query($sql);

        if($result == TRUE) {
            header('location:feedbackmanagement.php');
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
	
	
	

    <script src=".\JS\myScript.js"></script>
    </body>
</html>

