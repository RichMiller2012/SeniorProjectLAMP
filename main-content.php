<?php

	if($_GET['state'] === 'category'){
		include("php/categories.php");
	}
	
	else if ($_GET['state'] === 'text'){
		include("php/textblock.php");
	}
?>