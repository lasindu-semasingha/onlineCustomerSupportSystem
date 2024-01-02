<!-- IT22233530 SK WIJESEKARA-->
<?php
	include 'connect.php';
?>
<!DOCTYPE html>
	<head>
		<link rel="stylesheet" href=".\CSS\index.css">
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
		<hr class="ruler">
	<br>
	<center><b><h1 style="font-family: arial;">User Management</h1></b></center>
	<button onclick="window.location.href='feedbacks.php';" class="adduser">Add Feedback</button><br><br>
	<table class="styled-table" border="3">
  <thead>
    <tr>
		<th class="table-h">Feedback ID</th>
      <th class="table-h">Name</th>
      <th class="table-h">Email</th>
      <th class="table-h">satisfaction</th>
      <th class="table-h">Comment</th>
	  <th class="table-h">UPDATE</th>
	  <th class="table-h">DELETE</th>
    </tr>
  </thead>
  <tbody>
	<?php
		$sql="SELECT * FROM `feedback`";
		$result=mysqli_query($conn,$sql);
		if($result){
			while($row=mysqli_fetch_assoc($result)){
				$id=$row['fID'];
				$fname=$row['nname'];
				$email=$row['email'];
				$satisfaction=$row['satisfaction'];
				$comment=$row['comment'];
				echo '<tr>
				<td class="space">'. $id .'&nbsp&nbsp&nbsp&nbsp&nbsp</td>
				<td class="space">'. $fname .'&nbsp&nbsp&nbsp&nbsp&nbsp</td>
				<td class="space">'. $email .'&nbsp&nbsp&nbsp&nbsp&nbsp</td>
				<td class="space">'. $satisfaction .'&nbsp&nbsp&nbsp&nbsp&nbsp</td>
				<td class="space">'. $comment .'&nbsp&nbsp&nbsp&nbsp&nbsp</td>
				<td class="space"><button class="update"><a href="feedbackupdate.php?updateid='.$id.'" class="update-a">UPDATE</a></button></td>
				<td class="space"><button class="delete"><a href="feedbackdelete.php?deleteid='.$id.'" class="delete-a">DELETE</a></button></td>
			  </tr>';
			}
		}
	?>
  </tbody>
</table><br><br>
<button onclick="window.location.href='admin.php';" class="returnadmin">Return to Admin Home</button><br><br>
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