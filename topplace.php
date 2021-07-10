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

<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="text-center">TOP PLACE</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="column">
			    	<div class="cardview">
			    		<img class="pimage" src="image/place/su1.jpg">
			    		<p class="pname">Statue of Unity, Kevadia</p>
			    		<button class="viewbtn" id="myBtn">View Details</button>
							<!-- The Modal -->
							<div id="myModal" class="modal">

							  <!-- Modal content -->
							  	<div class="modal-content">
							    	<div class="modal-header">
							      		<span class="close">&times;</span>
							      		<h2>Statue of Unity, Kevadia</h2>
							    	</div>
							    	<div class="modal-body">
							    		<img class="box" src="image/place/su2.jpg">
							    		<p class="con">
							    			The world's tallest statue, dedicated to Indian independence activist Sardar Vallabhbhai Patel (1875–1950), was completed in 2018. At 182 meters tall, it's twice the size of the Statue of Liberty. Patel was the first Deputy Prime Minister and Home Minister of independent India, and is highly regarded for his leadership in bringing the 562 princely states of India together. 
							    		</p>
							    		<p class="con">
							    			The area around the statue has been developed as a comprehensive tourist destination for the whole family to enjoy, with enough activities and attractions to fill in at least three days. 
							    		</p>
							    		<p class="con">
							    			Apart from the statue, these include a sound and laser show, butterfly garden, cactus garden, Ayurvedic wellness center, eco-friendly and medicinal plant nursery, handicraft stores, valley of flowers, forest with native trees, children's park with train and mirror maze, safari park and zoo, zip-lining, white water rafting, cycling, and boating on the lake. 
							    		<p class="con">
							    			There's also been a heartening focus of the empowerment of local women, through training and provision of employment. Accommodations are provided in luxury tent cities, hotels and local homestays.
							    		</p>
							    		<p class="con"><b>Where:- </b> About 90km southeast of Vadodara.</p>
							    	</div>
							  	</div>
							</div>
			    		</div>
					</div>
					
					<div class="column" style="margin-left: 250px">
			    	<div class="cardview">
			    		<img class="pimage" src="image/place/dwarka1.jpg">
			    		<p class="pname">Dwarka</p>
			    		<button class="viewbtn" id="myBtn">View Details</button>
							<!-- The Modal -->
							<div id="myModal" class="modal">

							  <!-- Modal content -->
							  	<div class="modal-content">
							    	<div class="modal-header">
							      		<span class="close">&times;</span>
							      		<h2>Dwarka</h2>
							    	</div>
							    	<div class="modal-body">
							    		<img class="box" src="image/place/dwarka2.webp">
							    		<p class="con">
							    			One of the four most sacred Char Dham Hindu pilgrimage sites and seven most ancient Sapta Puri religious cities in India, Dwarka is considered to be the ancient kingdom of Lord Krishna and the first capital of Gujarat. 
							    		</p>
							    		<p class="con">
							    			The Krishna Janmashtami festival is a major event there. Of special importance is Dwarkadhish Temple, built approximately 200 BC and often referred to as Jagat Mandir. Head down to Gomti Ghat, at the holy water's edge, for a spectacle of decorated camels, tea stalls, and seashell jewelry sellers. 
							    		</p>
							    		<p class="con">
							    			Just north of Dwarka, Shivrajpur beach was recently awarded international Blue Flag certification for safety and cleanliness.
							    		<p class="con"><b>Where:- </b> Western Gujarat, at the mouth of the Gomti River on the Arabian Sea. It's about 132km west of Jamnagar.</p>
							    	</div>
							  	</div>
							</div>
			    		</div>
					</div>
				</div>

				<script type="text/javascript">
	var modal = document.getElementsByClassName("modal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("viewbtn");

// Get the <span> element that closes the modal
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
			</div>
		</div>
	</div>
</div>
</body>
</html>





