<?
require_once "includes/config.php";
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
    <form class="task__form" method="post" id="ajax_form" action="">
        <div class="task__form__items">
            <input class="task__form__item" type="text" name="title">
            <input class="task__form__item" type="text" name="description">
            <select class="task__form__item" name="status">
                <option value="TODO">TODO</option>
                <option value="DOING">DOING</option>
                <option value="DONE">DONE</option>
            </select>
            <input class="task__form__item" type="button" id="btn" name="submit" value="добавить задание">
        </div>
    </form>
    <a href="/" class="create__task">Вернутся на главную страницу</a>
    <br>
    <div id="result_form"></div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/ajax_create.js"></script>
</body>

</html>

<?
