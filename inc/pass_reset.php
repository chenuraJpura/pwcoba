<?php
session_start();
if (isset($_SESSION['userID'])){
	$uid=$_SESSION['userID'];
	$oldPw=$_POST['oldPw'];
	$newPw=$_POST['newPw'];
	//decryptation//
	$oldPw=md5($oldPw);
	$oldPw=sha1($oldPw);
	//decryptation//
	include("dbconnaction.php");
	$sql="select * from login where mem_ID='$uid'";
	$result=mysqli_query($conn,$sql);
	$no=mysqli_num_rows($result);
$x=0;
if($no>0){	
while($row=mysqli_fetch_assoc($result)){
	$x++;
	$DB_pw=$row['pass'] ;
	}
	
if($oldPw==$DB_pw){
	$newPw=md5($newPw);
	$newPw=sha1($newPw);
	$sql1="UPDATE `login` SET `pass` = '$newPw' WHERE `login`.`mem_ID` = '$uid'";
	$result1=mysqli_query($conn,$sql1);
	if($result1){
?>
	<script>
			alert("Password Changed Succesfully!");
			window.location='../home	';
    </script>
	<?php	

	}else{
	?>
<script>
alert("Password Not Changed!")
</script>
<?php		
	}
	}else{
?>
	<script>
			alert("Your Old Password is Wrong!");
			window.location='../setting';
    </script>
	<?php	
	}
}else{
	?>
	<script>
			alert("Something is Wrong!");
			window.location='../home';
    </script>
	<?php	
}
}else{
	header("location:../login");
}
?>