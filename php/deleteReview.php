<?php

include("dblogin.php");
$reviewID = $_GET["reviewid"];
$trackID = $_GET["trackid"];
$sql="DELETE FROM reviews WHERE review_id=\"" . $reviewID . "\"";
$result=mysql_query($sql);

if(!$result) die(mysql_error());
else {
	echo '
		<script>
			window.alert("Review Deleted");
			document.location = "../track.php?trackid=' . $trackID . '";
		</script>
		';
}
?>