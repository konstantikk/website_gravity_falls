<?php
include 'header_admin.php';
?>
<form method="POST" action="managment/op_users.php" class="content">
    <div class="enter">
        <h1>USERNAME:</h1>
        <input name="login" value="">
        <h1>PASSWORD:</h1>
        <input name="passwd" value="" type="password">
        <h1>NAME:</h1>
        <input name="name" value="">
        <h1>SURNAME:</h1>
        <input name="surname" value=""> <br>
        <input type="submit" name="Удалить" value="Удалить"/>
        <input type="submit" name="Изменить" value="Изменить"/>
        <input type="submit" name="Создать" value="Создать"/>
    </div>
</form>