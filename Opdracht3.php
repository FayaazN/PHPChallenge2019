
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Fayaaz Nabie
 * Date: 23-9-2019
 * Time: 11:54
 */
/*
$boodschappen = ["aardappelen" , "aardbeien" , "3 pakken melk" , "yoghurt"];

echo $boodschappen;
*/


$boodschappen = array("aardappelen", "aardbeien", "3 pakken melk", "yoghurt");
foreach ($boodschappen as $boodschap) {
    echo "$boodschap <br> <img alt='$boodschap' src='img/$boodschap.jpg'> <br>";
}



?>
</body>
</html>
