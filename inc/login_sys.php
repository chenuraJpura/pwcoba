<?php session_start();
if (isset($_POST['userName'])&& isset($_POST['password'])){
	$un=$_POST['userName'];
	$pw=$_POST['password'];
	//decryptation//
	$pw=md5($pw);
	$pw=sha1($pw);
	//decryptation//
	include("dbconnaction.php");
	$sql="select * from login where mail='$un'";
	$sql1="select * from pwcobamem where mem_eMail='$un'";
    $result=mysqli_query($conn,$sql);
	$result1=mysqli_query($conn,$sql1);
    $no=mysqli_num_rows($result);
$x=0;$y=0;
if($no>0){	
while($row=mysqli_fetch_assoc($result)){
	$x++;
	$DB_un=$row['mail'] ;
    $DB_pw=$row['pass'] ;
	$DB_role=$row['mem_role'];
	$DB_ID=$row['mem_ID'];
}
while($row1=mysqli_fetch_assoc($result1)){
	$y++;
	$userID=$row1['mem_fName'] ;
	$bN=$row1['mem_BatchN'] ;
}	
if($un==$DB_un && $pw==$DB_pw){$_SESSION['userRole']=$DB_role;
		$_SESSION['userID']=$DB_ID;
	    $_SESSION['userName']=$userID;
		$_SESSION['bN']=$bN;
	    header("location:../home");
}else{
?>
	<script>
			alert("Invalid login Please Try Agin");
			window.location='../login';
    </script>
	<?php	
	}
}else{
	?>
	<script>
			alert("Your Are Not A Member Here Please Sign Up");
			window.location='../login';
    </script>
	<?php	
}
}else{
	header("location:../login");
}
?>