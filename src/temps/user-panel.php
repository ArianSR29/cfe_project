<?php
    session_start();
    include '../actions/session.php';
    verificausuario();
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Bienvenido Empleado</title>

        <link rel="stylesheet" href="../css/master.css">
    </head>

    <body>
        <header>
        </header>
        <section id="main-section">
            <h1>Panel de Empleado</h1>
            <a href="../actions/destroid.php" class="cerrar-sesion">Cerras Sesión</a>
            <form action="../actions/reg-clt.php" method="post">
                <table>
                    <tr>
                        <td>RPU:</td>
                        <td><input type="text" name="rpu" required></td>
                    </tr>
                    <tr>
                        <td>Nombre de Cliente:</td>
                        <td><input type="text" name="nombre_cliente" required></td>
                    </tr>
                    <tr>
                        <td>Apellido Paterno:</td>
                        <td><input type="text" name="A_paterno" required></td>
                    </tr>
                    <tr>
                        <td>Apellido Materno:</td>
                        <td><input type="text" name="A_materno" required></td>
                    </tr>
                    <tr>
                        <td>Tipo de Cliente:</td>
                        <td>
                            <select name="tipo_cliente">
                            <option value="E">Excelente</option>
                            <option value="B">Bueno</option>
                            <option value="R">Regular</option>
                            <option value="M">Malo</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo de Servicio:</td>
                        <td>
                            <select name="tipo_servicio">
                                <option value="Q">Queja</option>
                                <option value="A">Aclaración</option>
                                <option value="P">Pago</option>
                                <option value="O">Otro</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                       <td>Comentario:</td>
                        <td colspan="2"><textarea name="comentario" id="" cols="30" rows="10" required></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button class="btn-reg">Registrar Servicio</button></td>
                    </tr>
                </table>
            </form>
        </section>
    </body>

    </html>
