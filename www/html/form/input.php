<?php

session_start();

header('X-FRAME-OPTIONS:DENY');

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

echo "<br>";
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

$pageFlag = 0;

if (!empty($_POST['btn_confirm'])) {
    $pageFlag = 1;
}

if (!empty($_POST['btn_submit'])) {
    $pageFlag = 2;
}

?>


<!DOCTYPE html>
<meta charset="utf-8">

<head></head>

<body>
    <?php if ($pageFlag === 1) : ?>
    <?php if ($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
    <form method="POST" action="input.php">
        NAME
        <?php echo h($_POST['your_name']); ?>
        <br>
        EMAIL
        <?php echo h($_POST['email']); ?>
        <input type="submit" name="back" value="Back">
        <input type="submit" name="btn_submit" value="Send!!">
        <input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
        <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
        <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']); ?>">
    </form>
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($pageFlag === 2) : ?>
    <?php if ($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
    Send Message!
    <?php unset($_SERVER['csrfToken']); ?>
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($pageFlag === 0) : ?>
    <?php

        if (!isset($_SESSION['csrfToken'])) {
            $csrfToken = bin2hex(random_bytes(32));
            $_SESSION['csrfToken'] = $csrfToken;
        }

        $token = $_SESSION['csrfToken'];

        ?>

    <form method="POST" action="input.php">
        NAME
        <input type="text" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
        <br>
        EMAIL
        <input type="email" name="email" value="<?php echo h($_POST['email']); ?>">
        <input type="submit" name="btn_confirm" value="Check!!">
        <input type="hidden" name="csrf" value="<?php echo $token ?>">
    </form>
    <?php endif; ?>
</body>

</html>