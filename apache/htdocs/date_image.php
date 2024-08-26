<?php
header('Content-Type: image/png');
$image = imagecreatefromjpeg('/var/www/static/images/clock.png');

$color = imagecolorallocate($image, 255, 255, 255);
$font = 5;
$date = date('Y-m-d H:i:s');
$x = 10;
$y = 10;

imagestring($image, $font, $x, $y, $date, $color);
imagejpeg($image);
imagedestroy($image);
?>
