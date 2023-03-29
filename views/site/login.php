<h2 class="centr">Авторизация</h2>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post">
        <div class="login">
        <label>Логин <br><input type="text" name="login"></label>
        <label>Пароль <br><input type="password" name="password"></label>
        <button class="down">Войти </button>
        </div>
    </form>
<?php endif;
