<?php

session_start();

header('X-FRAME-OPTIONS:DENY');

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
echo "<br>";
echo '<pre>';
var_dump($_POST);
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
        <br>
        HomePage
        <?php echo h($_POST['url']); ?>;
        <br>
        Gender
        <?php
                if ($_POST['gender'] === '0') {
                    echo 'Man';
                }
                if ($_POST['gender'] === '1') {
                    echo 'Woman';
                }
                ?>;
        <br>
        Age
        <?php
        if ($_POST['age'] === '1'){echo '~19';}
        elseif($_POST['age'] === '2'){echo '20~29';}
        elseif($_POST['age'] === '3'){echo '30~39';}
        elseif($_POST['age'] === '4'){echo '40~49';}
        elseif($_POST['age'] === '5'){echo '50~59';}
        elseif($_POST['age'] === '6'){echo '60~';}
        ?>
        <br>
        Detaile
        <?php
        echo h($_POST['contact']);
        ?>
        <br>
        <input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
        <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
        <input type="hidden" name="url" value="<?php echo h($_POST['url']); ?>">
        <input type="hidden" name="gender" value="<?php echo h($_POST['gender']); ?>">
        <input type="hidden" name="age" value="<?php echo h($_POST['age']); ?>">
        <input type="hidden" name="contact" value="<?php echo h($_POST['contact']); ?>">
        <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']); ?>">
        <input type="submit" name="back" value="Back">
        <input type="submit" name="btn_submit" value="Send!!">
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
        <br>
        HomePage
        <input type="url" name="url" value="<?php echo h($_POST['url']); ?>">
        <br>
        Gender
        <input type="radio" name="gender" value="0">Man
        <input type="radio" name="gender" value="1">Woman
        <br>
        Age
        <select name="age">
            <option value="">Pleage Select..</option>
            <option value="1">~19</option>
            <option value="2">20~29</option>
            <option value="3">30~39</option>
            <option value="4">40~49</option>
            <option value="5">50~59</option>
            <option value="6">60~</option>
        </select>
        <br>
        Detaile
        <textarea name="contact" value=<?php echo h($_POST['contact']); ?>></textarea>
        <br>
        Check
        <input type="checkbox" name="caution" value="1">Check the notes!
        <input type="submit" name="btn_confirm" value="Check!!">
        <input type="hidden" name="csrf" value="<?php echo $token ?>">
    </form>
    <?php endif; ?>
</body>

</html>