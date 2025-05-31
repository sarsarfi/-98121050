<?php
echo('this is index.php page'); 
$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
echo($method);
echo('<br>');
echo($uri);
echo('<br>');
var_dump($_GET);
exit();
// require_once(__DIR__.'/views/head.php');
// if($method="GET")
// {
//     $page = $_GET['page'];
//     if($page == "home")
//     {
//         require_once(__DIR__.'/views/body.php');

//     }else if($page == "infs"){
//         require_once(__DIR__.'/views/infs.php');

//     }else{
//         require_once(__DIR__.'/views/404.php');

//     }
// }

// require_once(__DIR__.'/views/footer.php');
?>