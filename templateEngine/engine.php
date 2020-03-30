<?php

$templates = array( "file" => "{FILE=''path_to_file''}", "config" => "{CONFIG='value'}",
    "var" => "{VAR=''variable_name''}", "db" => "{DB=''value''} ",
    "if" => "{IF ''var_1''</>/==/!=/<=/>=''var2''} PART1 {ELSE} PART2 {ENDIF} " ) ;

$filePath =  readFile("");

foreach ($templates as $template) {

    //Упорядочивает результаты так, что элемент $matches[0] содержит массив полных вхождений шаблона,
    // элемент $matches[1] содержит массив вхождений первой подмаски и т.д.

    while (preg_match_all($template,$filePath,$matches,PREG_PATTERN_ORDER)) {

    }
}

function readFile ($path) {
    if (file_exists($path)) {
        return file_get_contents($path);
    }
}