<!doctype html>
<html>
<head>
<link rel="icon" href="images/appLogo.png">
<meta charset="utf-8">
<title>Search - EarBlaster</title>
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

	<div class="menu">
    	<h2> Track Searching </h2>
    	<p>Enter a keyword to search for a <strong>track name</strong>, <strong>artist</strong>, <strong>album</strong> or <strong>genre</strong>: </p>
        <br>
     <form class="loginForm" name="searchForm" method="post" action="searchResults.php">
	<p>
	  <input type="text" name="keyword" placeholder="Enter a keyword..." value="" class="text" required>
	</p>
    
	<p><input type="submit" name="Submit" value="Search" class="button">
	</p>
	</form>
    <br><br>    
        
        
    </div>

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