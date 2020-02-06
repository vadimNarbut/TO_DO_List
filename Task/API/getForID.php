<? 

require_once "../includes/config.php";

$sql = " SELECT * FROM tasks WHERE id = " . $_GET['id'];

$tasks = mysqli_fetch_all(mysqli_query($connection, $sql))  or die('Query failed: ' . mysqli_error($connection));

$response = [
    'task' => [
        'id' => $tasks[0][0],
        'title' => $tasks[0][1],
        'description' => $tasks[0][2],
        'status' => $tasks[0][3],
        'date' => $tasks[0][4],
    ]
];



file_put_contents("task.json", json_encode($response , JSON_UNESCAPED_UNICODE));
echo json_encode($response, JSON_UNESCAPED_UNICODE);

