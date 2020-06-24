<?php include_once 'includes/templates/header.php' ?>
<section class="seccion contenedor">
  <h2>La mejor conferencia de diseño web en español</h2>
  <p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, amet labore? Earum necessitatibus aut totam praesentium ab, quos illum voluptatibus corrupti architecto atque numquam pariatur laborum nam, libero molestiae accusamus?
  </p>
</section>
<!--Seccion-->
<section class="programa">
  <div class="contenedor-video">
    <video autoplay loop poster="img/bg-talleres.jpg">
      <source src="video/video.mp4" type="video/mp4">
      <source src="video/video.webm" type="video/webm">
      <source src="video/video.ogv" type="video/ogg">
    </video>
  </div>
  <!--Contenedor video-->
  <div class="contenido-programa">
    <div class="contenedor">
      <div class="programa-evento">
        <h2>Programa del evento</h2>
        <?php
        try {
          require_once 'includes/funciones/bd_conexion.php';
          $sql = "SELECT * FROM `categoria_evento` ";
          $resultado = $conn->query($sql);
        } catch (\Exception $e) {
          echo $e->getMessage();
        }
        ?>
        <nav class="menu-programa">
          <?php
          while ($cat = $resultado->fetch_array(MYSQLI_ASSOC)) {
            $categoria = strtolower($cat["cat_evento"]);
          ?>
            <a href="#<?php echo $categoria ?>"><i class="fas <?php echo $cat["icono"]; ?>"></i><?php echo $cat["cat_evento"] ?></a>
          <?php } ?>
        </nav>
        <?php
        try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= " FROM eventos";
          $sql .= " INNER JOIN categoria_evento";
          $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria";
          $sql .= " INNER JOIN invitados";
          $sql .= " ON eventos.id_inv = invitados.invitado_id";
          $sql .= " ANd eventos.id_cat_evento = 1";
          $sql .= " ORDER BY `evento_id` LIMIT 2;";
          $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= " FROM eventos";
          $sql .= " INNER JOIN categoria_evento";
          $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria";
          $sql .= " INNER JOIN invitados";
          $sql .= " ON eventos.id_inv = invitados.invitado_id";
          $sql .= " ANd eventos.id_cat_evento = 2";
          $sql .= " ORDER BY `evento_id` LIMIT 2;";
          $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= " FROM eventos";
          $sql .= " INNER JOIN categoria_evento";
          $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria";
          $sql .= " INNER JOIN invitados";
          $sql .= " ON eventos.id_inv = invitados.invitado_id";
          $sql .= " ANd eventos.id_cat_evento = 3";
          $sql .= " ORDER BY `evento_id` LIMIT 2;";
          $conn->multi_query($sql);
        } catch (\Exception $e) {
          echo $e->getMessage();
        } ?>
        <?php do {
          $resultado = $conn->store_result();
          echo var_dump($resultado);
          $row = $resultado->fetch_all(MYSQLI_ASSOC);
          $i = 0; ?>

          <?php foreach ($row as $evento) { ?>
            <?php if ($i % 2 == 0) { ?>
              <div class="info-curso ocultar clearfix" id="<?php echo strtolower($evento["cat_evento"]); ?>">
              <?php } ?>
              <div class="detalle-evento">
                <h3><?php echo $evento["nombre_evento"]; ?></h3>
                <p><i class="fa fa-clock-o"></i><?php echo $evento["hora_evento"]; ?></p>
                <p><i class="fa fa-calendar"></i><?php echo $evento["fecha_evento"]; ?></p>
                <p><i class="fa fa-user"></i><?php echo $evento["nombre_invitado"] . " " . $evento["apellido_invitado"]; ?></p>
              </div>
              <?php if ($i % 2 == 1) { ?>
                <a href="calendario.php" class="button float-right">Ver Todos</a>
              </div>
            <?php } ?>
            <?php $i++; ?>
          <?php  } ?>

        <?php } while ($conn->more_results() && $conn->next_result());
        ?>
      </div>
      <!--programa evento-->
    </div>
    <!--Contenedor-->
  </div>
  <!--Contenido del programa-->
</section>
<!--Programa-->
<?php echo include_once 'includes/templates/invitados.php' ?>
<!--Invitados-->
<div class="contador parallax">
  <div class="contenedor">
    <ul class="resumen-evento clearfix">
      <li>
        <p class="numero"></p>Invitados
      </li>
      <li>
        <p class="numero"></p>Talleres
      </li>
      <li>
        <p class="numero"></p>Dias
      </li>
      <li>
        <p class="numero"></p>Conferencias
      </li>
    </ul>
  </div>
</div>
<!--Contador-->
<section class="precios seccion">
  <h2>Precios</h2>
  <div class="contenedor">
    <ul class="lista-precios clearfix">
      <li>
        <div class="tabla-precio">
          <h3>Pase por día</h3>
          <p class="numero">30</p>
          <ul>
            <li><i class="fas fa-check"></i>Bocadillos gratis</li>
            <li><i class="fas fa-check"></i>Todas las conferencias</li>
            <li><i class="fas fa-check"></i>Todos los talleres</li>
          </ul>
          <a href="registro.php" class="button hollow">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
          <h3>Todos los dias</h3>
          <p class="numero">50</p>
          <ul>
            <li><i class="fas fa-check"></i>Bocadillos gratis</li>
            <li><i class="fas fa-check"></i>Todas las conferencias</li>
            <li><i class="fas fa-check"></i>Todos los talleres</li>
          </ul>
          <a href="registro.php" class="button">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
          <h3>Pase por dos días</h3>
          <p class="numero">45</p>
          <ul>
            <li><i class="fas fa-check"></i>Bocadillos gratis</li>
            <li><i class="fas fa-check"></i>Todas las conferencias</li>
            <li><i class="fas fa-check"></i>Todos los talleres</li>
          </ul>
          <a href="registro.php" class="button hollow">Comprar</a>
        </div>
      </li>
    </ul>
    <!--Lista precios-->
  </div>
  <!--Contenedor-->
</section>
<!--Precios-->

<div id="mapa" class="mapa"></div>
<!--Mapa-->

<section class="seccion">
  <h2>Testimoniales</h2>
  <div class="testimoniales contenedor clearfix">
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto placeat quasi ad quibusdam unde dolorem inventore beatae et laborum fuga, facere blanditiis repellendus ducimus harum animi dolores ipsa neque in.</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--Testimonial-->
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto placeat quasi ad quibusdam unde dolorem inventore beatae et laborum fuga, facere blanditiis repellendus ducimus harum animi dolores ipsa neque in.</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--Testimonial-->
    <div class="testimonial ">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto placeat quasi ad quibusdam unde dolorem inventore beatae et laborum fuga, facere blanditiis repellendus ducimus harum animi dolores ipsa neque in.</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--Testimonial-->
  </div>
  <!--Testimoniales-->
</section>
<!--seccion-->

<div class="newsletter parallax">
  <div class="contenido contenedor">
    <p>Registrate en el newsletter:</p>
    <h3>GLDWebcamp</h3>
    <a href="#" class="button transparente">Registro</a>
  </div>
  <!--contenido-->
</div>
<!--Newsletter-->

<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta-regresiva contenedor">
    <ul class="clearfix">
      <li>
        <p class="numero" id="dias"></p>dias
      </li>
      <li>
        <p class="numero" id="horas"></p>horas
      </li>
      <li>
        <p class="numero" id="minutos"></p>minutos
      </li>
      <li>
        <p class="numero" id="segundos"></p>segundos
      </li>
    </ul>
  </div>
</section>
<!--seccion-->

<?php include_once 'includes/templates/footer.php' ?>
