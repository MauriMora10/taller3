<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crear Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
      font-family: 'Arial', sans-serif;
    }
    .container {
      margin-top: 50px;
      max-width: 600px;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h2 {
      font-size: 2rem;
      font-weight: bold;
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }
    .form-label {
      font-weight: bold;
      color: #555;
    }
    .btn-success {
      font-size: 1rem;
      padding: 10px 20px;
      border-radius: 30px;
    }
    .btn-secondary {
      font-size: 1rem;
      padding: 10px 20px;
      border-radius: 30px;
    }
  </style>
</head>
<body>
<div class="container">
  <h2>Crear Nuevo Post</h2>
  <form action="save_post.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="title" class="form-label">Título</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Escribe el título del post" required>
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Contenido</label>
      <textarea name="content" id="content" class="form-control" rows="5" placeholder="Escribe el contenido del post" required></textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Imagen</label>
      <input type="file" name="image" id="image" class="form-control" accept="image/*">
    </div>
    <div class="d-flex justify-content-between">
      <button type="submit" class="btn btn-success">Guardar</button>
      <a href="index.html" class="btn btn-secondary">Inicio</a>
    </div>
  </form>
</div>
</body>
</html>
