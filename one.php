<?php
$a = imagecreate(500, 500);
$s = imageColorAllocate($a,255,255,255);
$d = imageColorAllocate($a,0,0,0);
imageFill($a,20,120,$d);
imageLine($a,0,0,500,500,$s);
header('content-type:image/png');
imagepng($a);
imageDestroy($a);
?>