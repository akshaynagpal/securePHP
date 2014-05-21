<?php
/*Returns an array with up to 7 elements. Not all image types will include the channels and bits elements.

1>>Index 0 and 1 contains respectively the width and the height of the image.
2>>Index 2 is one of the IMAGETYPE_XXX constants indicating the type of the image.
3>>Index 3 is a text string with the correct height="yyy" width="xxx" string that can be used directly in an IMG tag.
4>>mime is the correspondant MIME type of the image. 
5>>channels will be 3 for RGB pictures and 4 for CMYK pictures.
6>>bits is the number of bits for each color.
*/

// CODE STARTS HERE.
imagecreatetrue
$filename="p5.jpg";

print_r($size);

//CODE ENDS HERE.

?>  