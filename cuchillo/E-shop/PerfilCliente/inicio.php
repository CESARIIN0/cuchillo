<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Fondo de la página con la imagen */
        body {
            background-image: url('images/img1.jpg'); /* Ruta de tu imagen */
            background-size: cover; /* La imagen cubrirá toda la pantalla */
            background-position: center; /* Centra la imagen */
            background-attachment: fixed; /* La imagen se queda fija mientras haces scroll */
            height: 100vh; /* Asegura que el body ocupe toda la altura de la ventana */
            margin: 0; /* Elimina márgenes por defecto */
        }
    </style>
</head>
<body>
  <?php include("header.php") ?>

  <!-- Contenido de la página -->
  <h1 class="text-center text-white mt-5">Bienvenido a mi página con fondo de imagen</h1>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <?php include("footer.php") ?>
</body>
</html>