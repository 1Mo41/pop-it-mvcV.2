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
<main>    <div class="zaprosik">
    <h2 class="centr">Поиск сотрудников</h2>


    <form method="post" action="/pop-it-mvc/search" class="discipline">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <input type="search" name="search1" required="required" placeholder="Состав">
            <button>Выбрать</button>
    </form>
    <form method="post" action="/pop-it-mvc/search1" class="discipline">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="search" name="search2" required="required" placeholder="Подразделение">
        <button>Выбрать</button>
    </form>
    </div>
</main>





</body>
</html>