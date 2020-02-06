<?
require_once "includes/config.php";
include "comment.class.php";

$sql = "SELECT * FROM tasks WHERE id = " . $_GET['id'];
$task_data = mysqli_fetch_assoc(mysqli_query($connection, $sql));

$value = ['TODO', 'DOING', 'DONE'];

$comments = array();
$result = mysqli_query($connection, "SELECT * FROM comments WHERE task_id = " . $_GET['id'] . " ORDER BY id ASC");

while ($row = mysqli_fetch_assoc($result)) {
        $comments[] = new Comment($row);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Document</title>
</head>

<body>
        <a href="/" class="create__task">Вернутся на главную страницу</a>
        <form class="task__form" method="POST" id="ajax_form">
                <div class="task__form__items">
                        <input class="task__form__item" style="display: none" type="text" id="id" name="id" value="<?= $task_data['id'] ?>">
                        <input class="task__form__item" type="text" id="title" name="title" value="<?= $task_data['title'] ?>">
                        <input class="task__form__item" type="text" id="description" name="description" value="<?= $task_data['description'] ?>">
                        <select class="task__form__item" name="status" id="status">
                                <? foreach ($value as $val) {
                                        if ($task_data['status'] == $val) {
                                                echo "<option selected value='" . $task_data['status']  . "'>" . $task_data['status']  . "</option>";
                                        } else {
                                                echo "<option  value='" . $val  . "'>" . $val  . "</option>";
                                        }
                                }
                                ?>
                        </select>
                        <input class="task__form__item" type="text" name="date" value="<?= $task_data['date'] ?>">
                        <input class="task__form__item" type="button" id="btn" name="submit" value="изменить задание">
                </div>
        </form>

        <br>
        <div id="result_form"></div>

        <?php
        foreach ($comments as $c) {
                echo $c->markup();
        }
        ?>

        <div id="addCommentContainer">
                <p>Добавить комментарий</p>
                <form id="addCommentForm" method="post" action="">
                        <div>
                                <input type="text" style="display: none" name="task_id" id="task_id" value="<?= $_GET['id'] ?>">
                                <label for="name">Имя</label>
                                <input type="text" name="name" id="name" />

                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" />

                                <label for="url">Вебсайт (не обязательно)</label>
                                <input type="text" name="url" id="url" />

                                <label for="body">Содержание комментария</label>
                                <textarea name="body" id="body" cols="20" rows="5"></textarea>

                                <input type="submit" id="submit" value="Отправить" />
                        </div>
                </form>
        </div>

        </div>


        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/ajax_update.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>