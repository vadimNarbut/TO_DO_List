<?php

require_once "includes/config.php";

if (isset($_POST["title"])) { 

	// Формируем массив для JSON ответа
    $result = array(
        'id' => $_POST['id'],
    	'title' => $_POST["title"],
        'description' => $_POST["description"],
        'status' => $_POST['status'],
        'date' => $_POST['date']
    ); 
    echo json_encode($result); 
}

$update = "UPDATE tasks SET title = '" . $_POST['title'] . "', description = '" . $_POST['description']  . "' , status = '" . $_POST['status'] . "', date = '" . $_POST['date']  . "' WHERE id= " . $_POST['id'];
    mysqli_query($connection, $update);
