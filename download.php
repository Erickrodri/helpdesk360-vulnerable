
<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    include($file);
} else {
    echo "<p>Archivo no especificado.</p>";
}
?>
