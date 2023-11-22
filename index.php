
<?php
error_reporting(-1);
session_start();

$login = 'admin';
$password = '123';
if (!empty($_POST)) {
    if ($_POST['login'] == $login && $_POST['password'] == $password) {
        $_SESSION['auth'] = 1;
        $_SESSION['res'] = 'Succes';
        header("Location: secret.php");
        die;
    } else {
        $_SESSION['res'] = 'Error';
        header("Location: index.php");
        exit;
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <ul>
        <li><a href="./secret.php">Secret page</a></li>
    </ul>
    <?php 
    if (isset($_SESSION['res'])) {
        echo $_SESSION['res'];
        unset($_SESSION['res']);
    }
    ?>
    <h3>Hello Эту страницу может видеть любой пользователь</h3>
    <form method="post">
        Login: <input type="text" name="login">
        Password: <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>