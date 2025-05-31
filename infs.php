<?php
echo('gggggg'); 
$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
echo($method);
echo('<br>');
echo($uri);
require_once(__DIR__.'/views/head.php');
require_once(__DIR__.'/views/infs.php');
require_once(__DIR__.'/views/footer.php');
?>