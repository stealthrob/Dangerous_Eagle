<?php
include 'models.php';
if(isset($_GET['id'])){
	$a = Track::find($_GET['id']);

	
	if($a->delete()){
		header("Location: index.php");
	}
}
else{
	header("Location: index.php");
}
?>
