<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Туры по Санкт-Петербургу</title>
</head>
<body>

    <div class="top-line">

        <div class="menu">

            <div class="logo">

                <a href="/">
                    <p><img src="img/logo.png" alt=""></p>
                </a>
            </div>

            <ul class="menu-list">
                <li id="general">
                    Главная
                </li>
                <li id="tours_firm">
                    Турфирмы
                </li>
                <li id="tours">
                    Туры
                </li>
                <li id="about_us">
                    О нас
                </li>
                <li id="lk">
                    Личный кабинет
                </li>
            </ul>

        </div>

        <div class="sign_in">

            <div class="auth">

            </div>
            <?php
            if (!isset($_SESSION['user'])) {
                ?>
                <p id="sign_in">Вход</p>
                <?php
            }else {
                ?>
                <p id="sign_out">Выход</p>
                <?php
            }
            ?>
            <p id="registration">Регистрация</p>
        </div>


    </div>

    <div class="content">

    </div>


<script src="lib/jquery/jquery-3.2.1.min.js"></script>
<script src="lib/jquery/ajax.js"></script>
<script src="js/main.js"></script>
</body>
</html>