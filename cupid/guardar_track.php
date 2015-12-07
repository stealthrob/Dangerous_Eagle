<?php
include 'models.php';
if(isset($_POST['id'])){
	$a = Track::find($_POST['id']);
	if(isset($_POST['name']))$a->Name = $_POST['name'];
	if(isset($_POST['composer']))$a->Composer = $_POST['composer'];
	if(isset($_POST['miliseconds']))$a->Milliseconds = $_POST['milliseconds'];
	if(isset($_POST['bytes']))$a->Bytes = $_POST['bytes'];
	if($a->save()){
		$response = new stdClass;
		$response->name = $a->Name;
$response->artist = $a->Composer;
$response->milliseconds = $a->Milliseconds/1000;
$response->bytes = $a->Bytes;
		echo json_encode($response);
		return;
	}
}
else{
	$a = Track::create($_POST['name'],$_POST['composer'],$_POST['milliseconds'],$_POST['bytes'],$_POST['unitprice'],intval($_POST['album']));
	if($a->save()){
		$response = new stdClass;
		$response->name = $a->Name;
$response->artist = $a->Composer;
$response->title = $a->Album;
$response->milliseconds = $a->Milliseconds/1000;
$response->bytes = $a->Bytes;
		echo json_encode($response);
		return;
	}
}
?>
