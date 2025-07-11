
<?php
$destino = 'uploads/' . $_FILES['archivo']['name'];
if (move_uploaded_file($_FILES['archivo']['tmp_name'], $destino)) {
    echo "<p>Archivo subido exitosamente: <a href='$destino'>{$destino}</a></p>";
} else {
    echo "<p>Error al subir el archivo.</p>";
}
?>
<form method="POST" enctype="multipart/form-data">
    Selecciona un archivo: <input type="file" name="archivo"><br>
    <input type="submit" value="Subir">
</form>
