<?php 

header('Access-Control-Allow-Origin: *');

$myObj =json_decode(file_get_contents('makeup.json'));

$myJSON = json_encode($myObj);

echo $myJSON;

?>
