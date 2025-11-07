<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro | Pequeños Gigantes</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
  <header>
    <h1>¡Únete a Pequeños Gigantes!</h1>
    <p>Elige tu plan y crea tu cuenta para comenzar la aventura educativa</p>
  </header>

  <header>
  <img src="{{ asset('front/img/logo.png') }}" alt="Logo">
    <div class="logo-contenedor">
      <img src="{{ asset('img/logo.png') }}" alt="Logo Pequeños Gigantes">
    </div>
  </header>

  <div class="plan-card">
    <h3>Plan Anual</h3>
    <p class="precio">100.000 COP</p>
    <ul>
      <li>✅ Contenido interactivo para todas las materias.</li>
      <li>✅ Preguntas con niveles de dificultad progresivos.</li>
      <li>✅ Reportes mensuales para padres con el progreso del niño.</li>
    </ul>
    <button class="boton-principal">Elegir</button>
  </div>

  <br>

  <section class="registro">
    <h2>Datos del estudiante</h2>
    <br>

    <form id="formRegistro" method="POST" action="{{ url('/registro') }}">
    @csrf


      <label for="nombre">Nombre completo</label>
      <input type="text" id="nombre" name="nombre" placeholder="Ej. Mariana Pérez">

      <label for="correo">Correo electrónico</label>
      <input type="email" id="correo" name="correo" placeholder="Ej. mariana@email.com">

      <label for="edad">Edad</label>
      <input type="number" id="edad" name="edad">

      <label for="sexo">Sexo</label>
      <select id="sexo" name="sexo">
        <option value="">Selecciona</option>
        <option value="femenino">Femenino</option>
        <option value="masculino">Masculino</option>
        <option value="otro">Otro</option>
      </select>

      <label for="grado">Grado</label>
      <select id="grado" name="grado">
        <option value="">Selecciona</option>
        <option value="primero">Primero</option>
        <option value="segundo">Segundo</option>
        <option value="tercero">Tercero</option>
        <option value="cuarto">Cuarto</option>
        <option value="quinto">Quinto</option>
      </select>

      <label for="contrasena">Contraseña</label>
      <input type="password" id="contrasena" name="contrasena">

      <label for="contrasena_confirmation">Confirmar contraseña</label>
      <input type="password" id="contrasena_confirmation" name="contrasena_confirmation">


      <button type="submit">Registrarse</button>
    </form>

    <p><a href="{{ url('/login') }}">¿Ya tienes cuenta? Inicia sesión aquí</a></p>
  </section>

  <footer>
    <nav>
      <a href="{{ url('/') }}">Inicio</a> |
      <a href="{{ url('/contacto') }}">Contacto</a> |
      <a href="{{ url('/nosotros') }}">Nosotros</a>
    </nav>
    <p>&copy; 2025 Pequeños Gigantes</p>
  </footer>

</body>
</html>
