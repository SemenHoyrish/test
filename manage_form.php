<?php
    if ($_POST["password"] == '5698') {
        $tmp = explode(".", $_POST["file"]);
        print_r($tmp);

        if (count($tmp) > 0) {
            for ($i=0; $i < (count($tmp) - 1); $i++) { 
                $lines = file("articles/".$tmp[$i].".php", FILE_IGNORE_NEW_LINES);
                if ($lines[1] == '        <div class="article">') {
                    $lines[1] = '        <div class="article disable">';
                } else if ($lines[1] == '        <div class="article disable">') {
                    $lines[1] = '        <div class="article">';    
                }
                file_put_contents("articles/".$tmp[$i].".php", implode(PHP_EOL, $lines));
            }
        }




        // $tmp = $_POST["file"];
        // echo $tmp;
        // // echo $tmp;
        // $file = file("articles/".$tmp.".php");
        // echo $file[1];
        // // print_r($file);
        // if ($file[1] == '<div class="article">') {
        //     $text = str_replace('<div class="article">', '<div class="article disable">', $file[1]);
        //     echo $text;
        // } elseif ($file[1] == '<div class="article disable">') {
        //     $text = str_replace('<div class="article disable">', '<div class="article">', $file[1]);
        //     echo $text;
        // }
        // $file_w = fopen("articles/".$tmp.".php", "w");
        // fwrite($file_w, $file[0]);
        // fwrite($file_w, $text);
        // fwrite($file_w, $file[2]);
        // fwrite($file_w, $file[3]);
        // fwrite($file_w, $file[4]);
        // fclose($file_w);

        
        // $pizza  = "кусок1 кусок2 кусок3 кусок4 кусок5 кусок6";
        // $pieces = explode(" ", $pizza);
        // echo $pieces[0]; // кусок1
        // echo $pieces[1]; // кусок2
        
    }
    include_once "back.php";
?>
