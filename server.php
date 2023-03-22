<?php
// <!-- controllare contenuto file json -->
$list_json = file_get_contents('./list.json');
// var_dump($list_json);

// decodificare il codice per renderlo utilizzabile da php
$list_array = json_decode($list_json, true);
// var_dump($list_array);

//impostiamo l'header Content-Type
header('Content-Type: application/json');

// // stampiamo l'array 
echo json_encode($list_array);
?>
