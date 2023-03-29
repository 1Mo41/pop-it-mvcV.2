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
<h2 class="centr">Вывод сотрудников</h2>
<div class="vivod">

    <form action="select1.php" method="post">
        <p><select size="3" multiple name="hero[]">
                <option disabled>Выберите героя</option>
                <option value="Чебурашка">Чебурашка</option>
                <option selected value="Крокодил Гена">Крокодил Гена</option>
                <option value="Шапокляк">Шапокляк</option>
                <option value="Крыса Лариса">Крыса Лариса</option>
            </select></p>
        <p><input type="submit" value="Отправить"></p>
    </form>
</div>
</form>
</main>
</body>
</html>