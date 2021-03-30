<?php
session_set_cookie_params(86400);
session_start();

include "i18n.php";
include "api/user.php";
include "db.php";
$pageTitle = "Home";
include "shared/header.php";

if (isset($_POST["regUsername"]) && isset($_POST["regPassword"])) {
    // echo "okay lets try and register";
}
// $User = new User("username", "password", $conn);
// $User->register();
?>


<div class="content bg-primary">
    <?php if (isset($_SESSION["userid"])): ?>
    <?php else: ?>
    <div class="content-box">
        <h1><?php echo __("Welcome to the KD GAME 2"); ?>!</h1>
        <form id="loginForm" class="margin-bottom" action="index.php" method="POST">
            <h2><?php echo __("Login"); ?></h2>
            <div class="horizontal-field">
                <label for="logUsername"><?php echo __("Username"); ?></label>
                <input required id="logUsername" name="logUsername" type="text"
                    placeholder="<?php echo __("Username"); ?>" />
            </div>
            <div class="horizontal-field">
                <label for="logPassword"><?php echo __("Password"); ?></label>
                <input required id="logPassword" name="logPassword" type="text"
                    placeholder="<?php echo __("Password"); ?>" />
            </div>

            <input type="submit" value="<?php echo __("Submit"); ?>" />
        </form>
        <form style="display: none" id="registerForm" class="margin-bottom" action="index.php" method="POST">
            <h2><?php echo __("Register"); ?></h2>
            <div class="horizontal-field">
                <label for="regUsername"><?php echo __("Username"); ?></label>
                <input required id="regUsername" name="regUsername" type="text"
                    placeholder="<?php echo __("Username"); ?>" />
            </div>
            <div class="horizontal-field">
                <label for="regPassword"><?php echo __("Password"); ?></label>
                <input required id="regPassword" name="regPassword" type="password"
                    placeholder="<?php echo __("Password"); ?>" />
            </div>
            <div class="horizontal-field">
                <label for="regPassword2"><?php echo __("Repeat password"); ?></label>
                <input required id="regPassword2" name="regPassword2" type="password"
                    placeholder="<?php echo __("Password"); ?>" />
            </div>

            <input type="submit" value="<?php echo __("Submit"); ?>" />
        </form>
        <a id="formToggler" href="#"><?php echo __("Not registered yet?"); ?></a>
    </div>
    <?php endif;?>
</div>
<script defer src="/dist/index.js" type="text/javascript"></script>
<?php include "shared/footer.php";?>