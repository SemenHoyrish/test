<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Секретные ссылки</title>
    </head>
    <body>
        <form action="" method="POST"> 
            <input type="password" name="password" placeholder="password" />
            <input type="submit" name="done" value="Далее" />
        </form>
<?php
    if(isset($_POST["done"])) {
        if($_POST["password"] == 1230) {
            echo '
<style>
    form {
        display: none;
    }
    .secret-link {
        display: block;
        margin-bottom: 20px;
        font-size: 20px;
        color: #000;
    }
</style>
<a href="http://semensava.atwebpages.com/php-tests/Test_php-form/index.php" class="secret-link">Форма обратной связи</a>
<a href="http://semensava.atwebpages.com/php-tests/Test_php-create_files/index.php" class="secret-link">Создание статей</a>
</body>
</html>
';
        }
    }
?>

        