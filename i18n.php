<?php

function __($text)
{
    // if (!isset($_SESSION["lang"])) {
    //     return $text;
    // }
    // $lang = $_SESSION["lang"];
    $lang = "de";

    $translations = array(
        "de" => array(
            "Hello" => "Hallo",
        ),
    );

    if (!array_key_exists($lang, $translations)) {
        return $text;
    }

    if (!array_key_exists($text, $translations[$lang])) {
        return $text;
    }

    return $translations[$lang][$text];
}