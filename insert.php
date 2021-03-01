<?php 
session_start();
if(isset($_SESSION['userID']) && $_SESSION['userRole']=="admin"){
	
}else{
	header("location:login");
}

$pageName="Admin Insert";
?> 

<!--Header Start-->
<?php include_once('inc/signUp_head.php'); ?> 
<!--Header ends-->

  <body>
<?php 
include("inc/nav_bar_admin.php"); ?>

<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
		  
<form action="saveStudent" method="post" style="padding: 40px">
  <div class="form-group">
    <label for="FulName">First Name:</label>
    <input type="text" class="form-control" name="mem_fName" id="FulName" required>
  </div>
  <div class="form-group">
    <label for="laslName">Last Name:</label>
    <input type="text" class="form-control" name="mem_lName" id="lasName" required>
  </div>			
  <div class="form-group">
    <label for="email">E-mail Address:</label>
    <input type="email" class="form-control" name="mail" id="email" required>
  </div>
  <div class="form-group">
    <label for="mobiNo">Mobile No:</label>
    <input type="tel" class="form-control" name="mem_4No" id="mobiNo" required>
  </div>			
  <div class="form-group">
    <label for="pwd1">Password:</label>
    <input type="password" class="form-control" id="pwd1" name="password1" required>
  </div>
  <div class="form-group">
    <label for="pwd2">Re Enter Password:</label>
    <input type="password" class="form-control" id="pwd2" name="password2" >
  </div>
	 <div class="form-group">
    <label for="town">Home Town:</label>
    <input type="text" class="form-control" name="town" id="town" required>
  </div>
	<div class="form-group">
    <label for="bd">Date of Birthday:</label>
    <input type="date" class="form-control" name="bd" id="bd" required style="line-height: 15px">
  </div>
<div class="form-group">			
 <label for="batchNo">Select the  Batch No:</label>
  <select class="form-control" id="batchNo" name="batch_No" required>
    <option value="2010 A/L">2010 A/L</option>
    <option value="2011 A/L">2011 A/L</option>
    <option value="2012 A/L">2012 A/L</option>
    <option value="2013 A/L">2013 A/L</option>
    <option value="2014 A/L">2014 A/L</option>
    <option value="2015 A/L">2015 A/L</option>
    <option value="2016 A/L">2016 A/L</option>
    <option value="2017 A/L">2017 A/L</option>
    <option value="2018 A/L">2018 A/L</option>
    <option value="2019 A/L">2019 A/L</option>
  </select>
</div>
<div class="form-group">			
 <label for="club">Select Your Society</label>
  <select class="form-control" id="club" name="club" required>
    <option value="Science/Maths Society">Science/Maths Society</option>
    <option value="Commerce Society">Commerce Society</option>
    <option value="Art Society">Art Society</option>
   </select>
</div>

<div class="form-group">			
 <label for="sports">Sports you done </label>
  <select class="form-control" id="sports" name="sports" required>
    <option value="Cricket">Cricket</option>
    <option value="Rugby">Rugby</option>
    <option value="Basketball">Basketball</option>
    <option value="Football">Football</option>
    <option value="Chess">Chess</option>
    <option value="Table Tenis">Table Tenis</option>
    <option value="Hocky">Hocky</option>
   </select>
</div>		

  <button type="submit"  class="btn btn-success" style="width: 100%">REGISTER</button>
			
</form>  
		  
		  
		  
	</div>	  
		  
		  
	</div>
	

	</div>

   <!--scripts-->	
  
<?php include('inc/scripts.php')?>
<script>
	  $("form").submit(function() {
  var _txt1 = $('#pwd1').val();
  var _txt2 = $('#pwd2').val();
  
  if (_txt1 == _txt2)
  {
     
     return true;
  }
  else
  {
    alert('Passwords Are Not matching! please try again!');
    return false;
  }
});
	  
	  </script>	  
  </body>
</html>

