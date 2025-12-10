<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombres'] ?? '';
    $apellido = $_POST['apellidos'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $pass = $_POST['pass'] ?? '';
    $tlf = $_POST['tlf'] ?? '';
    
    echo "<h2>¡Formulario recibido!</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellido:</strong> $apellido</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Teléfono:</strong> $tlf</p>";
    
    $datos = date('Y-m-d H:i:s') . " - $nombre $apellido - $correo - $tlf\n";
    file_put_contents('registros.txt', $datos, FILE_APPEND);
    
    echo "<p><a href='formulario.html'>Volver al formulario</a></p>";
    
} else {
    echo "<h2>Error: No se recibieron datos</h2>";
    echo "<p>Por favor, completa el formulario primero.</p>";
    echo "<p><a href='formulario.html'>Ir al formulario</a></p>";
}
?>