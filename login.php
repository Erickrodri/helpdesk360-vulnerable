
<?php
include('includes/db.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($query);
    if ($result && $result->num_rows > 0) {
        $_SESSION['user'] = $user;
        echo "<p>Bienvenido $user</p>";
    } else {
        echo "<p>Credenciales inválidas</p>";
    }
}
?>
<form method="POST">
    Usuario: <input type="text" name="user"><br>
    Contraseña: <input type="password" name="pass"><br>
    <input type="submit" value="Iniciar sesión">
</form>
