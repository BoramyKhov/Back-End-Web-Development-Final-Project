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
    <script src="script.js"></script>
</head>

<body onload = "load()">
<!-- Liquid Layout for Website -->
<div id = "wrapper"> 

	<?php include 'header.php'; ?>
	
	<main>

    <!-- Home Section -->
        <div id = "custom-home">

            <div class = "title"> 

            <h1> Custom Cakes! </h1>
			
			    <p> Choose your best! <p>
                    
            </div>
			
		</div>  
    
        <div id = "cake-custom"> 
		
        <h2> Cake Customizer </h2> 
        
        <div id="cakeContainer">
            <div id="cakeBackground">
            <div id="bottomFrosting"></div>
            <div id="topFrosting"></div>
            <div id="bottomLayer"></div>
            <div id="topLayer"></div>
            <div id="topStyle"></div>
            <div id="bottomStyle"></div>
            </div>

            <div>
                <input id="nextFrostB" type="button" value ="Next Bottom Frosting" onclick="nextFrostB()">
            </div>
            <div>
                <input id="nextLayerB" type="button" value ="Next Bottom Layer" onclick="nextLayerB()">
            </div>
            <div>
                <input id="nextFrostT" type="button" value ="Next Top Frosting" onclick="nextFrostT()">
            </div>
            <div>
                <input id="nextLayerT" type="button" value ="Next Top Layer" onclick="nextLayerT()">
            </div>
            <div>
                <input id="nextStyleT" type="button" value ="Next Top Style" onclick="nextStyleT()">
            </div>
            <div>
                <input id="nextStyleB" type="button" value ="Next Bottom Style" onclick="nextStyleB()">
            </div>
            <div>
                <input id="cakeStack" type="button" value ="Stack" onclick="nextStack()">
            </div>
            <div>
                <input id="submit" type="button" value ="Submit" onclick="">
            </div>
    
        </div>

	</main>

	<?php include 'footer.php'; ?>
	
</div>

</body>

</html> 