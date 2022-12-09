<!DOCTYPE html> 
<html lang = "en">

<head>
	<title> The Bakery </title> 
	<meta charset = "utf-8"> 
	<meta name = "viewport" content = "width=device-width, initialscale=1.0">
	<link rel = "stylesheet" href = "style.css" media = "screen">
	<!-- Importing Different Symbols and Font --> 
	<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<link rel = "stylesheet" href = 'https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'>
	<script src = "script.js"></script>
</head>

<body onload = "load()">
<!-- Liquid Layout for Website -->
<div id = "wrapper"> 

	<?php include 'header.php'; ?>
	
	<main>
	
		<!-- About Section Containing Video -->
		<section class="about-us-video">
		
			<h2> About Us </h2> 

			<!-- Please not this is not our video but simply used as a place holder-->
			<iframe src="https://www.youtube.com/embed/XNXuwrXFHRs" allowfullscreen></iframe>
			
			<p> The Bakery is a website dedicated to presenting to you our bakery. We have been established since 1999 to provide the word with high quality baked goods. </p>
			<br/> 
			<p> The Bakery's top executive is Cambodian professional dedicated and passionate. We share a culture to unite the community. </p> 
	
		</section> 
		
		<!-- About Section Containing Main Goals -->
		<div class="cover"> 
		<section class="about-us-goal"> 
		
			<h2> Our Goals </h2> 
			
			<p>The Bakery is dedicated to sharing joy to our customers. We present a variety of baked goods and goodies. Only the best for those you want to enjoy a good morning
			and rest of their day! </p> 
		
		</section> 
		</div> 
		
		<!-- About Section Containing Outlook-->
		<section class="about-us-outlook"> 
			
			<h2> Our Outlook </h2> 
			
			<p> We here at The Bakery believe that the world can be united by the food. We provide back to the community that has given so much to us. </p> 
			
		</section> 
		
	</main>

	<?php include 'footer.php'; ?>
	
</div>

</body>

</html> 