<?php
    echo "<html>
        <head>
            <title>Registro Usuario</title>
        </head>
        <body>
            <h1>Registro</h1>
            <form action='query.php' method='POST' ENCTYPE='multipart/form-data'>
                <p>Usuario: <input type='text' name='user'><br>
                Contrase&ntilde;a: <input type='password' name='pass'><br>
                <input type='submit' value='Registrar'></p>
            </form>
        </body>
    </html>";
?>
