<?php
if (isset($_POST['submitB'])) {
    // print_r($_POST);
    $error = "";
    if (!true) {
        $error = "login error";
    } else {
        if ($_POST['login'] === "admin") {
           header("Location:admin.php?login=" . $_POST['login']);
        }
        if ($_POST['login'] === "user") {
            header("Location:user.php?login=" . $_POST['login']);
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
        Введіть ім'я: <input type="text" name="login" /><br />
        Введіть пароль (не менш ніж 4 символи): <input type="password" name="pass" /><br />
        <input type="submit" name="submitB" value="Підтвердити" />
    </form>
</body>

</html>