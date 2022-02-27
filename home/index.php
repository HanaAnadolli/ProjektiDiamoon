
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="main.js"></script>

<?php
include_once '../header/nav.php';
?>

<div class="div2">
	<div class="txt">
		<h1>KERRY WANTS YOU<br>TO GET 25% OFF</h1>
		<p>And so do we. We've designed three collections<br>
		with our BFF Kerry Washington, and we want everyone<br>to be able to have access to these pieces this holiday <br>
		season. Get 25% off all KW collections for a limited time<br>
		 only.</p>
		<a href="../logIn/index.php"> <button id="btn">LogIn</button></a>	
	</div>
	<div class="img-div">
		<img src="../images/div1.jpg">
	</div>
</div>
<div class="divi4" style="display: flex; margin-top: -84px;">	
	<div class="div-img">
		<a href=""><img src="../images/22.jpg"></a>
	</div>
	<div class="blackF">
		<h1>Black Friday</h1>
		<hr>
		<h4>up to 50%</h4>
	</div>

</div>
<div class="divi5">
	<div class="slideshow-container">
		 <div class="mySlides">
			 <q>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br> the industry's standard dummy text ever since the 1500s,</q>
			<p class="author">- John Keats</p>
		  </div>

		  <div class="mySlides">
			<q>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <br>industry's standard dummy text ever since the 1500s,</q>
			<p class="author">- Ernest Hemingway</p>
		  </div>

		  <div class="mySlides">
			<q>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br>industry's standard dummy text ever since the 1500s,</q>
			<p class="author">- Thomas A. Edison</p>
		  </div>

		
		</div>

		<div class="dot-container">
		  <span class="dot" onclick="currentSlide(1)"></span>
		  <span class="dot" onclick="currentSlide(2)"></span>
		  <span class="dot" onclick="currentSlide(3)"></span>
		</div>
</div>

<?php
include_once '../footer/footer.php';
?>