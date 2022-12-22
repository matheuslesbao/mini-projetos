<?php

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {

    include_once "./config.php";

    $username = mysqli_escape_string($connection, $_POST['username']);
    $password = mysqli_escape_string($connection, $_POST['password']);
    $passwordConfirm = mysqli_escape_string($connection, $_POST['password_confirm']);

    $ifExistUser = mysqli_query($connection, "SELECT * FROM usuarios WHERE username = '{$username}'");
    $searchUser = $ifExistUser->fetch_row();

    if ($searchUser[0] > 0) {
        echo "E-mail já cadastrado";
    } else if (empty($username)) {
        echo "Username vazio";
    } else if ($password !== $passwordConfirm) {
        echo "Senha diferente";
    } else {
        $insert_user = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

        if (mysqli_query($connection, $insert_user)) {
            header('Location: ./login.php');
        } else {
            echo "ERROR";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Registro</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <a class="btn" href="./login.php">VOLTAR</a>
        <form action="register.php" method="POST">
            <div class="float">
                <div class="stack-g">
                    <div class="divider inline"></div>
                    <div class="inline" name="register">
                        <input type="text" name="username" placeholder="Username" />
                        <input type="password" name="password" placeholder="Password" />
                        <input type="password" name="password_confirm" placeholder="Confirm Password" />
                        <button class="btn" name="submit" type="submit" id="register">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
