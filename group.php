<?php
session_start();
if(isset($_SESSION['userID'])){
	
}else{
	header("location:login");
}

$pageName="Friends";
?> 
<!--Header Start-->
<?php include_once('inc/group_head.php'); ?> 
<!--Header ends-->
  <body>
 <?php 
include("inc/selectNavbar.php");

include_once("inc/dbconnaction.php");
$uid=$_SESSION['userID'];
$uN=$_SESSION['userName'];
$bN=$_SESSION['bN'];
if(isset($_POST['search'])){
	$name=$_POST['search'];
	 $sql="SELECT * FROM `pwcobamem` WHERE mem_fName LIKE '%" . $name . "%' OR mem_lName LIKE '%" . $name  ."%' ORDER BY mem_fName ASC"; 
}else{
	$sql="SELECT * FROM `pwcobamem` WHERE `mem_BatchN`='$bN' ORDER BY mem_fName ASC";
}	  


$result=mysqli_query($conn,$sql);

$no=mysqli_num_rows($result);
	  
if($no>0){
	?>
	  <div class="container">
	  <div class="row">
	  <div class="col-md-6 col-md-push-1" style="font-family: 'dis'">
	  <form action="group" method="post">
	  <div class="form-group" >
		  <?php if(isset($_POST['search'])){
		?>	
<button class="btn btn-md btn-success btn-xs visible-xs visible-sm" style="float: left;margin-right: 5px" ><a href="group" style="text-decoration: none;color: white"><span class="glyphicon glyphicon-chevron-left"></span>Back</a></button>	  
<button class="btn btn-md btn-success btn-md visible-md visible-lg" style="float: left;margin-right: 5px" ><a href="group" style="text-decoration: none;color: white"><span class="glyphicon glyphicon-chevron-left"></span>Back</a></button>	  
	
		  <?php
	} ?>
	  <input type="text" name="search" class="form-control" style="float: left;width: 60%;margin-right:5px" value="<?php if(isset($_POST['search'])){ echo $_POST['search'];} ?>" autocomplete="off" >
			  <button class="btn btn-xs btn-warning visible-xs visible-sm"><span class="glyphicon glyphicon-search"></span>Search</button>
			  <button class="btn btn-md btn-warning visible-lg visible-md"><span class="glyphicon glyphicon-search">&nbsp;</span>Search</button>
	</div>
	</form>
    </div>
	</div>
	</div>

  <div class="container">
	  <div class="row" style="display: -webkit-flex; /* Safari */
  -webkit-flex-wrap: wrap; /* Safari 6.1+ */
  display: flex;
  flex-wrap: wrap;">
<?php
$x=0;
while($row=mysqli_fetch_assoc($result)){
	$x++;
	$ID=$row['mem_ID'];
	$sql1="SELECT image FROM `imgtable` WHERE `mem_ID`='$ID'";
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_assoc($result1);
	?>
	
        <div class="col-xs-12 col-sm-6 col-md-6" style="font-family: 'dis';">
                      <div class="well well-sm" style="background-color: white;border-radius: 10px">
                <div class="row">
 <div class="col-sm-4">
 <img src="uploads/<?php if($row1['image']){
		echo $row1['image'];
	}else{echo "default.png";} ?>" alt=""
                             class="img-rounded img-responsive"/>
</div>
<div class="col-sm-6 col-md-8">
<h4 style="text-transform: capitalize"><?php echo $row['mem_fName']; ?>&nbsp;<?php echo $row['mem_lName'];?></h4>
<i class="glyphicon glyphicon-map-marker">&nbsp;
                        </i><span>Town:&nbsp;<?php echo $row['mem_town'];?></span>
                        <p>
                            <i class="glyphicon glyphicon glyphicon-education">&nbsp;</i>Section:&nbsp;<?php       
	$tx=$row['mem_club']; switch($tx){
			case  "Science/Maths Society"  :echo "SCI/MATH";break;
			case  "Commerce Society"	:echo "COMM";break;
			case  "Art Society"	:echo "ART";break;
			
	}?>
                            <br/>
                            <i class="glyphicon glyphicon-tower">&nbsp;</i>Sports:&nbsp;<?php echo $row['mem_sports']; ?>
                            <br/>
                            <i class="glyphicon glyphicon-gift">&nbsp;</i>Birthday:&nbsp;<?php echo $row['mem_DBA'];?></p>
</div>
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
echo "No records";	
	
}




?>




<?php include('inc/scripts.php')?>
  </body>
</html>











