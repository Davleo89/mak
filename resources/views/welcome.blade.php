<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="bg-custom-radial">
  @include('include.nav')
  <div class="flex w-[1200px] h-auto justify-center mx-auto mt-[100px]">
    <h1></h1>
    <div class="w-[600px] mx-[30px] text-white text-justify">
      <p>Esta aplicación web permite gestionar tareas de manera eficiente, distribuyéndolas en tres contenedores visuales que facilitan el seguimiento del estado de cada tarea. El flujo de trabajo se organiza de la siguiente manera:<br><br>

        <ul>
          <li><span class="font-bold italic">Tareas por hacer:</span> En este contenedor se agregan las nuevas tareas pendientes, listas para ser asignadas o comenzadas.</li><br>
          <li><span class="font-bold italic">Tareas en curso:</span> Las tareas que están actualmente en proceso se mueven a este contenedor para un fácil seguimiento del progreso.</li><br>
          <li><span class="font-bold italic">Tareas completadas:</span> Una vez finalizadas, las tareas se trasladan a este contenedor, lo que permite llevar un registro claro de las tareas realizadas.</li><br>

          La interfaz es intuitiva y permite una rápida gestión de las tareas, moviéndolas entre contenedores según su estado, ya sea por comenzar, en proceso o finalizadas. Además, la aplicación está optimizada para dispositivos móviles, reorganizando los contenedores de manera vertical en pantallas pequeñas, para asegurar una experiencia de usuario fluida.
        </ul>
      </p>

      
    </div>
    <div class="flex w-[600px] mx-[30px] justify-center items-center grid">
      <div>
        <img src="" alt="image">
      </div>
      <div >
        <button class="bg-gray-200 hover:bg-gray-300 text-gray-500 font-bold py-2 px-6 rounded-lg shadow-inner border border-gray-300 text-sm leading-none">Ingresar</button>
        <button class="bg-gray-200 hover:bg-gray-300 text-gray-500 font-bold py-2 px-6 rounded-lg shadow-inner border border-gray-300 text-sm leading-none">Registar</button>
      </div>
    </div>
  </div>
</body>

</html>