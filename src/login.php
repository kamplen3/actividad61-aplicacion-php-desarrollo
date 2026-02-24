<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login – Automovilismo 2026</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;

            /* Imagen de fondo temática de coches */
            background-image: url('https://news.motoreto.com/wp-content/uploads/2021/02/unnamed-3-1-1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

            backdrop-filter: blur(3px);
        }

        .login-container {
            background: rgba(0, 0, 0, 0.75);
            padding: 40px;
            border-radius: 12px;
            width: 350px;
            color: white;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.4);
            border: 1px solid rgba(255, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 28px;
            letter-spacing: 2px;
            color: #ff3b3b;
            text-shadow: 0 0 10px #ff0000;
        }

        label {
            font-size: 14px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 18px;
            border: none;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #ff3b3b;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background: #ff1a1a;
            transform: scale(1.03);
        }

        .error {
            color: #ff8080;
            text-align: center;
            margin-bottom: 15px;
        }

        .register-link {
            text-align: center;
            margin-top: 15px;
        }

        .register-link a {
            color: #ff3b3b;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h1>LOGIN</h1>

        <?php if (!empty($_SESSION['login_error'])): ?>
            <p class="error"><?php echo $_SESSION['login_error']; unset($_SESSION['login_error']); ?></p>
        <?php endif; ?>

        <form action="login_action.php" method="post">
            <label>Correo:</label>
            <input type="email" name="correo" required>

            <label>Contraseña:</label>
            <input type="password" name="contraseña" required>

            <button type="submit">Entrar</button>
        </form>

        <div class="register-link">
            ¿No tienes cuenta? <a href="registro.php">Regístrate</a>
        </div>
    </div>

</body>
</html>
