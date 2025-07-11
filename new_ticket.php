
<?php
include('includes/db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $mensaje = $_POST['mensaje'];
    $conn->query("INSERT INTO tickets (titulo, mensaje) VALUES ('$titulo', '$mensaje')");
    echo "<p>Ticket enviado</p>";
}
?>
<form method="POST">
    Título: <input type="text" name="titulo"><br>
    Mensaje: <textarea name="mensaje"></textarea><br>
    <input type="submit" value="Enviar">
</form>
<h3>Tickets enviados:</h3>
<ul>
<?php
$result = $conn->query("SELECT * FROM tickets ORDER BY id DESC LIMIT 5");
while ($row = $result->fetch_assoc()) {
    echo "<li><strong>{$row['titulo']}:</strong> {$row['mensaje']}</li>";
}
?>
</ul>
