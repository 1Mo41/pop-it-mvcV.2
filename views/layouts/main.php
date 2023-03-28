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
<header>
    <nav class="header">
        <div class="User">
            <a>Вы зашли под пользователем: <b>(<?= app()->auth::user()->name ?>)</b></a>
            <a class="list" href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        </div>
        <div class="menu">
        <?php
        if (!app()->auth::check()):
            ?>
            <a class="list" href="<?= app()->route->getUrl('/login') ?>">Вход</a>
            <a class="list" href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
        <?php
        else:
            ?>
            <a class="vixod" href="<?= app()->route->getUrl('/logout') ?>">Выход </a>
        <?php
        endif;
        ?>
        </div>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>