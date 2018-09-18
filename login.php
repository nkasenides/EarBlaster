<!doctype html>
<html>
<head>
<link rel="icon" href="images/appLogo.png">
<meta charset="utf-8">
<title>Log In - EarBlaster</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="loginStyle.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content="30">
</head>

<body>

<!--PAGE CONTAINER-->
<div class="container">

<!-- HEADER -->
  <div class="header">
  <!--Top section-->
  <div> 
      <a href="#"><img class="headerLogo" src="images/logo.png" alt="EarBlaster Logo" width="100px" height="80px" style=" display:block;" /></a>
        <div class="clearfloat"> </div>
  <h1> EarBlaster </h1>
  </div>
  <!--End Top section-->
  
  <!--Panel-->
  <div class="panel">
  
  	<!--About button-->
       <form action="about.php" class="panelItem">
        <input type="submit" value="About" class="panelButton" style="background:url(images/about.png) no-repeat center; background-size:100px 100px;">
      </form>
  
  
  	<!--Create Account Button-->
       <form action="createAccount.php" class="panelItem">
        <input type="submit" value="Create Account" class="panelButton" style="background:url(images/account.png) no-repeat center; background-size:100px 100px;">
      </form>

  </div>
  <!--End Panel-->
  
</div>
<!-- END HEADER -->

<!-- CONTENT -->
<div class="content">

<!-- LOGIN FORM -->
<div class="loginForm">
	<?php 
		if (isset($_GET["status"])) {
			$status = $_GET["status"];
			if ($status == "badInfo") {
				echo '<p class="error"> Username or password incorrect. </p>';
			}//end if bad info
			else if ($status == "userCreated") {
				echo '<p class="success"> User Created. Please Log in. </p>';
			}//end if user created
			else if ($status == "pwdChanged") {
				echo '<p class="success"> Password Changed. Please Log in. </p>';
			}//end if pwd changed
			else if ($status == "accDeleted") {
				echo '<p class="success"> Account Deleted.</p>';
			}//end if account deleted
		}//end is isset()
	
	?>
    
    <script type="text/javascript" src="js/avoidSpace.js"> </script>


	<form name="loginform" method="post" action="php/check-login.php" >
	<p>EarBlaster Login:</p>
	<p>
	  <input type="text" onkeypress="return AvoidSpace(event)" name="user" placeholder="Username..." size="20" value="" class="text" required>
	</p>
	<p>
	  <input type="password" name="password" placeholder="Password..." size="20" value="" class="text"  required>
	</p>
	<p><input type="submit" name="Submit" value=" Log In " class="button">
	</p>
	</form>
</div>
<!-- END LOGIN FORM -->


</div>
<!-- END CONTENT-->
  
  
<!-- FOOTER -->
  <div class="footer">
    <p>Designed by Nicos</p>
  </div>
<!-- END FOOTER-->

</div>
<!-- END CONTAINER-->

</body>
</html>