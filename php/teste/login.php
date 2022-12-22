<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {

    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo 'Prencha o campo Username ou Password.';
    } else {
        include_once './config.php';

        $username = mysqli_escape_string($connection, $_POST['username']);
        $password = mysqli_escape_string($connection, $_POST['password']);

        $sql_selectUser = "SELECT * FROM usuarios WHERE username = '{$username}' AND password = '{$password}' ";
        $sql_exec = mysqli_query($connection, $sql_selectUser) or die('erro exec');

        if (mysqli_num_rows($sql_exec) == 1) {

            if (!isset($_SESSION)) {
                session_start();
            }

            $usuarios = $sql_exec;

            $_SESSION['id_user']  = $usuario['id_user'];
            $_SESSION['username'] = $usuario['username'];

            header("Location: painel.php");
        } else {
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            unset($_SESSION['id_user']);

            header("Location: login.php");
            echo 'Falha logar" Login ou senha incorretos';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>LOGIN</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <div class="float">
                <div class="stack-g">
                    <div class="inline" id="login">
                        <input type="text" name="username" placeholder="Username" />
                        <input type="password" name="password" placeholder="Password" />
                        <div class="btn-area__login">
                            <button class="btn" type="submit" id="login">Login</button>
                            <a class="btn" href="./register.php">Resgister Here</a>
                        </div>
                    </div>
                    <div class="divider inline"></div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
