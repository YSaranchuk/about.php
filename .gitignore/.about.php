<?php
    $name = "Саранчук Яна";
    $age = 29;
    $email = "dariizess@yandex.ru";
    $city = "Брянск";
    $about = "веб-разработчик";
    if ($name) {
?>
<table>
    <tr>
        <td><strong>Имя:</strong></td>
        <td><?= $name ?></td>
    </tr>
    <tr>
        <td>Возраст:</td>
        <td><?= $age ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?= $email ?></td>
    </tr>
    <tr>
        <td>Город:</td>
        <td><?= $city ?></td>
    </tr>
    <tr>
        <td>Обо мне:</td>
        <td><?= $about ?></td>
    </tr>
</table>
    <?php } else { ?>
    <div><strong> Пользователь не найден </strong></div>
    <?php }
?>
