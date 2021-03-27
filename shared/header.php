<?php
$_SESSION["lang"] = isset($_GET["lang"]) ? $_GET["lang"] : "en";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KD GAME 2<?php echo isset($pageTitle) ? " | $pageTitle" : ""; ?></title>
    <link rel="stylesheet" href="/dist/main.css" />
</head>

<body>
    <form id="langSwitcher">
        <div class="dropdown"><img src="/src/images/down-arrow.png" /> <?php echo __("Language"); ?></div>
        <div class="dropdown-container" method="GET">
            <div class="language" data-lang-code="de">
                <img src="/src/images/de.svg" />
                <span><?php echo __("German"); ?></span>
            </div>
            <div class="language" data-lang-code="en">
                <img src="/src/images/en.svg" />
                <span><?php echo __("English"); ?></span>
            </div>
            <input id="langInput" type="hidden" name="lang" value="en" />
        </div>
    </form>