<?php 

session_start();
$user=$_POST["user"];
$pass=$_POST["password"];
include("dblogin.php");
$sql="SELECT * FROM login";
$result=mysql_query($sql);

$pass = md5($pass);

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	if($user==$row["username"] && $pass==$row["password"]){
		$_SESSION["userid"]=$row["username"];
		header ('Location: ../news.php');
	}//end if
}//end while

if ($_SESSION["userid"]=="") {
	header ('Location: ../login.php?status=badInfo');
}//end if

?>