<!doctype html>
<html>
<head>
<link rel="icon" href="images/appLogo.png">
<meta charset="utf-8">
<title>Add Playlist - EarBlaster</title>
<?php 
include("php/getTheme.php"); 
include("php/setTheme.php");
?>
<link href="loginStyle.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<!--PAGE CONTAINER-->
<div class="container">

<!-- HEADER -->
  <div class="header">
  <!--Top section-->
  <div> 
      <div class="clearfloat"> </div>
      <a href="#"><img class="headerLogo" src="images/logo.png" alt="EarBlaster Logo" width="100px" height="80px" style=" display:block;" /></a>
      <div class="clearfloat"> </div>
  <h1> EarBlaster </h1>
  <?php
  	include("php/userLoggedIn.php");
  ?>
  </div>
  <!--End Top section-->
  
  <!--Panel-->
  <div class="panel">
      
      	<!--Back button-->
      <form class="panelItem">
        <input type="submit" value="Back" class="panelButton" style="background:url(images/back.png) no-repeat center; background-size:100px 100px;" onclick="javascript:history.back()">
      </form>
      
      
   <!--MY MUSIC BUTTON-->   
      
      <div class="dropdownMenu">
  		<button class="dropButton" style="background:url(images/sound.png) no-repeat center; background-size:100px 100px;">My Music</button>
  		<div class="dropdownContent">
            <a href="search.php">Find Track</a>
    		<a href="allTracks.php">All Tracks</a>
    		<a href="news.php">News</a>
    		<a href="allGenres.php">Genres</a>
    		<a href="allOffers.php">Special Offers</a>
            <a href="about.php">About</a>
  		</div>
	</div>
    
   <!--MY ACCOUNT BUTTON-->
      <div class="dropdownMenu">
  		<button class="dropButton" style="background:url(images/account.png) no-repeat center; background-size:100px 100px;">My Account</button>
  		<div class="dropdownContent">
    		<a href="myPlaylists.php?userid=<?php include("php/getUsername.php");?>">My Playlists</a>
    		<a href="myReviews.php?userid=<?php include("php/getUsername.php");?>">My Reviews</a>
            <a href="myAccount.php?userid=<?php include("php/getUsername.php");?>">Account Settings</a>
            <a href="php/logout.php">Log Out</a>
  		</div>
	</div>
    
    
    
  </div>
  <!--End Panel-->
  
</div>
<!-- END HEADER -->

<!-- CONTENT -->
<div class="content">
      
    <div class="trackBlock">
    	<h2>New Playlist</h2>
        	<?php 
		if (isset($_GET["status"])) {
			$status = $_GET["status"];
			if ($status == "exists") {
				echo '<p class="error"> The playlist name you entered already exists. </p>';
			}//end if playlist exists
		}//end is isset()
	
	?>
        	<div class="loginForm">
        	<form name="newPlaylist" method="post" action="php/createPlaylist.php?userid=<?php echo $_SESSION["userid"];?>" >
			<p>Enter a name for your new playlist:</p>
			<p>
			<input type="text" name="name" placeholder="Playlist name..." size="20" value="" class="text" required>
			</p>
			<p><input type="submit" name="Submit" value=" Create Playlist " class="button">
			</p>
			</form>
            </div>
    </div><!--end trackblock-->
    
    <div class="loginForm">
	<?php 
		if (isset($_GET["status"])) {
			$status = $_GET["status"];
			if ($status == "userExists") {
				echo '<p class="error"> The username you entered already exists. </p>';
			}//end if user exists
			else if ($status == "passwordsDontMatch") {
				echo '<p class="error"> The passwords you entered do not match. </p>';
			}//end if passwords dont match
			else if ($status == "fail") {
				echo '<p class="error"> Failed to create user. </p>';
			}//end if sql failure to create user
			else if ($status == "badUsername") {
				echo '<p class="error"> Usernames may not start with a number. </p>';
			}//end if sql failure to create user
		}//end is isset()
	
	?>

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