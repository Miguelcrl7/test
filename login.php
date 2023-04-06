<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conexi�n a la base de datos
    $dbhost = "localhost";
    $dbuser = "tu_usuario";
    $dbpass = "tu_contrase�a";
    $dbname = "tu_base_de_datos";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Verificar si la conexi�n fue exitosa
    if (!$conn) {
        die("Error al conectarse a la base de datos: " . mysqli_connect_error());
    }

    // Sanitizar los datos de entrada del usuario
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Consultar la base de datos para encontrar al usuario
    $query = "SELECT * FROM usuarios WHERE username='$username' AND password=md5('$password')";
    $result = mysqli_query($conn, $query);

    // Verificar si el usuario existe
    if (mysqli_num_rows($result) == 1) {
        // Iniciar sesi�n
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
    } else {
        // Mostrar un mensaje de error
        $error = "Nombre de usuario o contrase�a incorrectos";
    }
    mysqli_close($conn);
}
?>
