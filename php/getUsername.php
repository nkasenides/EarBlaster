<?php
	if ($_SESSION["userid"]=="") header ('Location: login.php');
	else echo $_SESSION["userid"];
	
?>