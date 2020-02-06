<?php

require_once "includes/config.php";

if (isset($_POST["title"])) { 

	//массив для JSON ответа
    $result = array(
    	'title' => $_POST["title"],
        'description' => $_POST["description"],
        'status' => $_POST['status']
        // 'date' => $_POST['date']
    ); 
    echo json_encode($result); 
}

$insert = "INSERT INTO tasks ( title, description, status, date) VALUES ('" . $_POST['title'] . "', '" . $_POST['description'] .  "', '" . $_POST['status'] . "', '" . date("Y-m-d H:i:s") . "')";
mysqli_query($connection, $insert);
