<?php

    require 'includes/app.php';
    $db = conectarDB();

    $errores = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (!$email) {
            $errores[] = 'El email es obligatorio o no es valido';
        }

        if (!$password) {
            $errores[] = 'El password es obligatorio o es incorrecto';
        }

        if (empty($errores)) {
            $query = "SELECT * FROM usuarios WHERE email = '${email}'";
            $resultado = mysqli_query($db, $query);

            if ($resultado->num_rows) {
                $usuario = mysqli_fetch_assoc($resultado);

                $auth = password_verify($password, $usuario['password']);

                if ($auth) {
                    session_start();

                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;
                    header('Location: /admin');
                } else {
                    $errores[] = 'El password es incorrecto';
                }
            } else {
                $errores[] = 'El Usuario no existe';
            }
        }

    }



    incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach;?>

        <form method="POST" class="formulario">
        <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Tu Email" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Tu Password" required>
            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
        </form>
    </main>

<?php incluirTemplate('footer'); ?>