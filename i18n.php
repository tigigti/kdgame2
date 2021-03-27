<?php

function __($text)
{
    if (!isset($_SESSION["lang"])) {
        return $text;
    }
    $lang = $_SESSION["lang"];

    $translations = array(
        "de" => array(
            "Hello" => "Hallo",
            "German" => "Deutsch",
            "English" => "Englisch",
            "Language" => "Sprache",
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