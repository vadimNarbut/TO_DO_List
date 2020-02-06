<? 

require_once "../includes/config.php";

$sql = " SELECT * FROM tasks";

$tasks = mysqli_fetch_all(mysqli_query($connection, $sql))  or die('Query failed: ' . mysqli_error($connection));

$response = [
    'task' => []
];

foreach ($tasks as $task){
    $response['task'][] = [
        'id' => $task[0],
        'title' => $task[1],
        'description' => $task[2],
        'status' => $task[3],
        'date' => $task[4],
    ];
}

file_put_contents("chart_data.json", json_encode($response , JSON_UNESCAPED_UNICODE));
echo json_encode($response, JSON_UNESCAPED_UNICODE);

