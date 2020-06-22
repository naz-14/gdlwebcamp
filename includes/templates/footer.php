<footer class="site-footer">
  <div class="contenedor clearfix">
    <div class="footer-informacion">
      <h3>Sobre <span>gdlwebcamp</span></h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic id cum dolor! A ducimus, corporis tenetur voluptate consequatur reprehenderit cumque eveniet quaerat! Eos mollitia facilis quidem atque, sequi cumque maxime?</p>
    </div>
    <div class="ultimos-tweets">
      <h3>ultimos <span>tweets</span></h3>
      <ul>
        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel reiciendis pariatur cumque ea eius ducimus sed nostrum aspernatur qui aliquam, earum laboriosam ut itaque voluptates nam et veniam soluta. Libero!</li>
        <li>Culpa natus non temporibus impedit tenetur voluptatibus eius id molestiae tempora! Nesciunt totam quasi enim, corrupti sunt, reprehenderit laboriosam maxime dicta odit molestiae eius officiis doloribus nam, libero ea! Molestias!</li>
        <li>Repellendus quaerat dolores voluptas officiis, ratione aliquam natus quidem, molestiae animi necessitatibus magnam enim cumque inventore adipisci sunt numquam distinctio dignissimos doloremque repudiandae magni nulla commodi! At nostrum ipsum dolor!</li>
      </ul>
    </div>
    <div class="menu">
      <h3>Redes <span>sociales</span></h3>
      <nav class="redes-sociales">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-pinterest-p"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </nav>
    </div>
  </div>
  <p class="copyright">Todos los derechos reservados GDLWEBCAMP</p>
</footer>




<script src="js/vendor/modernizr-3.8.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
</script>
<script src="js/plugins.js"></script>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.animateNumber.js"></script>
<script src="js/jquery.countdown.js"></script>
<?php
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);
if ($pagina == "invitados" || $pagina == "index") {
  echo '<script src="js/jquery.colorbox.js"></script>';
} else if ($pagina == "conferencia") {
  echo '<script src="js/lightbox.js"></script>';
}
?>


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function() {
    ga.q.push(arguments)
  };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('set', 'transport', 'beacon');
  ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>