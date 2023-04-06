<h2 class="centr">Вывод </h2>
<div class="vivodi">
<ol>
    <?php
    foreach ($employees as $employee) {
        echo '<div class="column">';
        echo '<div class="colum">';
        echo '<p class="p">ФИО: ' . $employee->ФИО. '</p>';
        echo '<p  class="p">Пол: ' . $employee->Пол. '</p>';
        echo '<p  class="p">Дата рождения: ' . $employee->birthday. '</p>';
        echo '<p  class="p">Адрес: ' . $employee->Адрес. '</p>';
        echo '<p  class="p">Возраст: ' . $employee->age. '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</ol>
</div>
<?php
    echo '<h2 class="centr">Средний Возраст: ' . $agevivod. '</h2>';
?>

