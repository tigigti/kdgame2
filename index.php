<?php
session_set_cookie_params(86400);
session_start();

include "i18n.php";
$pageTitle = "Home";
include "shared/header.php";?>

<body>
    <?php echo __("Hello"); ?>
    <?php if (isset($_SESSION["userid"])): ?>
    <h1>Welcome to the KD GAME 2!</h1>
    <?php else: ?>
    <h1>Welcome stranger!</h1>
    <?php endif;?>
</body>

<?php include "shared/footer.php";?>