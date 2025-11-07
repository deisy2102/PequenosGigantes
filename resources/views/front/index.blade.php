<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pequeños Gigantes</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

</head>
<body>

  <header>
    <div class="logo-contenedor">
      <img src="/img/logo.png" alt="Logo Pequeños Gigantes">
      <h1>¡BIENVENIDO A PEQUEÑOS GIGANTES!</h1>
    </div>
  </header>

  <main>
    <section class="materias">
  <h2>Explora un mundo mágico de aprendizaje lleno de diversión y aventuras</h2>
  <div class="materia-grid">
    <div class="materia">
      <img src="/img/matematicas.png" alt="Matemáticas">
      <span>Matemáticas</span>
    </div>

    <div class="materia">
      <img src="/img/libro (1).png" alt="Español">
      <span>Español</span>
    </div>

    <div class="materia">
      <img src="/img/icons8-física-32.png" alt="Ciencias Naturales">
      <span>Ciencias Naturales</span>
    </div>

    <div class="materia">
      <img src="/img/eng.png" alt="Inglés">
      <span>Inglés</span>
    </div>
  </div>
</section>

<br>
    <div class="contenedor-boton">
  <a href="{{ url('/registro') }}" class="boton-principal">¡Únete a Pequeños Gigantes!</button></a>

</div>
  </main>

  <footer>
    <nav>
      <a href="login.html">Iniciar sesión</a> |
      <a href="contacto.html">Contacto</a> |
      <a href="nosotros.html">Nosotros</a>
    </nav>
  </footer>

</body>
</html>
