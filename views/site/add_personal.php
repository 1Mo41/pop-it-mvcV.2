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
<h2 class="centr">Добавить сотрудника</h2>

<form method="post">
    <div class="zapros">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label>ФИО<br> <input type="text" name="ФИО"></label>
        <label >Пол
            <select name="polID">
                <?php
                foreach ($pols as $pol){
                    echo "<option value=\"$pol->polID\">" . $pol->НазваниеПола . '</option>';
                }
                ?>
            </select>
        </label>
    <label>Дата рождения<br><input type="date" name="birthday"></label>
        <label >Должность
        <select name="ДолжностьID">
            <?php
            foreach ($position as $posit){
                echo "<option value=\"$posit->ДолжностьID\">" . $posit->НазваниеДолжности . '</option>';
            }
            ?>
        </select>
        </label>
        <label>Вид Подразделения
        <select name="ПодразделениеID">
            <?php
            foreach ($subdivision as $subd){
                echo "<option value=\"$subd->ПодразделениеID\">" . $subd->Подразделение . '</option>';
            }
            ?>
        </select>
        </label>
    <label>Адрес <br><input type="text" name="Адрес"></label>
    <label>age<br> <input type="number" name="age"></label>

        <label >Состав
            <select name="СоставID">
                <?php
                foreach ($compound as $comp){
                    echo "<option value=\"$comp->СоставID\">" . $comp->НазваниеСостава . '</option>';
                }
                ?>
            </select>
        </label>



    <button>Добавить</button>
</div>
</form>
</main>
</body>
</html>