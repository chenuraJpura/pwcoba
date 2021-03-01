<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>Contact</title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
	<!--Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/site.webmanifest">
<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#7a7a7a">
<meta name="msapplication-TileColor" content="#603cba">
<meta name="theme-color" content="#ffffff">
		
		
	 <!--Favicon End -->   
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/contact.css">
	<style>.navbar{border-radius: 0px}</style>
	
	
</head>

<body>

	<?php include('inc/nav_bar.php')?>
	
	<div class="form-box">
		<div class="logo_form">
		<img src="images/crest_black.png" style="max-width: 100px;">
		
		
		</div>
  <h1>Contact Us</h1>
  <p>if any problem or information please contact us</p>
  <form action="inc/message" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input class="form-control" id="name" type="text"  name="Name" maxlength="50" required >
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input class="form-control" id="email" type="email" name="Email" maxlength="50" required>
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
		<br>	
      <label for="message">Max 100 Words </label>
      <textarea class="form-control" id="message" name="Message" maxlength="1000" required></textarea>
    </div>
	 <div class="form-group">
    <input class="btn btn-primary" type="submit" value="Submit" name="Send" />
    </div>
  </form>
</div>
	
	
</body>
	<?php include('inc/scripts.php')?>
</html>
