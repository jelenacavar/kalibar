<?php
$img = $_POST['imgBase64'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);
$imgName = date("Y-M-d-H-m-s");
$fileName = 'img/photobox/'.$imgName.'.png';
file_put_contents($fileName, $fileData);

header('location: index.php#photobox');
