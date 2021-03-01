<?php 
include_once("dbconnaction.php");

$mem_ID=$_POST['mem_ID'];
$mem_fName=$_POST['mem_fName'];
$mem_lName=$_POST['mem_lName'];
$mem_4No=$_POST['mem_4No'];
$mem_town=$_POST['mem_Town'];

$sql1="UPDATE pwcobamem SET mem_fName = '$mem_fName',mem_lName = '$mem_lName',mem_4No = '$mem_4No' ,mem_town='$mem_town'  WHERE mem_ID = $mem_ID;";	
	
$result1=mysqli_query($conn,$sql1);
	
if($result1){
		?>
	<script> alert("Updated!");
		window.location="../home";
	</script>
<?Php
}else{
	?>
<script>alert("Update Failed!")
	window.location="home";
	</script>
	
<?php
	
}	
?>



