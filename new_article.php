<?php
    $title = "Создать статью";
    $css = "css/style_new_article.css";
    include_once "header.php";
    echo '<div class="create_artice">
    <div class="container">
        <form action="create_article.php" method="post">
            <input type="password" name="password" placeholder="password" />
            <input type="text" name="author" placeholder="Имя, Фамилия:" />
            <textarea name="testArea" id="textArea" cols="30" rows="10" placeholder="Type something..."></textarea>
            <input type="submit" value="Создать статью" />
        </form>
    </div>
</div>';
    include_once "footer.php";
?>