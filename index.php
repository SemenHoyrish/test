<?php
    $title = "Главная";
    $css = "css/style.css";
    include_once "header.php";
    $articles_count =  count(scandir("articles")) - 2;
    include_once "articles/".$articles_count.".php";
    include_once "footer.php";
?>