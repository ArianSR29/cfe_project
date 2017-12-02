<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="index.css">
    <title>CFE Encuesta</title>
</head>

<body>
    <header>
        <div class="main-logo"><img src="src/img/main-logo.png" alt=""></div>
    </header>
    <div class="login-cont">
        <div class="title-login">
            <p>Bienvenido</p>
        </div>
        <form action="src/actions/loginA.php" method="post">
            <table border="0">
                <tr>
                    <td><input type="text" name="rpe" placeholder="RPE" required></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" placeholder="Contraseña" required></td>
                </tr>
                <tr>
                    <td colspan="2"><button>Entrar</button></td>
                </tr>
            </table>
        </form>
    </div>
    <footer>

    </footer>
</body>

<?php include 'src/actions/conexion_pg.php'; ?>

</html>
