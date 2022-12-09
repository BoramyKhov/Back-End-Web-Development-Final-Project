<!DOCTYPE html> 
<html lang = "en">

<head>
	<title> The Bakery </title> 
	<meta charset = "utf-8"> 
	<meta name = "viewport" content = "width=device-width, initialscale=1.0">
	<link rel = "stylesheet" href = "style.css" media = "screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<!-- Importing Different Symbols and Font --> 
	<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<link rel = "stylesheet" href = 'https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'>
	<script src = "script.js"></script>

	<script type="text/javascript">
		function do_login()
		{
		 var email=$("#emailid").val();
		 var pass=$("#password").val();
		 if(email!="" && pass!="")
		 {
		  $("#loading_spinner").css({"display":"block"});
		  $.ajax
		  ({
		  type:'post',
		  url:'do_login.php',
		  data:{
		   do_login:"do_login",
		   email:email,
		   password:pass
		  },
		  success:function(response) {
		  if(response=="success")
		  {
			window.location.href="index.php";
		  }
		  else
		  {
			alert("Wrong Details");
		  }
		  }
		  });
		 }
		
		 else
		 {
		  alert("Please Fill All The Details");
		 }
		
		 return false;
		}
		</script>

</head>

<body onload = "load()">
<!-- Liquid Layout for Website -->
<div id = "wrapper"> 

	<?php include 'header.php'; ?>
	
	<main>
		<section class="about-us-video">
			<h2>Login Form</h2>
			<form method="post" action="do_login.php" onsubmit="return do_login();">
				<div class="FormRow">
					<label for="Username">Username:</label>
			 <input type="text" name="emailid" id="emailid" placeholder="Enter Username">
				</div>
			 <br>
			 <div class="FormRow">
				<label for="Password">Password:</label>
			 <input type="password" name="password" id="password" placeholder="***********">
			 </div>
			 <br>
			 <div class="FormRow">
			 <input type="submit" name="login" value="DO LOGIN" id="login_button">
			 </div>
			</form>
		</section>
	</main>

	<?php include 'footer.php'; ?>
	
</div>

</body>

</html> 