<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Si el usuario no ha iniciado sesi�n, redirigir a la p�gina de inicio de sesi�n
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
    <p>Esta es una p�gina protegida. Solo puedes verla si has iniciado sesi�n.</p>
    <form action="logout.php" method="post">
        <input type="submit" value="Cerrar sesi�n">
    </form>
</body>
</html>
