<?php 
$getJson = file_get_contents(__DIR__ . '/db/dischi.json');
$array = json_decode($getJson,true);

if ($array != null) {
    header('Content-Type: application/json');

    echo json_encode($array);
}

?>
