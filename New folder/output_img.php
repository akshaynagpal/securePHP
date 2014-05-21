<?php
header('Content-Type: image/jpeg');

$im1=imagecreatefromjpeg("./upload/p5.jpg");
imagejpeg($im1);

?>