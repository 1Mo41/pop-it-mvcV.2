
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
    <h2 class=centr>Регистрация нового пользователя</h2>
    <h3><?= $message ?? ''; ?></h3>
    <form method="post" >
        <div class="reg">
        <label>Имя <br><input type="text" name="name"></label><br>
        <label>Логин<br> <input type="text" name="login"></label><br>
        <label>Пароль<br> <input type="password" name="password"></label><br><br>
        <button>Зарегистрироваться</button>
        </div>
    </form>

</main>
</body>
</html>

