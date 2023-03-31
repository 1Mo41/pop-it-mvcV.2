<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/pop-it-mvc/public/style/style.css">
    <title>Pop it MVC</title>
</head>
<body>
<main>
<h2 class="centr">Поиск сотрудников</h2>

    <form method="get">
        <div class="zapros">

        </div>
    </form>
</main>
<?php
if ($_FILES) {
if (move_uploaded_file($_FILES['filename']['tmp_name'],
'temp/' . $_FILES['filename']['name'])) {
echo 'Файл успешно загружен';
} else {
echo 'Ошибка загрузки файла';
}
}
?>
<form method="post" enctype="multipart/form-data" action="glavnaya">
    <h2>Форма для загрузки файлов</h2>
    <input type="file" name="filename"><br>
    <input type="submit" value="Отправить">
</form>

</body>
</html>