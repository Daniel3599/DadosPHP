<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Tema 5</title>
    <meta charset="utf-8">
    <meta name="author" content="Daniel Alegria Martin">
  </head>
  <body>
    <header>
      <h1>Caso Práctico 1</h1>
    </header>
    <main>
      <div>
        <h2>¡Tira tus dados!</h2>
      </div>
      <div>
        <?php
          include "Dado.php";
          $dado1 = new Dado();

          for ($i=1; $i < 13; $i++) {
            echo "El resultado de la tirada " . $i . " es: " . $dado1 -> tirarDado();
            echo "<br>";
          }
          ?>
      </div>
  </main>
  </body>
</html>
