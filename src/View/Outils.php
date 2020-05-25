<?php

namespace PHPProject\View;

class Outils
{
    public static function headerHTML(String $titre)
    {
        echo(
        "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <title>$titre</title>
</head>
<body>");
    }


    public static function footerHTML()
    {
        echo(
        "</body>
</html>");
    }
}

?>
