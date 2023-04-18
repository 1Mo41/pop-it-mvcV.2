<div class="vivod">
    <?php
    foreach ($cartons as $carton) {
        echo '<div class="column">';
        echo '<div class="colum">';
        echo '<p class="p">Имя: ' . $carton->ФИО . '</p>';
        echo '<p class="p">Состав: ' . $carton->НазваниеСостава . '</p>';
        echo '<p class="p">Подразделение: ' . $carton->Подразделение . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>