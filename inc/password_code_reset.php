<?php
session_start();
if(isset($_POST['code'])){
include('dbconnaction.php');	
$code=$_POST['code'];	
$pass=$_POST['pass1'];
//password encryption
$pass=md5($pass);
$pass=sha1($pass);
		
$sql="SELECT * FROM `login` WHERE `c_code`='$code'";
$result=mysqli_query($conn,$sql);	
$no=mysqli_num_rows($result);
if($no>0){
	$sql0="UPDATE `login` SET `pass` = '$pass' WHERE `login`.`c_code` ='$code'";
	$result1=mysqli_query($conn,$sql0);
	if($result1){
		//conformation code genrating
$c1=rand(0,9);//0-9
$c2=rand(10,99);//0-99
$c3=chr(rand(97,122));//a-z
$c4=rand(0,9);//0-9
$c5=chr(rand(65,90));//A-Z
$code1=$c1.$c2.$c3.$c4.$c5;
$sql1="UPDATE `login` SET `c_code` = '$code1' WHERE `login`.`c_code` ='$code'";	
$result0=mysqli_query($conn,$sql1);
$_SESSION['message']="pw_reset";
header("location:../alert");
		
	}else{
		$_SESSION['message']="pw_reset_x";
		header("location:../alert");
	}
	
}else{
	$_SESSION['message']="code_x";
	header("location:../alert");
	
}	
			
	}?>