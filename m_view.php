<!doctype html>
<html>
<head>
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
<title>Message View</title>
	<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/m_view.css">
</head>
<body>
	<?php
	session_start();
include("inc/nav_bar_admin.php");
	if($_SESSION['userRole']=="admin"){
	
include_once("inc/dbconnaction.php");

//update section
if(isset($_POST['uID'])){
	$uID=$_POST['uID'];
	$state=$_POST['m_state'];
	
	$sql2="UPDATE `message` SET `state` = '$state' WHERE `message`.`m_ID` = $uID";
	$result2=mysqli_query($conn,$sql2) ;

if($result2){
	?>
	<script>alert("Updated!")</script>
		<?php
	$result=NULL;
	$sid=NULL;
	header("location:m_view");
}else{
	?>
	<script>alert("Something Wrong!")</script>
		<?php
	
	$result=NULL;
	$sid=NULL;
	header("location:m_view");
}
}		
//delete section
if(isset($_POST['sid'])){
	
	$sid=$_POST['sid'];
	
$sql0="DELETE FROM `message` WHERE `message`.`m_ID` =$sid ";

$result0=mysqli_query($conn,$sql0) ;

if($result0){
	?>
	<script>alert("Message Deleted!")</script>
		<?php
	$result=NULL;
	$sid=NULL;
	header("location:m_view");
}else{
	?>
	<script>alert("Something Wrong!")</script>
		<?php
	
	$result=NULL;
	$sid=NULL;
	header("location:m_view");
}
	
}		
		
$sql="SELECT * FROM `message` ORDER BY state DESC";
$result=mysqli_query($conn,$sql);
$no=mysqli_num_rows($result);
if($no>0){
?>
	
<div class="container">
<div class="row" style="display: -webkit-flex; /* Safari */-webkit-flex-wrap: wrap; /* Safari 6.1+ */   display: flex;  flex-wrap: wrap;-webkit-flex-direction:row-reverse; 
  flex-direction:row;
">
<?php
$x=0;
while($row=mysqli_fetch_assoc($result)){
	$x++;
	?>
			<div class="messages ">
			<!--unread active-->
            <div href="#" class="messages__item col-md-3" >
                <div class="name">
                        <?php echo $row['name'];?>
                	<br>	
					<?php echo $row['email'];?>    
				</div>
<div class="date">
<?php echo $row['m_time'];?><br>	
&nbsp;<?php echo $row['m_date'];?>
						<br>
<div class="btn btn-xs btn-<?php $tx=$row['state']; switch($tx){
			case  "seen"  :echo "success";break;
			case  "n_seen"	:echo "warning";break;
			
	} ?>"><?php echo $row['state'];?></div>
                    </div>
                    <div class="content">
                        <?php echo $row['message'];?>
	<div class="row" >
		<div class="col-md-12">
<form action="m_view" method="post" style="float: left;">
	<button class="btn btn-danger btn-xs" style="margin-right: 4px">Delete
	</button>
	<input type="hidden" name="sid" value="<?php echo $row['m_ID'] ;?>" />	
		</form></div></div>
		<div class="row">
		<div class="col-md-12">
<form action="m_view" method="post" style="float: right;" >
	<button class="btn btn-success btn-xs" type="submit" >Save</button>
<input type="hidden" name="uID" value="<?php echo $row['m_ID'] ;?>" />
<select class="form-control" id="batchNo" name="m_state" style="width: auto;display: inline" >
	<option value="n_seen" id="b1" <?php if($row['state'] == 'seen'){ echo"selected" ;}?>>
		Mark as a Not Seen</option>
    <option value="seen" id="b2" <?php if($row['state'] == 'n_seen'){ echo"selected" ;}?>>Mark as a Seen</option>
    
  </select></form></div></div>
						
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
echo "No Messages Available";	
	
}
		}else{
		
		header("location:login");
	}
	?>
     
    </div>
	<!--scripts-->	  
<?php include('inc/scripts.php')?>
</body>
</html>