<!doctype html>
<html>
<head>
<link rel="icon" href="images/appLogo.png">
<meta charset="utf-8">
<title><?php include("php/getTrackNameFromID.php"); ?> - EarBlaster</title>
<?php 
include("php/getTheme.php"); 
include("php/setTheme.php");
?>
<link href="loginStyle.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/audioPlayer.js"> </script>
</head>

<body>

<!--PAGE CONTAINER-->
<div class="container">

<!-- HEADER -->
  <div class="header">
  <!--Top section-->
  <div> 
      <div class="clearfloat"> </div>
      <a href="#"><img class="headerLogo" src="images/logo.png" alt="EarBlaster Logo" style=" display:block;" /></a>
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

        	<?php 
		if (isset($_GET["status"])) {
			$status = $_GET["status"];
			if ($status == "trackFail") {
				echo '<div class="error"><p> Could not add track to playlist. </p></div>';
			}//end if fail
			if ($status == "trackOk") {
				echo '<div class="success"><p> Track added to playlist. </p></div>';
			}//end if success
			if ($status == "trackExists") {
				echo '<div class="error"><p> Track already exists in this playlist. </p></div>';
			}//end if exists
		}//end is isset()
	
	?>

    <div class="trackBlock">
		<?php include("php/displayTrack.php"); ?>
        <hr>
     <form class="loginForm" name="reviewForm" method="post" action="php/createReview.php?userid=<?php echo $_SESSION["userid"]; ?>&trackid=<?php echo $_GET["trackid"]; ?>" >
	<p><?php echo $_SESSION["userid"];?>'s Review:</p>
	<p>
    	<!--LONG LINE FOLLOWING-->
	  <textarea style="height:80px" cols=50 rows=20 type="text" name="reviewDescription" placeholder="Write your review..." size="1000" value="" class="text" required></textarea>
	</p>
    
    <p>Select your rating:
    <select name="reviewRating">
    	<option value="0">0</option>
  		<option value="1">1</option>
  		<option value="2">2</option>
 		<option value="3">3</option>
 		<option value="4">4</option>
        <option value="5" selected>5</option>
  		<option value="6">6</option>
 		<option value="7">7</option>
 		<option value="8">8</option>
  		<option value="9">9</option>
  		<option value="10">10</option>
	</select> </p>
    
    <br><br>
    
	<p><input type="submit" name="Submit" value=" Submit Review " class="button">
	</p>
	</form>
    </div><!--end trackblock>
    


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