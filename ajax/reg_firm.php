<div class="form">

    <p id="glad">Мы рады приветствовать Вас!</p>

    <form id="registr" action="../registration.php" method="post">
        <p>Логин:</p>
        <p><input type="text" name="login"></p>

        <p>Email"</p>
        <p><input type="email" name="email"></p>

        <p>Пароль:</p>
        <p><input type="password" name="password"></p>
        <p>Подтверждение пароля:</p>
        <p><input type="password" name="confirm_password"></p>

        <p>Ваше имя:</p>
        <p><input type="text" name="name"></p>
        <p>Ваша фамилия:</p>
        <p><input type="text" name="surname"></p>

        <p>Пол:</p>
        <select name="sex">
            <option value="М">M</option>
            <option value="Ж">Ж</option>
        </select>
        <p>Дата рождения:</p>
        <p><input type="date" name="birthday"></p>
        <input type="text" value="firm" name="user_reg" style="display: none">
        <button type="submit">Зарегистрироваться</button>
    </form>

</div>
<?php
$_POST['user_reg'] = 'firm';
?>