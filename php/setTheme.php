<?php

	if ($currentTheme == 1) 
		echo '<link href="styleIndustry.css" rel="stylesheet" type="text/css">';
	else if ($currentTheme == 2) 
		echo '<link href="styleNature.css" rel="stylesheet" type="text/css">';
	else if ($currentTheme == 3) 
		echo '<link href="styleHellfire.css" rel="stylesheet" type="text/css">';
	else if ($currentTheme == 4) 
		echo '<link href="styleDeepSea.css" rel="stylesheet" type="text/css">';
	else if ($currentTheme == 5) 
		echo '<link href="styleMajestic.css" rel="stylesheet" type="text/css">';
	else if ($currentTheme == 6)
		echo '<link href="stylePlain.css" rel="stylesheet" type="text/css">';
	else 
		echo '<link href="style.css" rel="stylesheet" type="text/css">';

?>