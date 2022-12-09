<?php

	require_once("config.php");

	# Access database for specials and discounts of the menu

	$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);

	# Fetch from Special Table

	$statement = $pdo->prepare("SELECT menu_id FROM specials WHERE specials_id = 1");
	$statement->execute();
	$special_menu1 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT menu_id FROM specials WHERE specials_id = 2");
	$statement->execute();
	$special_menu2 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT menu_id FROM specials WHERE specials_id = 3");
	$statement->execute();
	$special_menu3 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT menu_id FROM specials WHERE specials_id = 4");
	$statement->execute();
	$special_menu4 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT discount_id FROM specials WHERE specials_id = 1");
	$statement->execute();
	$discount_menu1 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT discount_id FROM specials WHERE specials_id = 2");
	$statement->execute();
	$discount_menu2 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT discount_id FROM specials WHERE specials_id = 3");
	$statement->execute();
	$discount_menu3 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT discount_id FROM specials WHERE specials_id = 4");
	$statement->execute();
	$discount_menu4 = $statement->fetchColumn();

	# Fetch from Discount Table

	$statement = $pdo->prepare("SELECT discount_value FROM discount WHERE discount_id = $discount_menu1");
	$statement->execute();
	$discount1 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT discount_value FROM discount WHERE discount_id = $discount_menu2");
	$statement->execute();
	$discount2 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT discount_value FROM discount WHERE discount_id = $discount_menu3");
	$statement->execute();
	$discount3 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT discount_value FROM discount WHERE discount_id = $discount_menu4");
	$statement->execute();
	$discount4 = $statement->fetchColumn();

	# Fetch from Menu Table

	$statement = $pdo->prepare("SELECT food FROM menu WHERE menu_id = $special_menu1");
	$statement->execute();
	$special1 = $statement->fetchColumn();
	
	$statement = $pdo->prepare("SELECT price FROM menu WHERE menu_id = $special_menu1");
	$statement->execute();
	$price1 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT image FROM menu WHERE menu_id = $special_menu1");
	$statement->execute();
	$image1 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT food FROM menu WHERE menu_id = $special_menu2");
	$statement->execute();
	$special2 = $statement->fetchColumn();
	
	$statement = $pdo->prepare("SELECT price FROM menu WHERE menu_id = $special_menu2");
	$statement->execute();
	$price2 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT image FROM menu WHERE menu_id = $special_menu2");
	$statement->execute();
	$image2 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT food FROM menu WHERE menu_id = $special_menu3");
	$statement->execute();
	$special3 = $statement->fetchColumn();
	
	$statement = $pdo->prepare("SELECT price FROM menu WHERE menu_id = $special_menu3");
	$statement->execute();
	$price3 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT image FROM menu WHERE menu_id = $special_menu3");
	$statement->execute();
	$image3 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT food FROM menu WHERE menu_id = $special_menu4");
	$statement->execute();
	$special4 = $statement->fetchColumn();
	
	$statement = $pdo->prepare("SELECT price FROM menu WHERE menu_id = $special_menu4");
	$statement->execute();
	$price4 = $statement->fetchColumn();

	$statement = $pdo->prepare("SELECT image FROM menu WHERE menu_id = $special_menu4");
	$statement->execute();
	$image4 = $statement->fetchColumn();

	# Get new prices

	$newprice1 = $price1 - $price1 * $discount1;
	$newprice2 = $price2 - $price2 * $discount2; 
	$newprice3 = $price3 - $price3 * $discount3; 
	$newprice4 = $price4 - $price4 * $discount4;  

?>

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

<body onload = "load1()" >
<!-- Liquid Layout for Website -->
<div id = "wrapper"> 

	<?php include 'header.php'; ?>
	
	<main>

