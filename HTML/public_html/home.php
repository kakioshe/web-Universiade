<!DOCTYPE html>

<html>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Universiade UI 2017</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Vollkorn|Lato" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="Pictures/universiade-logo.ico">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102583061-2', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
        </button>
	      <a class="navbar-brand" href="home.php"><img src="Pictures/logo.png" alt="Universiade" style="height:100%;"></a>
	    </div>

	    <div class="collapse navbar-collapse" id="myNavbar">
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="home.php">Home</a></li>
		      <li><a href="about.php">About Us</a></li>
		      <li><a href="competition.php">Registration</a></li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="competition.php">4 Districts<span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="basket.php">Basket</a></li>
		          <li><a href="voli.php">Voli</a></li>
		          <li><a href="soccer.php">Sepak Bola</a></li>
		          <li><a href="futsal.php">Futsal</a></li>
		        </ul>
		      </li>
		      <li><a href="gallery.php">Gallery</a></li>
		    </ul>
		</div>
	  </div>
	</nav>

	<div class="header-wrapper">
		<img id="image" src="./Pictures/header.jpg" width="100%">
		<p class="header-text" id="countdown"></p>
	</div>
	<br>
	<div class = "container">
		<div class = "row">
			<div class ="col-md-6">
				<div class = "section">
					<div class = "title">
						<h4> About Us </h4>
					</div>
					<div class = "info">
						<p> Universiade UI merupakan kompetisi olahraga mahasiswa ditingkat nasional yang diadakan di Universitas Indonesia. Universiade UI bertujuan untuk mengembangkan kuantitas dan kualitas diri serta menumbuhkan jiwa kompetitif dan semangat di bidang olahraga.</p>
					</div>
					<a href="about.php"> Learn More </a>
					<br>
				</div>
			</div>
			<div class="col-md-6">

				<div class="video">
					<iframe width="100%" height="360px" src="https://www.youtube.com/embed/Bi9EHyO60uQ" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>	
		</div>
	</div>

	<div class = "container center">
		<a href="competition.php"><img src="Pictures/lomba.jpg" alt="Daftar Lomba" width="80%"></a>
	</div>


	<div class="w3-content" style="max-width:1200px">
	  <img class="mySlides" src="Pictures/Gallery/20170610_170630_0076.jpg" style="width:100%">
	  <img class="mySlides" src="Pictures/Gallery/20170610_170630_0077.jpg" style="width:100%">
	  <img class="mySlides" src="Pictures/Gallery/20170610_170630_0031.jpg" style="width:100%">
	  <img class="mySlides" src="Pictures/Gallery/20170610_170630_0017.jpg" style="width:100%">
	  <img class="mySlides" src="Pictures/Gallery/20170610_170630_0055.jpg" style="width:100%">
	  <img class="mySlides" src="Pictures/Gallery/20170610_170630_0023.jpg" style="width:100%">
	  <img class="mySlides" src="Pictures/Gallery/20170610_170630_0037.jpg" style="width:100%">
	  <img class="mySlides" src="Pictures/Gallery/20170610_170630_0048.jpg" style="width:100%">
	  <img class="mySlides" src="Pictures/Gallery/20170610_170630_0067.jpg" style="width:100%">
	  <img class="mySlides" src="Pictures/Gallery/20170610_170630_0015.jpg" style="width:100%">
	  <img class="mySlides" src="Pictures/Gallery/20170610_170630_0014.jpg" style="width:100%">
	  <img class="mySlides" src="Pictures/Gallery/20170610_170630_0078.jpg" style="width:100%">



	<div class="w3-content w3-display-container">

	<div class="w3-display-container slider">
	  <div class="w3-row-padding w3-section">
	    <div class="w3-col s4">
	      <img src="Pictures/Gallery/20170610_170630_0076.jpg" style="width:100%" onclick="currentDiv(1)">
	    </div>
	    <div class="w3-col s4">
	      <img src="Pictures/Gallery/20170610_170630_0077.jpg" style="width:100%" onclick="currentDiv(2)">
	    </div>
	    <div class="w3-col s4">
	      <img src="Pictures/Gallery/20170610_170630_0031.jpg" style="width:100%" onclick="currentDiv(3)">
	    </div>
	  </div>
	</div>

	<div class="w3-display-container slider">
	  <div class="w3-row-padding w3-section">
	    <div class="w3-col s4">
	      <img src="Pictures/Gallery/20170610_170630_0017.jpg" style="width:100%" onclick="currentDiv(4)">
	    </div>
	    <div class="w3-col s4">
	      <img src="Pictures/Gallery/20170610_170630_0055.jpg" style="width:100%" onclick="currentDiv(5)">
	    </div>
	    <div class="w3-col s4">
	      <img src="Pictures/Gallery/20170610_170630_0023.jpg" style="width:100%" onclick="currentDiv(6)">
	    </div>
	  </div>
	</div>

	<div class="w3-display-container slider">
	  <div class="w3-row-padding w3-section">
	    <div class="w3-col s4">
	      <img src="Pictures/Gallery/20170610_170630_0037.jpg" style="width:100%" onclick="currentDiv(7)">
	    </div>
	    <div class="w3-col s4">
	      <img src="Pictures/Gallery/20170610_170630_0048.jpg" style="width:100%" onclick="currentDiv(8)">
	    </div>
	    <div class="w3-col s4">
	      <img src="Pictures/Gallery/20170610_170630_0067.jpg" style="width:100%" onclick="currentDiv(9)">
	    </div>
	  </div>
	</div>

	<div class="w3-display-container slider">
	  <div class="w3-row-padding w3-section">
	    <div class="w3-col s4">
	      <img src="Pictures/Gallery/20170610_170630_0015.jpg" style="width:100%" onclick="currentDiv(10)">
	    </div>
	    <div class="w3-col s4">
	      <img src="Pictures/Gallery/20170610_170630_0014.jpg" style="width:100%" onclick="currentDiv(11)">
	    </div>
	    <div class="w3-col s4">
	      <img src="Pictures/Gallery/20170610_170630_0078.jpg" style="width:100%" onclick="currentDiv(12)">
	    </div>
	  </div>
	</div>


	<button class="w3-button w3-display-left w3-black" onclick="plusslideDivs(-1)">&#10094;</button>
	<button class="w3-button w3-display-right w3-black" onclick="plusslideDivs(1)">&#10095;</button>

	</div>
	</div>

	<div class = "footer">
		<div class="contact">
			<div class ="container">
				<div class = "col-md-6">
					<img src="Pictures/logo-putih.png" alt="logo" width="100%">
				</div>
				<div class = "col-md-6">
					<div class="footer-info">
						<p> Contact Us: </p>
						<p> <img src="Pictures/line.png" alt="Line" width="32px" height="32px"> @ygz3811n </p>
						<p> <img src="Pictures/instagram.png" alt="Instagram" width="32px" height="32px">  @universiadeui </p>
						<p> <img src="Pictures/phone.png" alt="Phone" width="32px" height="32px">  085735401015(echa)</p>
						<p> <img src="Pictures/twitter.png" alt="twitter" width="32px" height="32px">  @universiadeui</p>
						<p> <img src="Pictures/youtube.png" alt="Youtube" width="32px" height="32px">  Universiade UI 2017</p>
						<p> #AllinOneNation</p>
					</div>
				</div>
			</div>
		</div>
	</div>



	<script>
	var slideIndex = 1;
	showslideDivs(slideIndex);

	function plusslideDivs(n) {
	  showslideDivs(slideIndex += n);
	}

	function showslideDivs(n) {
	  var i;
	  var x = document.getElementsByClassName("slider");
	  if (n > x.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = x.length}
	  for (i = 0; i < x.length; i++) {
	     x[i].style.display = "none";  
	  }
	  x[slideIndex-1].style.display = "block";  
	}
	</script>


	<script>
	var pictureindex = 1;
	showDivs(pictureindex);

	function plusDivs(n) {
	  showDivs(pictureindex += n);
	}

	function currentDiv(n) {
	  showDivs(pictureindex = n);
	}

	function showDivs(n) {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("demo");
	  if (n > x.length) {pictureindex = 1}
	  if (n < 1) {pictureindex = x.length}
	  for (i = 0; i < x.length; i++) {
	     x[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
	     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
	  }
	  x[pictureindex-1].style.display = "block";
	  dots[pictureindex-1].className += " w3-opacity-off";
	}
	</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Sept 29, 2017 14:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "ITS HERE";
  }
}, 1000);
</script>

</body>

</html> 

