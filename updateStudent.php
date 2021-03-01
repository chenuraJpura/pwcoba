<?php 
include_once("inc/dbconnaction.php");

$mem_ID=$_POST['mem_ID'];
$mem_fName=$_POST['mem_fName'];
$mem_lName=$_POST['mem_lName'];
$mem_Age=$_POST['mem_Age'];
$mem_4No=$_POST['mem_4No'];
$mem_town=$_POST['mem_Town'];
$mem_DOB=$_POST['mem_DBA'];
$mem_batch=$_POST['mem_batch'];

$sql="UPDATE pwcobamem SET mem_fName = '$mem_fName',mem_lName = '$mem_lName',mem_Age = '$mem_Age' ,mem_4No = '$mem_4No' ,mem_DBA ='$mem_DOB', mem_BatchN='$mem_batch' ,mem_town='$mem_town'  WHERE mem_ID = $mem_ID;";

$result=mysqli_query($conn,$sql);

if($result){
	
	?>
	<script> alert("Updated!");
		window.location="update";
	</script>
<?Php
	
}else{
?>
<script>alert("Update Failed!")
	window.location="update";
	</script>
	
<?php
}
?>
<?php include('inc/scripts.php')?>



