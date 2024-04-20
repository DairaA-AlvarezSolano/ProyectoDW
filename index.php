<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Museo</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <img src="../Equipo1/img/logo1.jpeg" alt="Logo">
      </div>
      <h1>Museo Nacional de las Culturas del Mundo</h1>
      <ul>
        <li class="btn-nav"><a href="#informacion">Información</a></li>
        <li class="btn-nav"><a href="#exposiciones">Exposiciones</a></li>
      </ul>
    </nav>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;500&display=swap" rel="stylesheet">
  </header>
  <main>
    <div class="img-home">
      <img src="../Equipo1/img/img-home.jpeg" alt="Foto de museo">
    </div>
    <div>
      <h2>Bienvenidx</h2>
      <p>

        ¡Bienvenido al Museo de las Culturas del Mundo!

        Explora la riqueza de la diversidad humana a través de exposiciones fascinantes que abarcan desde civilizaciones
        antiguas hasta expresiones contemporáneas. Descubre las conexiones que unen a la humanidad mientras te sumerges
        en la belleza de la creatividad global. ¡Disfruta tu visita y descubre el mundo con nosotros!
      </p>
    </div>
    <div class="info">
      <h2 id="informacion">Información</h2>
      <p>
        Sumérgete en una experiencia única que trasciende fronteras en el Museo Nacional de Culturas del Mundo. Situado
        en el corazón de la ciudad, nuestro museo es un santuario de conocimiento que celebra la diversidad cultural en
        todas sus formas.

        Desde las primeras civilizaciones hasta las vibrantes expresiones contemporáneas, cada rincón del museo te
        transporta a través del tiempo. Descubre artefactos antiguos meticulosamente conservados, que cuentan la
        historia de las culturas que han dado forma a la humanidad. Las exposiciones temáticas te guiarán a través de
        las eras, ofreciendo una visión fascinante de la evolución de las costumbres, las creencias y las formas de
        expresión a lo largo de los siglos.
      <div class="info-p">
        <h3>Experiencias Interactivas</h3>
        <p>
          Sumérgete en la riqueza de las culturas a través de experiencias interactivas. Participa en talleres,
          demostraciones y actividades que te acercarán a las tradiciones y las artes de diferentes partes del mundo.
          Nuestro compromiso es ofrecer no solo un viaje visual, sino también una inmersión activa en las maravillas de
          la
          diversidad cultural.
        </p>
      </div>
      <div class="info-p">
        <h3>Conexiones Universales</h3>
        <p>
          A medida que exploras las galerías, descubrirás las conexiones que unen a la humanidad. A pesar de las
          diferencias geográficas y temporales, verás cómo valores fundamentales, mitos compartidos y expresiones
          artísticas han trascendido culturas y continentes. El Museo Nacional de Culturas del Mundo es un tributo a la
          unidad en la diversidad.
        </p>
      </div>
      <div class="info-p">
        <h3>Programación Educativa</h3>
        <p>
          Nuestro compromiso con la educación se refleja en programas didácticos diseñados para todas las edades. Desde
          visitas escolares hasta conferencias especializadas, el museo es un centro de aprendizaje dinámico que busca
          fomentar la comprensión global y la apreciación de las diferencias culturales.</p>
      </div>
      <div class="info-p">
        <h3>Eventos Especiales</h3>
        <p>
          El museo cobra vida con una agenda emocionante de eventos especiales. Desde celebraciones culturales hasta
          charlas con expertos, hay siempre algo nuevo que descubrir. Mantente actualizado con nuestro calendario para
          no
          perderte las experiencias únicas que ofrecemos.</p>
      </div>
      </p>
    </div>
    <div class="info">
      <h2 id="exposiciones">Exposiciones</h2>
      <p>
        Te damos la bienvenida al Museo Nacional de Culturas del Mundo, un fascinante palacio que abre sus puertas para
        llevarte en un intrigante viaje a través de las antiguas civilizaciones. Explora las riquezas culturales de
        Egipto, Mesopotamia, Grecia y Roma, así como la enigmática Persia, en cuatro salas permanentes dedicadas a cada
        maravilla.

        Cada sala es un capítulo único que revela la grandeza y la diversidad de estas culturas, destacando desde
        jeroglíficos egipcios hasta las epopeyas de Mesopotamia, desde la filosofía griega hasta la ingeniería romana y
        las maravillas persas. Este palacio cultural es un espacio que respira historia, donde las narrativas del pasado
        se entrelazan con la arquitectura majestuosa que lo rodea.

        Además de estas joyas permanentes, el palacio también presenta exposiciones temporales, ampliando tu comprensión
        con conexiones sorprendentes entre culturas a lo largo del tiempo.
        <br>
        Si quieres conocer más, da clic sobre cada exposición
      </p>
      <div class="container">
        <a href="egipto.html">
          <div class="section">
            <img src="../Equipo1/img/egipto.jpg" alt="Expo egipto">
            <h3>Egipto</h3>
            <p>Bienvenido a la Sala de Egipto, donde las puertas se abren a un viaje a través de los misterios del
              Antiguo Egipto. Desde jeroglíficos enigmáticos hasta tesoros faraónicos, cada objeto expuesto cuenta la
              historia de una civilización que floreció a lo largo del Nilo. </p>
          </div>
        </a>
        <a href="mesopotamia.html">
          <div class="section">
            <img src="../Equipo1/img/mesopotamia.jpg" alt="Expo mesopotamia">
            <h3>Mesopotamia</h3>
            <p>Embárcate en un viaje a la cuna de las civilizaciones en la Sala de Mesopotamia. Explora los secretos de
              la escritura cuneiforme, los zigurats que tocaron el cielo y las epopeyas que han resistido el paso del
              tiempo. Esta sala te sumerge en la fascinante historia de las primeras sociedades que se alzaron entre los
              ríos Tigris y Éufrates, dejando un legado perdurable.</p>
          </div>
        </a>
        <a href="persia.html">
          <div class="section">
            <img src="../Equipo1/img/persia.jpg" alt="Expo persia">
            <h3>Persia</h3>
            <p>Sumérgete en la Sala de Persia, un rincón dedicado a la enigmática y rica historia de esta antigua
              civilización. Desde las majestuosas ruinas de Persépolis hasta las rutas comerciales de la seda, descubre
              la grandeza de Persia, una cultura que ha tejido influencias a través de los siglos.</p>
          </div>
        </a>
        <a href="greciayroma.html">
          <div class="section">
            <img src="../Equipo1/img/greciaroma.jpg" alt="Expo grecia y roma">
            <h3>Grecia y Roma</h3>
            <p>Adéntrate en la Sala de Grecia y Roma, donde la majestuosidad de dos civilizaciones extraordinarias se
              entrelaza en una experiencia cautivadora. Desde la elegancia intelectual de la antigua Grecia hasta el
              poderío y la grandiosidad del Imperio Romano, este espacio te sumerge en la riqueza cultural de dos épocas
              cruciales de la historia.</p>
          </div>
        </a>
      </div>
    </div>

    <div class="contacto" id="contacto">
      <h2>Deja tu opinión :) </h2>


      <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="correo">Correo:</label><br>
        <input type="email" id="correo" name="correo"><br>

        <label for="experiencia">Experiencia:</label><br>
        <select id="experiencia" name="experiencia">
          <option value="buena">Buena</option>
          <option value="mala">Mala</option>
          <option value="regular">Regular</option>
        </select><br>

        <label for="comentarios">Comentarios:</label><br>
        <textarea id="comentarios" name="comentarios"></textarea><br>

        <input type="submit" value="Enviar">

<br><br>
        <?php
       if (isset($_SESSION['message'])) {
          echo $_SESSION['message'];
          unset($_SESSION['message']);
       }
       ?>
      </form>
    </div>

  </main>
  <footer>
    <div class="footer-content">
      <h3>DADev</h3>
      <p>Integrantes</p>
      <ul class="integrantes">
        <li>Álvarez Solano Daira Aketzalli</li>
        <li>Domínguez Reyes Cynthia Berenice</li>
        <li>Rea Aparicio Angel David</li>
      </ul>
      <img class="footer-img" src="../Equipo1/img/logo1.jpeg" alt="Logo">
    </div>
  </footer>
</body>

</html>