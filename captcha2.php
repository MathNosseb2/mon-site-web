<?php
	session_start();
	$code=rand(1000,9999);
	$_SESSION["code"]=$code;
	$image = imagecreatetruecolor(50, 24);
	$background = imagecolorallocate($image, rand(0,255), rand(0,255), rand(0,255)); //background color 
	$forground = imagecolorallocate($image, 255, 255, 255);//text color 
	imagefill($image, 0, 0, $background);
	imagestring($image, 5, 5, 5,  $code, $forground);
	header("Cache-Control: no-cache, must-revalidate");
	header('Content-type: image/png');
	imagepng($image);
	imagedestroy($image);


$random = rand(1,2)
?>