<?php
    $articles = scandir("articles");
    // print_r($articles);
    $articles = array_reverse($articles);
    // echo "<br>";
    // print_r($articles);
    $articles_count =  count(scandir("articles")) - 2;
    $title = "Статьи";
    $css = "css/style.css";
    include_once "header.php";
    for ($i=0; $i < $articles_count; $i++) { 
        include_once "articles/".$articles[$i];
    }
    include_once "footer.php";
    
    
    
    
    // echo readfile("articles/3.php");
    // print_r(file("articles/3.php"));


    // $articles = scandir("articles");
    // $articles_count =  count(scandir("articles")) - 2;
    // include_once "header.php";
    // for ($i=0; $i < $articles_count; $i++) { 
    //     include_once "articles/".$articles[$i+2];
    // }
    // include_once "footer.php";
    ?>