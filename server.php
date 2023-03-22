<?php
$list_json = file_get_contents('./list.json');
// var_dump($list_json);

$list_array = json_decode($list_json, true);
// var_dump($list_array);

$new_task = isset($_POST['text']) ? $_POST['text'] : null;
// var_dump($_POST['text']);
// var_dump($new_task);

if ($new_task !== null) {

    $add_task = [
        'text'=> $new_task,
        'status'=> true
    ];

    array_push($list_array, $add_task);
}
// var_dump($list_array);

$new_list_json = json_encode($list_array);
file_put_contents('./list.json', $new_list_json);
// var_dump($new_list_json);

$new_array = json_decode($new_list_json, true);
// var_dump($new_array);

header('Content-Type: application/json');

echo json_encode($new_array);
?>
