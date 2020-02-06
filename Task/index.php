<?

require_once "includes/config.php";



$sql_TODO = "SELECT * FROM `tasks` WHERE `status` = 'TODO'";
$result_TODO = mysqli_query($connection, $sql_TODO);

$sql_DOING = "SELECT * FROM `tasks` WHERE `status` = 'DOING'";
$result_DOING = mysqli_query($connection, $sql_DOING);

$sql_DONE = "SELECT * FROM `tasks` WHERE `status` = 'DONE'";
$result_DONE = mysqli_query($connection, $sql_DONE);


?>

<link rel="stylesheet" href="assets/css/styles.css">    



<div style="display: flex">
    <table border="1" cellpadding="5">
        <tr>
            <th style="width: 300px">
                TODO
            </th>
        </tr>
        <? foreach ($result_TODO as $res) { ?>
            <tr>
                <th>
                    название: <a href="updateTask.php?id=<?= $res['id'] ?>"><?= $res['title'] ?></a> <br>
                    <? $comment = mysqli_fetch_array(mysqli_query($connection, "SELECT count(*) FROM comments WHERE task_id = " . $res['id']))  ?>
                    количество комментариев: <?= $comment[0] ?>
                </th>
            </tr>
        <? } ?>

    </table>
    <table border="1" cellpadding="5">
        <tr>
            <th style="width: 300px">
                DOING
            </th>
        </tr>
        <? foreach ($result_DOING as $res) { ?>
            <tr>
                <th>
                    название: <a href="updateTask.php?id=<?= $res['id'] ?>"><?= $res['title'] ?></a> <br>
                    <? $comment = mysqli_fetch_array(mysqli_query($connection, "SELECT count(*) FROM comments WHERE task_id = " . $res['id']))  ?>
                    количество комментариев: <?= $comment[0] ?>
                </th>
            </tr>
        <? } ?>

    </table>
    <table border="1" cellpadding="5">
        <tr>
            <th style="width: 300px">
                DONE
            </th>
        </tr>
        <? foreach ($result_DONE as $res) { ?>
            <tr>
                <th>
                    название: <a href="updateTask.php?id=<?= $res['id'] ?>"><?= $res['title'] ?></a> <br>
                    <? $comment = mysqli_fetch_array(mysqli_query($connection, "SELECT count(*) FROM comments WHERE task_id = " . $res['id']))  ?>
                    количество комментариев: <?= $comment[0] ?>
                </th>
            </tr>
        <? } ?>

    </table>
</div>

<a class="create__task" href="createTask.php">Создать задачу</a>