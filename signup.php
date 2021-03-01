<?php 
session_start();
$pageName="Sign Up";
?> 

<!--Header Start-->
<?php include_once('inc/signUp_head.php'); ?> 
<!--Header ends-->

  <body>
 
<?php include('inc/nav_bar_sign_Up.php'); ?>

<div class="container">
<div class="row">
<div class="col-md-5 col-md-offset-2 ">
		  
<form action="saveStudent" method="post" style="padding: 20px">
  <div style="float: left;margin-right: 5px;width:100% ">
    <label for="FulName">First Name:</label>
    <input type="text" class="form-control" name="mem_fName" id="FulName" required >
	  
  </div>

  <div style="float: left;width:100% " >
    <label for="laslName">Last Name:</label>
    <input type="text" class="form-control" name="mem_lName" id="lasName" required>
  </div>			
  <div class="form-group" style="width: 100%">
    <label for="email">E-mail Address:</label>
    <input type="email" class="form-control" name="mail" id="email" required>
  </div>
  <div class="form-group" style="width: 100%" >
    <label for="mobiNo">Mobile No:</label>
    <input type="tel" class="form-control" name="mem_4No" id="mobiNo" required>
  </div>			
  <div style="float: left;margin-right: 5px;width:100% ">
    <label for="pwd1">Password:</label>
    <input type="password" class="form-control" id="pwd1" name="password1" required>
  </div>
  <div style="float: left;width:100%">
    <label for="pwd2">Type Again</label>
    <input type="password" class="form-control" id="pwd2" name="password2" >
  </div>
	 <div class="form-group" style="width:100%">
    <label for="town">Town:</label>
    <input type="text" class="form-control" name="town" id="town" required>
  </div>

	<div style="float: left;margin-right: 10px;width:40%" >
    <label for="bd">Birthday:</label>
    <input type="date" class="form-control" name="bd" id="bd" required style="line-height: 15px">
  </div><!--
	<div style="width:100%" class="visible-xs visible-sm" >
    <label for="bd">Birthday:</label>
    <input type="date" class="form-control" name="bd" id="bd" required style="line-height: 15px">
  </div>-->
<div style="float: left;margin-right: 5px;width:40%" >			
 <label for="batchNo">Batch:</label>
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
<!--
	
<div style="width:100%" class="visible-sm visible-xs">			
 <label for="batchNo">Batch:</label>
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
-->	
<div style="float:left;margin-right: 10px;width:40%" >			
 <label for="club">Section</label>
  <select class="form-control" id="club" name="club" required>
    <option value="Science/Maths Society">Science/Maths</option>
    <option value="Commerce Society">Commerce</option>
    <option value="Art Society">Art</option>
   </select>
</div><!--
<div style="float:left;margin-right:10px;width:100% " class="visible-md visible-xs" >			
 <label for="club">Section</label>
  <select class="form-control" id="club" name="club" required>
    <option value="Science/Maths Society">Science/Maths</option>
    <option value="Commerce Society">Commerce</option>
    <option value="Art Society">Art</option>
   </select>
</div>
-->
<div style="float:left;width:40%" >			
 <label for="sports">Sports</label>
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
<!--

<div style="float:left;width:100%" class="visible-xs visible-sm">			
 <label for="sports">Sports</label>
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
-->	
	<div class="form-group">
<div class="checkbox" style="clear: both">
    <label><input type="checkbox" required>I Agreed To OBA Term &amp; Conditions</label>
</div>
  <button type="submit"  class="btn btn-success btn-lg" style="width: 100%">SIGN UP</button>
	</div>		
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











