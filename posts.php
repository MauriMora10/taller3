<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista de Posts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
      font-family: 'Arial', sans-serif;
    }
    .container {
      margin-top: 50px;
    }
    h2 {
      font-size: 2.5rem;
      font-weight: bold;
      color: #333;
      text-align: center;
      margin-bottom: 30px;
    }
    .btn-primary, .btn-secondary {
      font-size: 1rem;
      padding: 10px 20px;
      border-radius: 30px;
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-title {
      font-size: 1.5rem;
      font-weight: bold;
      color: #333;
    }
    .card-text {
      color: #555;
    }
    .text-muted {
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
<div class="container">
  <h2>Lista de Blogs</h2>
  <div class="d-flex justify-content-between mb-4">
    <a href="create.php" class="btn btn-primary">Crear nuevo post</a>
    <a href="index.html" class="btn btn-secondary">Inicio</a>
  </div>

  <?php
  $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
  while ($row = $result->fetch_assoc()):
  ?>
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
        <?php if (!empty($row['image'])): ?>
          <img src="<?php echo htmlspecialchars($row['image']); ?>" 
            class="img-fluid mb-3" 
            alt="Imagen del post"
            style="display: block; max-width: 400px; max-height: 400px; width: auto; margin: 0 auto;">
        <?php endif; ?>
        <p class="card-text"><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
        <p class="card-text"><small class="text-muted">Publicado: <?php echo $row['created_at']; ?></small></p>
      </div>
    </div>
  <?php endwhile; ?>
</div>
</body>
</html>
