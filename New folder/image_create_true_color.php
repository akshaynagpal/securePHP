/*
<?php
header ('Content-Type: image/png');
$im=imagecreate(100,100);
imagecolorallocate($im,255,255,0);
imagepng($im);
?>
*/

<?php
header ('Content-Type: image/jpeg');
$x = "./p5.jpg";
$y="./download/p11.jpg";
$im = imagecreatefromjpeg($x);

if(!is_resource($im))
{
     die('Unable to load gd image!');
}
imagejpeg($im,$y);
?>