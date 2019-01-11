<?php
header("Content-type: image/png");
$image = imagecreate(100,40);
$barcode_text = $_GET['barcode'];
imagealphablending($image, true);
imagesavealpha($image, true);
$black = imagecolorallocate($image, 0, 0, 0);
$font_height = 40;
$new_width = ((strlen($barcode_text) * 20) + 41);
$image_resized = imagecreatetruecolor($new_width, 40);
imagecopyresized($image_resized, $image, 0, 0, 0, 0, $new_width, 40, 10, 10);
imagettftext($image_resized, $font_height, 0, 1, 40, $black, 'free3of9.ttf', '*'.$barcode_text.'*');
imagepng($image_resized);
imagedestroy($image_resized);
?>