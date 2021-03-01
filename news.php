<!doctype html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
<title>News</title>
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/news.css">
	<style>.navbar{border-radius: 0px}</style>
</head>

<body>
	<?php include('inc/nav_bar.php')?>

	<?php
	
include_once("inc/dbconnaction.php");

$sql="select * from news  ORDER BY n_id DESC";
$result=mysqli_query($conn,$sql);
$no=mysqli_num_rows($result);
if($no>0){
	?>
<div class="container">	
<div class="row"  style="display: -webkit-flex; /* Safari */
  -webkit-flex-wrap: wrap; /* Safari 6.1+ */
  display: flex;
  flex-wrap: wrap;">

<?php
$x=0;
while($row=mysqli_fetch_assoc($result)){
	$x++;
	
	?>
	
	 <div class="col-sm-6 col-md-4 col-xs-12" >
    <div class="thumbnail">
      <img src="inc\uploads_news\<?php echo $row['n-img']; ?>" alt="news image">
      <div class="caption">
        <h3 style="font-family: 'wales'"><?php echo $row['n_h'];  ?></h3>
        <p style="font-family: 'dis'"><?php echo $row['n_d'];  ?></p>
        
        
      </div>
    </div>
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
	
	
</body>
	<?php include('inc/scripts.php')?>
</html>