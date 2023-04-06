<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Si el usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Esta es una página protegida. Solo puedes verla si has iniciado sesión.</p>
    <form action="logout.php" method="post">
        <input type="submit" value="Cerrar sesión">
    </form>
</body>
</html>
