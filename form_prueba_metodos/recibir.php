<?php
// $_SERVER['REQUEST_METHOD'] nos dice qué método se usó
$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo === 'GET') {
    $nombre = $_GET['nombre'] ?? '';
    $edad   = $_GET['edad'] ?? '';
} else {
    $nombre = $_POST['nombre'] ?? '';
    $edad   = $_POST['edad'] ?? '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado</title>
</head>
<body>

  <h2>Los datos llegaron por: <?php echo $metodo; ?></h2>

  <p>Nombre: <?php echo htmlspecialchars($nombre); ?></p>
  <p>Edad: <?php echo htmlspecialchars($edad); ?></p>

  <p><strong>Mira la barra de direcciones del navegador:</strong></p>
  <ul>
    <li>Con GET verás algo como <code>recibir.php?nombre=Ana&amp;edad=25</code></li>
    <li>Con POST verás solo <code>recibir.php</code></li>
  </ul>

  <a href="formulario.html">Volver</a>

</body>
</html>
