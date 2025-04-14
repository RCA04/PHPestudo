<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray= imagecolorallocate($image, 100, 100 ,100);

imagestring($image, 5 , 450, 150, "Certificado", $titleColor);
imagestring($image, 5 , 440, 350, "Divanei Aparecido", $titleColor);
imagestring($image, 3 , 440, 370, utf8_decode("Concluído em:").date("d/m/Y"), $gray);


imagejpeg($image, "Certificado-".date("Y-m-d").".jpg", 90);
imagedestroy($image);


?>