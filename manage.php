<!-- <!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>NEWS</title>
        <link rel="stylesheet" href="css/style_manage.css" />
    </head>
    <body>
        <header class="header">
            <a href="index.html" class="logo">OUR_SITE</a>
            <nav class="navigation">
                <a href="articles.php" class="navigation-link">Смотреть все статьи</a>
                <a href="create_article.html" class="navigation-link">Для редактора</a>
                <a href="manage.php" class="navigation-link">Для менеджера</a>
            </nav>
        </header>
        <div class="articles">
            <div class="container"> -->
<?php
    // $lines = file("articles/3.php", FILE_IGNORE_NEW_LINES);      //не пробовал
    // $lines[3]  = "Четвёртая строка";                             //не пробовал
    // file_put_contents("file.dat", implode(PHP_EOL, $lines));     //не пробовал




    $articles = scandir("articles");
    // print_r($articles);
    $articles = array_reverse($articles);
    // echo "<br>";
    // print_r($articles);
    $articles_count =  count(scandir("articles")) - 2;
    $title = "MANAGER";
    $css = "css/style_manage.css";
    include_once "header.php";
    echo '<form action="manage_form.php" method="post">
        <input type="hidden" class="hiddenInput" name="file" value="">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Подтвердить изменения">
</form>';
    for ($i=0; $i < $articles_count; $i++) { 
        include_once "articles/".$articles[$i];
        echo '<button class="ShowHide-button" id="'.$articles[$i][0].'">Изменить состояние</button>';
    }
    include_once "footer.php";

    
//     $articles = scandir("articles");
//     // print_r($articles);
//     $articles = array_reverse($articles);
//     // echo "<br>";
//     // print_r($articles);
//     $articles_count =  count(scandir("articles")) - 2;
//     for ($i=0; $i < $articles_count; $i++) { 
//         include_once "articles/".$articles[$i];
//         echo '<form action="manage_form.php" method="post">
//         <input type="hidden" name="file" value="'.$articles[$i][0].'">
//         <input type="password" name="password" placeholder="password">
//         <input type="submit" value="Изменить состояние">
// </form>';
//     }
//     include_once "footer.php";




    // $file = file("articles/3.php");
    // print_r($file);
    // echo $file[1];
    // $text = str_replace('<div class="article">', '<div class="article disable">', $file[1]);
    // echo $text;

    // $file_w = fopen("articles/3.php", "w");
    // fwrite($file_w, $file[0]);
    // fwrite($file_w, $text);
    // fwrite($file_w, $file[2]);
    // fwrite($file_w, $file[3]);
    // fwrite($file_w, $file[4]);
    // fclose($file_w);



    // $text = str_replace('1', 'a', $file);
    // echo $text;
    // $text = str_replace(array("\r\n", "\r", "\n"), '<br>', $text);
    // $file = fopen("articles/".($articles_count+1).".php", "w");
    // fwrite($file, '
    // <div class="article">
    //     <span class="article-author">'.$author.'</span>
    //     <p class="article-text">'.$text.'</p>
    // </div>
    // ');
    // fclose($file);
?>
    <script src="manage.js"></script>