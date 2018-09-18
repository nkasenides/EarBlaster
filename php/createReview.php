<?php

include("dblogin.php");

$reviewDescription = $_POST["reviewDescription"];
$reviewRating = $_POST["reviewRating"];
$userID = $_GET["userid"];
$productID = $_GET["trackid"];


$sqlFindPreviousReview="SELECT * FROM reviews";
$result=mysql_query($sqlFindPreviousReview);

$flag = false;
$recordID = -1;

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	if ((strtolower($userID) == strtolower($row["name"])) && $productID == $row["product_id"]) {
		$flag = true;
		$recordID = $row["review_id"];
		break;
	}//end if
}//end while

if ($flag) {
	$sqlInsert = "UPDATE reviews SET review=\"" . $reviewDescription . 
	"\", rating=\"" . $reviewRating . "\"
	WHERE review_id=\"" . $recordID . "\"";
	$resultInsert = mysql_query($sqlInsert);
	if(! $resultInsert ) die(mysql_error());
	header ('Location: ../track.php?trackid=' . $productID);
}//end if review exists
else {
	$sqlInsert = "INSERT INTO reviews(product_id, name, review, rating) 
	VALUES (\"". $productID. "\", \"" . $userID . "\", \"" . $reviewDescription . "\", \"" . $reviewRating . "\")";
	$resultInsert = mysql_query($sqlInsert);
	if(! $resultInsert ) die(mysql_error());
	header ('Location: ../track.php?trackid='  . $productID);
}//end if review doesnt exist
	
?>