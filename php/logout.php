
<?php
session_start();
$_SESSION["userid"]=="";
session_destroy(); 

if (isset($_GET["status"])) {
	if ($_GET["status"] == "pwdChanged") header ('Location: ../login.php?status=pwdChanged');
	else if ($_GET["status"] == "accDeleted") header ('Location: ../login.php?status=accDeleted');
}//end if isset
else header ('Location: ../login.php');

?>
