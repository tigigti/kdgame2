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
            "Username" => "Benutzername",
            "Submit" => "Abschicken",
            "Not registered yet?" => "Noch nicht registriert?",
            "Register" => "Registrieren",
            "Login" => "Einloggen",
            "Welcome to the KD GAME 2" => "Willkommen beim KD GAME 2",
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