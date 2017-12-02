<!DOCTYPE html>
<html lang="es">
<?php
    session_start();
    include '../actions/session.php';
    verificausuario();
?>
<head>
    <meta charset="UTF-8">
    <title>Panel de ADMINISTRADOR</title>
    <link rel="stylesheet" href="../css/master.css">
</head>

<body>
    <header>
    </header>
    <section id="main-section">
    <h1>Panel de administrador</h1>
    <a href="../actions/destroid.php" class="cerrar-sesion">Cerras Sesión</a>
        <form action="../actions/reg-emp.php" method="post">
            <table>
                <tr>
                    <td>RPE:</td>
                    <td><input type="text" name="rpe" required></td>
                </tr>
                <tr>
                    <td>Nombre de Empleado:</td>
                    <td><input type="text" name="nombre_empleado" required></td>
                </tr><tr>
                    <td>Apellido Paterno:</td>
                    <td><input type="text" name="A_paterno" required></td>
                </tr>
                <tr>
                    <td>Apellido Materno:</td>
                    <td><input type="text" name="A_materno" required></td>
                </tr>
                <tr>
                    <td>Tipo de empleado:</td>
                    <td>
                        <select name="tipo_empleado">
                            <option value="1">Administrador</option>
                            <option value="0">Empleado</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <td><input type="password" name="pass" required></td>
                </tr>
                <tr>
                    <td colspan="2"><button class="btn-reg">Registrar Empleado</button></td>
                </tr>
            </table>
        </form>
    </section>
</body>

</html>