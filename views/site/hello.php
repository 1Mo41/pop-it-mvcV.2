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

    <form method="get">
        <div class="zapros">
            <label>ФИО<br> <input type="text" name="ФИО"></label>
            <label>Подразделение <br><input type="text" name="Подразделение"></label>
            <label>Предприятие <br><input type="text" name="Предприятие"></label>
            <label>age<br> <input type="number" name="age"></label>
            <label>Состав<br> <input type="text" name="НазваниеСостава"></label>
            <label>Средний возраст<br> <input type="text" name="СреднийAge"></label>


            <button>Вывести</button>
        </div>
    </form>
</main>
</body>
</html>