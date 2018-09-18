<?php
	//session_start();
	if ($_SESSION["userid"]=="") {
		header ('Location: login.php');
	}//end if
	else {
		$currentUser = $_SESSION["userid"];//For usage in other php files
		echo '<small class="userLoggedIn">User: <span>' . $_SESSION["userid"] . '</span></small>';
	}//end else
?>