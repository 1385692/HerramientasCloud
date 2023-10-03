<?php
// Inicializar las variables
$username = "";
$password = "";
$mensaje = "";

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores ingresados por el usuario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verificar si las credenciales son válidas (esto es solo un ejemplo)
    if ($username === "usuario" && $password === "contraseña") {
        // Iniciar la sesión (esto es solo un ejemplo; en una aplicación real, deberías usar un sistema de autenticación seguro)
        session_start();

        // Almacenar el nombre de usuario en la sesión
        $_SESSION["username"] = $username;

        // Redirigir a la página de inicio o a otra página protegida
        header("Location: inicio.php");
        exit();
    } else {
        $mensaje = "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Css/estilos.css">
  <title>Login</title>
</head>
<body>
  <div class="contenedor">
    <!-- <div class="imagen"> -->
      <img src="imagenes/img-login.jpg" alt="">
    <!-- </div>  -->
    <div class="formulario">
      <h2>Iniciar sesión</h2>
      <div class="email">
        <label>Correo Electronico</label>
        <input type="text" name="email" id="email" placeholder="Email">
      </div>    
      <div class="pass">
        <label>Contraseña</label>
        <input type="password" name="pass" id="pass" placeholder="Password">
      </div>    

      <div class="btn">
        <input type="submit" value="Iniciar Sesión" id="boton" disabled>
      </div>
      <div class="enlace">
         <img src="imagenes/ui.svg">
         <?php require ('autentificacion.php')?>
        <a href="<?php echo $client->createAuthUrl() ?>">Iniciar sesión con Google</a>
      </div>
    </div>  
  </div>
  <script src="validar.js"></script>
</body>
</html>