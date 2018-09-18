<?php

include("dblogin.php");
$usernameToSearch = $_POST["user"];
$password = $_POST["password"];
$passwordConfirm = $_POST["passwordConfirm"];
$sql="SELECT username FROM login";
$result=mysql_query($sql);

$flag = false;

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$usernameToSearch_N = str_replace(' ', '', $usernameToSearch);
	$rowUsername_N = str_replace(' ', '', $row["username"]);
	if (strtolower($usernameToSearch_N) == strtolower($rowUsername_N)) {
		$flag = true;
		break;
	}//end if
}//end while

if ($flag) {
	header ('Location: ../createAccount.php?status=userExists');
}//end if username exists
else {
	if ($passwordConfirm != $password) {
		header ('Location: ../createAccount.php?status=passwordsDontMatch');
	}//end if passwords are not the same
	else if (!ctype_alpha($usernameToSearch[0])) {
		header ('Location: ../createAccount.php?status=badUsername');
	}//end if username starts with a number
	else {
		$password = md5($password);
		$sqlInsert = "INSERT INTO login (username, password)
		VALUES ('". $usernameToSearch . "', '" . $password . "')";
		$resultInsert = mysql_query($sqlInsert);

		if(! $resultInsert ) {
			//header ('Location: ../createAccount.php?status=fail');
			die(mysql_error());
        }//end if user not created
		else {
    		header ('Location: ../login.php?status=userCreated');
			die(mysql_error());
		}//end if user created
	}//end if passwords are the same
}//end if username doesnt exist
	
?>