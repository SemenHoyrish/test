<?php
    $articles_count =  count(scandir("articles")) - 2;
    if ($_POST["password"] == 12012) {
        $author = $_POST["author"];
        $text = $_POST["testArea"];
        $text = str_replace(array("\r\n", "\r", "\n"), '<br>', $text);
        $time = date('d/m/Y H:i:s eP');
        $file = fopen("articles/".($articles_count+1).".php", "w");
        fwrite($file, '
        <div class="article">
            <span class="article-time">'.$time.'</span>
            <span class="article-author">'.$author.'</span>
            <p class="article-text">'.$text.'</p>
            <form action="article.php" method="POST">
                <input type="hidden" value="'.($articles_count+1).'" name="number" />
                <input type="submit" class="article-link" value="Читать всё ->" />
            </form>
        </div>
        ');
        fclose($file);
        include_once "back.php";
    }
    
    // fwrite($file, '
    //     <div class="article">
    //         <span class="article-author">'.$author.'</span>
    //         <p class="article-text">'.$text.'</p>
    //     </div>
    //     ');

//     $text = "Какой-то тут текст для записи в файл";
// $fp = fopen("file.txt", "w" );
// fwrite($fp, $text);
// fclose($fp);
// 
// echo str_replace(array("\r\n", "\r", "\n"), '<br>', $text);
?>