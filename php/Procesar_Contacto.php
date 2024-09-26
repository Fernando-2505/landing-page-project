<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    try {
        $dsn = "mysql:host=localhost;dbname=landing_page";
        $username = "root"; // Cambia esto si tu usuario de MySQL es diferente
        $password = "";     // Cambia esto si tu contraseña de MySQL es diferente
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

        $pdo = new PDO($dsn, $username, $password, $options);

        // Insertar los datos en la base de datos
        $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (:nombre, :email, :mensaje)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mensaje', $mensaje);
        $stmt->execute();

        echo "¡Gracias por contactarnos! Te responderemos pronto.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
