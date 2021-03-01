<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="css/bootstrap.css" >
    <!--<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">-->
    <link rel="stylesheet" href="css/baguetteBox.min.css">
	<link rel="stylesheet" href="css/gallery.css">
     <!--Favicon -->
	  	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
		
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	 <!--Favicon End --> 
    <title>Gallery</title>
</head>
	
<body>

  <?php include('inc/nav_bar.php');?>

		<?php
	
include_once("inc/dbconnaction.php");

$sql="select * from  gallery";
$result=mysqli_query($conn,$sql);
$no=mysqli_num_rows($result);
if($no>0){
	?>

<div class="container gallery-container">
<div class="tz-gallery">
     
<?php
$x=1;
while($row=mysqli_fetch_assoc($result)){
	$x++;
	
	?>
<div class="col-md-4">
                <a class="lightbox" href="images/gallery/<?php echo $row['pic_src'];  ?>">
                    <img src="images/gallery/<?php echo $row['pic_src'];  ?>" alt="<?php echo $row['pic_alt'];  ?>" width="100%">
                </a>
            </div>
        

   		
<?php
}
?>
</div>
</div>
	
<?php	
}else{
echo "No News Available";	
	
}
	?>
	

	
	
<div class="container gallery-container">
<div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/gallery/gal9.png">
                    <img src="images/gallery/gal9.png" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/gallery/gal2.png">
                    <img src="images/gallery/gal2.png" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/gallery/gal3.png">
                    <img src="images/gallery/gal3.png" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="images/gallery/gal4.png">
                    <img src="images/gallery/gal4.png" alt="Traffic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/gallery/gal5.png">
                    <img src="images/gallery/gal5.png" alt="Coast">
                </a>
            </div> 
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/gallery/gal6.png">
                    <img src="images/gallery/gal6.png" alt="Rails">
                </a>
            </div>
        </div>
		<div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/gallery/gal12.png">
                    <img src="images/gallery/gal12.png" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/gallery/gal13.png">
                    <img src="images/gallery/gal13.png" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/gallery/gal8.png">
                    <img src="images/gallery/gal8.png" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="images/gallery/gal14.png">
                    <img src="images/gallery/gal14.png" alt="Traffic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/gallery/gal16.png">
                    <img src="images/gallery/gal16.png" alt="Coast">
                </a>
            </div> 
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/gallery/gal6.png">
                    <img src="images/gallery/gal6.png" alt="Rails">
                </a>
            </div>
        </div>

    </div>

</div>

<script src="js/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
	<!--scripts-->	  
<?php include('inc/scripts.php')?>
</body>
</html>