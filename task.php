<!DOCTYPE html>
<html   >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />

    <title>RegularEx</title>
</head>
<body>
<section>
<form action="task.php" method="post">
    <p> Put <input type="text" name="text"> Put <input type="text" name="file" value="/Laba4/test.txt"></p>
    <p><input type="submit" value="go"></p>
</form>
</section>
</body>
</html>

<?php

$text = $_POST["text"];

echo parsing($text)."<br>"; ;

if (file_exists($_POST['file'])) {

            $text = file_get_contents($_POST['file']);
            $text = htmlspecialchars($text);
            echo parsing($text) ;

} else  {
    if ($_POST['file'] != '') echo "Файл не найден" ;
}

function parsing ($text) {

    $regex = array( 'englishSymbols'=> '/[a-z]/i', 'russianSymbols'=> '/[А-Яа-яЁё]/ui', 'digit' => '/[0-9]/i');

    $text = preg_replace($regex['englishSymbols'], '<span style="color:cornflowerblue">$0</span>', $text);
    $text = preg_replace($regex['russianSymbols'], '<span style="color:firebrick">$0</span>', $text);
    $text = preg_replace($regex['digit'], '<span style="color:green">$0</span>', $text);

    return $text ;
}