<!-- Home Feature Section -->
	<section id = "specials-feature">
	
		<div class = "slides">

			<div class = "slider active">	
				<img src = "feature/home.jpg" alt = "Home" id = "home-feature">
				<div class = "promo-info"> 
					<h1> Welcome to the Bakery! </h1> 
					<p> Here to serve! </p>
				</div>
			</div> 

			<div class = "slider">
				<img src = "" alt = "Promo 1" id = "image-promo1">	
				<div class = "promo-info"> 
					<h1 id = "promo-header1"></h1> 
					<p id = "promo-info1"></p>
				</div>
			</div> 

			<div class = "slider">
				<img src = "" alt = "Promo 2" id = "image-promo2">
				<div class = "promo-info"> 
					<h1 id = "promo-header2"></h1> 
					<p id = "promo-info2"></p>
				</div>	
			</div>

			<i class='bx bxs-chevron-left' id = "slide-prev"></i>
			<i class='bx bxs-chevron-right' id = "slide-next"></i>

			<!-- Manual Slider -->

			<div class = "dots-nav"> 
				<div class = "dot"></div>
				<div class = "dot"></div>
				<div class = "dot"></div>
			</div>

		</div>

	</section>	 

<!--- Featured Specials Section -->

	<section id="featured-specials"> 
					
		<h2> Today's Specials </h2> 
		
		<p> Delicious bread baked fresh every morning with the best deals! </p> 

		<div class= "row-2page"> 

		<!--
		
			<div class="col-2page"> 
				<a href =""> <img src="" alt = "Deal 1" id = "deal1-image"> </a> 
				<h3 class = "deal1-bread" > </h3> 
				<strike> <h3 class = "old-price1">  </h3> </strike>
				<h3 class = "new-price1"> </h3> 
			</div> 
			
			<div class="col-2page"> 
				<a href =""> <img src="" alt = "Deal 2" id = "deal2-image"> </a> 
				<h3 class = "deal2-bread" > </h3> 
				<strike> <h3 class = "old-price2">  </h3> </strike>
				<h3 class = "new-price2"> </h3> 
			</div> 
			
			<div class="col-2page"> 
				<a href =""> <img src="" alt = "Deal 3" id = "deal3-image"> </a> 
				<h3 class = "deal3-bread" > </h3> 
				<strike> <h3 class = "old-price3">  </h3> </strike>
				<h3 class = "new-price3"> </h3> 
			</div> 
			
			<div class="col-2page"> 
				<a href =""> <img src="" alt = "Deal 3" id = "deal4-image"> </a> 
				<h3 class = "deal4-bread" > </h3> 
				<strike> <h3 class = "old-price4">  </h3> </strike>
				<h3 class = "new-price4"> </h3> 
			</div>

			<div class="col-2page"> 
				<a href =""> <img src="" alt = "Deal 1"> </a> 
				<h3> </h3> 
				<strike> <h3>  </h3> </strike>
				<h3> </h3> 
			</div> 

		-->
		
		<div class="col-2page">

		<?php  
			echo "<a href =''>";
			echo "<img src='". $image1 . "'  > ";
			echo "</a>";
			echo "  
					<h3> {$special1} </h3> 
					<strike> <h3> {$price1} </h3> </strike>
					<h3> {$newprice1} </h3> 
				";

		?>

		</div>

		<div class="col-2page">

		<?php  
			echo "<a href =''>";
			echo "<img src='". $image2 . "'  > ";
			echo "</a>";
			echo "  
					<h3> {$special2} </h3> 
					<strike> <h3> {$price2} </h3> </strike>
					<h3> {$newprice2} </h3> 
				";

		?>

		</div>

		<div class="col-2page">

		<?php  
			echo "<a href =''>";
			echo "<img src='". $image3 . "'  > ";
			echo "</a>";
			echo "  
					<h3> {$special3} </h3> 
					<strike> <h3> {$price3} </h3> </strike>
					<h3> {$newprice3} </h3> 
				";

		?>

		</div>

		<div class="col-2page">

		<?php  
			echo "<a href =''>";
			echo "<img src='". $image4 . "'  > ";
			echo "</a>";
			echo "  
					<h3> {$special4} </h3> 
					<strike> <h3> {$price4} </h3> </strike>
					<h3> {$newprice4} </h3> 
				";

		?>

		</div>
		
			
		</div> 

	</section>  

