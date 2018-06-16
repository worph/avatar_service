<?php	

	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	$prefix="avatar";
	$id = rand(1,75);
	$filename = "avatar-".str_pad($id, 3, '0', STR_PAD_LEFT).".jpeg";
	//return the file URL	
	$storage_folder="avatars"; //remember to set right on 777 on this folder
	$storage_folder="/".$prefix."/".$storage_folder."/";
	$actual_link = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
	$finallink = $actual_link.$storage_folder.$filename;
	$finallink = str_replace("//", "/", $finallink);
	echo $httpheader.$finallink;
?>
 