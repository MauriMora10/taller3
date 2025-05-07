<?php
require 'db.php';

$title = $_POST['title'];
$content = $_POST['content'];
$imagePath = null;

// Manejar la subida de la imagen
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $imageTmpPath = $_FILES['image']['tmp_name'];
    $imageName = basename($_FILES['image']['name']);
    $uploadDir = 'uploads/';
    $imagePath = $uploadDir . uniqid() . '-' . $imageName;

    // Crear el directorio si no existe
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Mover la imagen al directorio de destino
    move_uploaded_file($imageTmpPath, $imagePath);
}

// Insertar el post en la base de datos
$stmt = $conn->prepare("INSERT INTO posts (title, content, image) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $title, $content, $imagePath);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: posts.php");
exit;
?>