<!-- Showcasing the type of cruisine taught -->
	<div class="cover">
		<section id="custom"> 
	
			<h2> Check Out our Cake Customizer! </h2> 
			
			<p id = "custom-desc"> Have a dream cake in mind, but you're not sure where to start? Our customizer has got it all! You choose your own cakes, and we make them come true. </p>
		
			<div id="row1">
		
				<div class="custom-col">
					<a href=""> <img src="custom/size.jpg" alt="Choose your size" height=360> </a>
					<h3>Choose your size</h3>
					<p> Need a small cake to share with your significant other? Or maybe your kid wants to invite his or her whole class to a birthday party. We've got a size for every occasion! </p>
				</div> 
			
				<div class="custom-col">
					<a href=""> <img src="custom/decoration.jpg" alt="Pick your decorations" height=360> </a> 
					<h3>Pick your decorations</h3>
					<p> We make sure that your cake looks as beautiful as possible. Choose from a selection of toppings, colors, and styles to customize your cake. Express yourself, as every cake is unique! </p>
				</div> 
			
				<div class="custom-col">
					<a href=""> <img src="custom/flavor.jpg" alt="Select your flavors" height=360> </a> 
					<h3>Select your flavors</h3>
					<p> Last but most certainly not least, the flavor of the cake. All vanilla all the way through, or maybe some strawberry filling with slices of fruit, the choice is yours to make!</p>
				</div>

			</div>
	
		</section> 
	</div> 

<!-- Reviews from People --> 
		<section id="review"> 
		
			<h2> People Love it! </h2>
			<p id = "review-desc"> Here are the reviews from food critics over these past years. </p>
			
				<div class="row2-3"> 
			
					<div class="review-col">
						<img src="reviewer/jay.jpg" alt="Jay Rayner Portrait"> 
						<div>
							<p> Extremely Easy to Use Customizer, Extremely Good! </p> 
							<h3> Jay Rayner </h3> 
						</div>
					</div>
					
					<div class="review-col">
						<img src="reviewer/sam.jpg" alt="Sam Sifton Portrait"> 
						<div>
							<p> Amazing! This is a place to go if you want to explore the best breads in town. </p> 
							<h3> Sam Sifton </h3>
						</div>
					</div>
					
					<div class="review-col">
						<img src="reviewer/ruth.jpg" alt="Ruth Reichl Portrait"> 
						<div>
							<p> Delicious! Magnificent! </p> 
							<h3> Ruth Reichl </h3> 
						</div> 
					</div>
				
				</div> 
				
		</section> 
	
	</main>

	<?php include 'footer.php'; ?>

<!-- Chat Box -->
	<section id = "chat-helper"> 
        
		<button class = "chat-button"> 
			<i class='bx bxs-chat' > </i>
		</button>

		<div class = "chat-box"> 
			<div class = "close"> 
				<i class='bx bx-x' ></i> 
			</div>
			<div class = "chat-area">
				<div class = "incoming-message"> 
					<img src = "chat_box/chat-avatar.png" alt = "Bot Avatar" class = "avatar-icon"> 
					<span class = "msg"> 
						<p> Welcome to the Bakery! </p> 
						<p> Please select the one of the </p> 
						<p> following options! </p>
						<p> 1. Contact Number </p>
						<p> 2. Email </p>
						<p> 3. Address </p>
					</span>
				</div>
			</div>

			<div class = "message-input-area">
				<input type = "text" class = "message-input"> 
				<button class = "message-submit"> <i class='bx bxs-send'> </i> </button>
			</div> 
		</div>

	</section>
	
</div>

</body>

</html> 