<?php include_once 'includes/templates/header.php' ?>
  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, amet labore? Earum necessitatibus aut totam praesentium ab, quos illum voluptatibus corrupti architecto atque numquam pariatur laborum nam, libero molestiae accusamus?
    </p>
  </section><!--Seccion-->
  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogg">
      </video>
    </div><!--Contenedor video-->
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
            <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
            <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
          </nav>
          <div class="info-curso ocultar clearfix" id="talleres">
            <div class="detalle-evento">
              <h3>HTML5,Css3 y JavaScript</h3>
              <p><i class="far fa-clock"></i> 16:00 hrs </p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic </p>
              <p><i class="fas fa-user"></i> Juan Pablo de la Torre Valdez</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p><i class="far fa-clock"></i> 20:00 hrs </p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic </p>
              <p><i class="fas fa-user"></i> Juan Pablo de la Torre Valdez</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!--Talleres-->
          <div class="info-curso ocultar clearfix" id="conferencias">
            <div class="detalle-evento">
              <h3>Como ser freelancer</h3>
              <p><i class="far fa-clock"></i> 10:00 hrs </p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic </p>
              <p><i class="fas fa-user"></i> Gregorio Sanchez</p>
            </div>
            <div class="detalle-evento">
              <h3>Tecnologias del futuro</h3>
              <p><i class="far fa-clock"></i> 17:00 hrs </p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic </p>
              <p><i class="fas fa-user"></i> Susan Sanchez</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!--Conferencias-->
          <div class="info-curso ocultar clearfix" id="seminarios">
            <div class="detalle-evento">
              <h3>Diseño UX/UI para moviles</h3>
              <p><i class="far fa-clock"></i> 17:00 hrs </p>
              <p><i class="fas fa-calendar-alt"></i> 11 de Dic </p>
              <p><i class="fas fa-user"></i>Harold Garcia</p>
            </div>
            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="far fa-clock"></i> 10:00 hrs </p>
              <p><i class="fas fa-calendar-alt"></i> 11 de Dic </p>
              <p><i class="fas fa-user"></i> Susana Rivera</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!--Seminarios-->
        </div><!--Evento-->
      </div><!--Contenedor-->
    </div><!--Contenido del programa-->
  </section><!--Programa-->
  <section class="invitados contenedor seccion">
    <h2>Nuestros invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="">
          <p>Rafael Bautista</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="">
          <p>Shari Herrera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="">
          <p>Gregorio Sanches</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="">
          <p>Susana Rivera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="">
          <p>Harold Gracia</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="">
          <p>Susan Sanchez</p>
        </div>
      </li>
    </ul><!--Lista invitados-->
  </section><!--Invitados-->
  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero">6</p>Invitados</li>
        <li><p class="numero">15</p>Talleres</li>
        <li><p class="numero">3</p>Dias</li>
        <li><p class="numero">9</p>Conferencias</li>
      </ul>
    </div>
  </div><!--Contador-->
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
            <a href="registro.html" class="button hollow">Comprar</a>
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
            <a href="registro.html" class="button">Comprar</a>
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
            <a href="registro.html" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul><!--Lista precios-->
    </div><!--Contenedor-->
  </section><!--Precios-->

  <div id="mapa" class="mapa"></div><!--Mapa-->

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
      </div><!--Testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto placeat quasi ad quibusdam unde dolorem inventore beatae et laborum fuga, facere blanditiis repellendus ducimus harum animi dolores ipsa neque in.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--Testimonial-->
      <div class="testimonial ">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto placeat quasi ad quibusdam unde dolorem inventore beatae et laborum fuga, facere blanditiis repellendus ducimus harum animi dolores ipsa neque in.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--Testimonial-->
    </div><!--Testimoniales-->
  </section><!--seccion-->

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Registrate en el newsletter:</p>
      <h3>GLDWebcamp</h3>
      <a href="#" class="button transparente">Registro</a>
    </div><!--contenido-->
  </div><!--Newsletter-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p class="numero">80</p>dias</li>
        <li><p class="numero">15</p>horas</li>
        <li><p class="numero">5</p>minutos</li>
        <li><p class="numero">30</p>segundos</li>
      </ul>
    </div>
  </section><!--seccion-->
 
  <?php include_once 'includes/templates/footer.php' ?>