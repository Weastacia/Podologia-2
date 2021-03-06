<?php
    session_start();
    if(isset($_SESSION['nombre'])){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="bg-img">
        <div class="content">
            <header>Login</header>
            <form action="#">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Ingrese correo">
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="pass-key" required placeholder="Ingrese contraseña">
                    <span class="show">MOSTRAR</span>
                </div>
                <div class="pass">
                    <a href="#">Olvidaste la contraseña?</a>
                </div>
                <div class="field">
                    <input type="submit" value="Entrar">
                </div>
            </form>
        </div>
    </div>
    <script src="./js/scripts.js"></script>
</body>
</html>