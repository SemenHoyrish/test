<?php
    $number = $_POST["number"];
    $title = "Статья №".$number;
    $css = "css/style_article.css";
    include_once "header.php";
    include_once "articles/".$number.".php";
    include_once "footer.php";
?>