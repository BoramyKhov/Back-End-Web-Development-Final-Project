<?php

	require_once("config.php");

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

<body onload = "load();load2()" >
<!-- Liquid Layout for Website -->
<div id = "wrapper"> 

	<?php include 'header.php'; ?>
	
	<main>

    <!-- Home Section -->
        <div id = "menu-home">

            <div class = "title"> 

            <h1> Our Menu </h1>
			
			    <p> Select from our variety of offers! <p>
                    
            </div>
			
		</div>  

        <div id = "menu-search"> 

            <h2> Menu </h2>

            <input type = "text" name = "search" class = "search-bar" placeholder = " Search for ...." /> 

			<!-- 

            <div id="menu-gallery">
                <figure>
					<a href=""> <img src="Menu_Pictures/baguette.jpg" alt="Baguette" height=300> </a>
					<figcaption> Baguette </figcaption>
				</figure>

                <figure>
					<a href=""> <img src="Menu_Pictures/brioche.jpg" alt="Brioche" height=300> </a>
					<figcaption> Brioche </figcaption>
				</figure>

                <figure>
					<a href=""> <img src="Menu_Pictures/muffin.jpg" alt="Chocolate Muffin" height=300> </a>
					<figcaption> Chocolate Muffin </figcaption>
				</figure>

                <figure>
					<a href=""> <img src="Menu_Pictures/cinnamon.jpg" alt="Cinnamon Rolls" height=300> </a>
					<figcaption>  Cinnamon Rolls </figcaption>
				</figure>

                <figure>
					<a href=""> <img src="Menu_Pictures/croissant.jpg" alt="Croissant" height=300> </a>
					<figcaption> Croissant </figcaption>
				</figure>

                <figure>
					<a href=""> <img src="Menu_Pictures/focaccia.jpg" alt="Focaccia" height=300> </a>
					<figcaption> Focaccia </figcaption>
				</figure> 

                <figure>
					<a href=""> <img src="Menu_Pictures/donut.jpg" alt="Glazed Donuts" height=300> </a>
					<figcaption>  Glazed Donuts </figcaption>
				</figure>
		
				<figure>
					<a href=""> <img src="Menu_Pictures/sourdough.jpg" alt="Sourdough" height=300> </a>
					<figcaption>  Sourdough </figcaption>
				</figure> 

                <figure> 
					<a href=""> <img src="Menu_Pictures/whitebread.jpg" alt="White Bread" height=300 > </a> 
					<figcaption> White Bread </figcaption>
				</figure>
				
			</div> 

			-->

			<div id="menu-gallery">
				<?php 

				$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);

				for ($i = 1; $i < 9; $i ++) 
				{	
					$statement = $pdo->prepare("SELECT food FROM menu WHERE menu_id = $i");
					$statement->execute();
					$food = $statement->fetchColumn();

					$statement = $pdo->prepare("SELECT image FROM menu WHERE menu_id = $i");
					$statement->execute();
					$image = $statement->fetchColumn();

					echo "<figure>";
					echo "<a href= ''>";
					echo "<img height = 300 src='". $image . "'  > ";
					echo "</a>";
					echo "<figcaption> {$food} </figcaption>";
					echo "</figure>";
				}
				
				?>
			</div>


        </div>
    
	</main>

	<?php include 'footer.php'; ?>
	
</div>

</body>

</html> 