<?php
// ceck if admin's session is created
	if(!isset($_SESSION['admin']) && $_SESSION['admin'] != true){
		header("Location: index.php");
	}
?>
