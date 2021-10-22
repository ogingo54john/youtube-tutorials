<?php


function processjpg($filename)
{
    list($width, $height) = getimagesize($filename);
    $newheight = (200 * $height) / $width;
    $imagetruecolor = imagecreatetruecolor(200, $newheight);
    $newimage = imagecreatefromjpeg($filename);
    imagecopyresampled($imagetruecolor, $newimage, 0, 0, 0, 0, 200, $newheight, $width, $height);
    imagejpeg($imagetruecolor, 'newjpg.jpg', 80);
    echo $filename . " Processed";
};
function processpng($filename)
{
    list($width, $height) = getimagesize($filename);
    $newheight = (200 * $height) / $width;
    $imagetruecolor = imagecreatetruecolor(200, $newheight);
    $newimage = imagecreatefrompng($filename);
    imagecopyresampled($imagetruecolor, $newimage, 0, 0, 0, 0, 200, $newheight, $width, $height);
    imagepng($imagetruecolor, 'newpng.png', 8);
    echo $filename . " Processed";
};
