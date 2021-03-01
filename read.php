<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title>PWC OBA Admin Pannel</title>
	  
       <link rel="stylesheet" href="css/bootstrap.css" >
       <link rel="stylesheet" href="css/styles_login.css">
<body style="color:aliceblue;">
<?php 
include_once("inc/dbconnaction.php");

$sql="select * from pwcobamem;";

$result=mysqli_query($conn,$sql);

$no=mysqli_num_rows($result);

if($no>0){
	?>
<div class="table-responsive">
<table align="center">
	<tr>
	<th>|First Name |</th>
	<th>Last Name |</th>
	<th>Age |</th>
	<th>Contact No |</th>	
	</tr>

<?php
$x=0;
while($row=mysqli_fetch_assoc($result)){
	$x++;
	?>
	
	<tr class="success" >
	<td><?php echo $row['mem_fName'] ;?></td>
	<td><?php echo $row['mem_lName'] ;?></td>
	<td><?php echo $row['mem_Age'];?></td>	
	<td><?php echo $row['mem_4No'];?></td>	
	</tr>
	
<?php	
	
}
?>
	</table>
	</div>
<?php	
}else{
echo "No records";	
	
}

?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js" ></script>
</body>

</html>

