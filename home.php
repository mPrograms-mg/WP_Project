<?php
  session_start();
	include_once('include\header.php');
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="Demo.css">
</head>
<body>
	<div class="centered">Indian Tourist Place</div>
	<div class="img-container">
		<div class="slide">
			<div class="slideNum">1</div>
			<img src="image/Img1.jpg">
		</div>
		<div class="slide">
			<div class="slideNum">2</div>
			<img src="image/Img2.jpg">
		</div>
		<div class="slide">
			<div class="slideNum">3</div>
			<img src="image/Img3.jpg">
		</div>

		<a class="prev" onclick="SlidesMove(-1)">&#10094;</a>
  		<a class="next" onclick="SlidesMove(1)">&#10095;</a>

		<br>
		<div style="text-align:center">
			<span class="dot" onclick="SlideActive(1)"></span>
			<span class="dot" onclick="SlideActive(2)"></span>
			<span class="dot" onclick="SlideActive(3)"></span>
		</div>
		

		<script>
		/*Automatically Change Slide */
		var slideIndex = 0;
		DisplaySlide();

		function DisplaySlide() 
		{
  			var i;
  			var slides = document.getElementsByClassName("slide");
  			var dots = document.getElementsByClassName("dot");
  			for (i = 0; i < slides.length; i++) {
    			slides[i].style.display = "none";  
  			}
  			slideIndex++;
  			if (slideIndex > slides.length) {slideIndex = 1}    
  			for (i = 0; i < dots.length; i++) {
    			dots[i].className = dots[i].className.replace(" active", "");
  			}
  			slides[slideIndex-1].style.display = "block";  
  			dots[slideIndex-1].className += " active";
  			setTimeout(DisplaySlide, 2000); // Change image every 2 seconds
		}	

		/*Manual Change Slide*/
		var slideIndex = 1;
		SlideDisplay(slideIndex);

		function SlidesMove(n) {
			SlideDisplay(slideIndex += n);
		}

		function SlideActive(n) {
			SlideDisplay(slideIndex = n);
		}

		/* Main function */
		function SlideDisplay(n) {
			var i;
			var totalslides =
				document.getElementsByClassName("slide");
			
			var totaldots =
				document.getElementsByClassName("dot");
			
			if (n > totalslides.length) {
				slideIndex = 1;
			}
			if (n < 1) {
				slideIndex = totalslides.length;
			}
			for (i = 0; i < totalslides.length; i++) {
				totalslides[i].style.display = "none";
			}
			for (i = 0; i < totaldots.length; i++) {
				totaldots[i].className =
				totaldots[i].className.replace(" active", "");
			}
			totalslides[slideIndex - 1].style.display = "block";
			totaldots[slideIndex - 1].className += " active";
		}

		</script>
		
		<div class="panel panel-primary">
		<div class="row">
				<div class="column">
			    	<div class="homecardview">
			    		<img class="pimage" src="image/place/somnath1.jpg">
			    		<p class="pname">Somnath Temple, Veraval</p>
			    		<button class="viewbtn" id="myBtn">View Details</button>
							<!-- The Modal -->
							<div id="myModal" class="modal">

							  <!-- Modal content -->
							  	<div class="modal-content">
							    	<div class="modal-header">
							      		<span class="close">&times;</span>
							      		<h2>Somnath Temple, Veraval</h2>
							    	</div>
							    	<div class="modal-body">
							    		<img class="box" src="image/place/somnath2.webp">
							    		<p class="con">
							    			An important pilgrimage destination, Somnath Temple is one of the 12 jyotirlinga (shrines of Lord Shiva, where he's worshiped as a linga of light) in India. 
							    		</p>
							    		<p class="con">
							    			Its seaside location is powerful, the intricate carvings on its sandstone architecture are superb, and its history is fascinating. 
							    		</p>
							    		<p class="con">
							    			The temple was ransacked by Islamic invaders and rebuilt numerous times, with the final reconstruction taking place after India achieved independence from the British. Maha Shivratri is celebrated in a big way there in February or March. 
							    		</p>
							    		<p class="con">
							    			A colorful religious fair is also held every year on Kartik Purnima (full moon night, usually in November), complete with small children dressed up as Lord Shiva and plenty of bhaang. 
							    		</p>
							    		<p class="con"><b>Where:- </b> Southwest Gujarat. The closest airport is in Diu. Ahmedabad is about seven hours away. You can take a train from Ahmedabad to Veraval.</p>
							    	</div>
							  	</div>
							</div>
			    		</div>
					</div>

					<div class="column" style="margin-left: 250px">
			    	<div class="homecardview">
			    		<img class="pimage" src="image/place/ranikivav1.jpg">
			    		<p class="pname">Rani ki Vav, Patan</p>
			    		<button class="viewbtn" id="myBtn">View Details</button>
							<!-- The Modal -->
							<div id="myModal" class="modal">

							  <!-- Modal content -->
							  	<div class="modal-content">
							    	<div class="modal-header">
							      		<span class="close">&times;</span>
							      		<h2>Rani ki Vav, Patan</h2>
							    	</div>
							    	<div class="modal-body">
							    		<img class="box" src="image/place/ranikivav2.jpg">
							    		<p class="con">
							    			Rani Ki Vav or 'Queen's Stepwell' is a distinctive form of water storage system located in the small town of Gujarat called Patan, on the banks of River Saraswati. 
							    		</p>
							    		<p class="con">
							    			Believed to be the grandest stepwell in the state of Gujarat, Rani ka Vav epitomises the peak of Maru-Gujarat architectural style. The 900-year-old structure listed as a UNESCO World Heritage Site is displayed prominently in the new ₹ 100 currency note issued by the Reserve Bank of India.
							    		</p>
							    		<p class="con">
											In the olden days, the water of the well had medicinal properties which helped ward off diseases like viral diseases and fever. The well was excavated in the 1960s in a well-protected state as it was buried under slit for sanctuaries. In addition to this, Rani Ka Vav was an important centre for socializing among the locals as well as taking refuge from the heat. It's an excellent example of turning something functional into a piece of art. </p>
							    		<p class="con"><b>Where:- </b> About 90km southeast of Vadodara.</p>
							    	</div>
							  	</div>
							</div>
			    		</div>
					</div>

			</div>
		</div>	
			<script type="text/javascript">
				var modal = document.getElementsByClassName("modal");
				var btn = document.getElementsByClassName("viewbtn");
				var span = document.getElementsByClassName("close");
				for(let i=0;i<btn.length;i++){
    				btn[i].onclick = function() {
        				modal[i].style.display = "block";
    				}
				}
				for(let i=0;i<span.length;i++){
				    span[i].onclick = function() {
				        modal[i].style.display = "none";
				    }
				}
			</script>
</body>
</html>





