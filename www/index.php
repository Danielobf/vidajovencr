<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Young Life | Vida Joven Costa Rica</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
<script src="js/jquery.slides.min.js"></script>
<script src="js/index.js"></script>
</head>
<body>
<?php include("includes/header.php") ?> 
<div id="contenedor">
  <div id="fotos">
      <img src="images/fotos_index/1.png" alt="Vida Joven Young Life Costa Rica"/>
      <img src="images/fotos_index/2.png" alt="Vida Joven Young Life Costa Rica"/>
      <img src="images/fotos_index/3.png" alt="Vida Joven Young Life Costa Rica"/>
      <img src="images/fotos_index/4.png" alt="Vida Joven Young Life Costa Rica"/>
      <img src="images/fotos_index/5.png" alt="Vida Joven Young Life Costa Rica"/>
  </div>
    <div id="testimonios"><img src="images/testimonios/<?php echo rand(1,15)?>.png" alt="Testimonios Vida Joven Young Life Costa Rica"/></div>
  <div id="areas">
  	<ul>
    	<div id="encuentranos"><h5 class="enc">Encu&eacute;ntranos en</h5>
        <h1 class="enc">Facebook</h1></div>
  		<li><a href="https://www.facebook.com/pages/Vida-Joven-Área-Este/531732240179309" class="boton-area"><h4>&Aacute;rea Este</h4></a></li>
  		<li><a href="https://www.facebook.com/CentralVJ?fref=ts" class="boton-area"><h4>&Aacute;rea Central</h4></a></li>
 		<li><a href="https://www.facebook.com/vjnorte" class="boton-area"><h4>&Aacute;rea Norte</h4></a></li>
  		<li><a href="https://www.facebook.com/VidaJovenAreaOeste?fref=ts" class="boton-area"><h4>&Aacute;rea Oeste</h4></a></li>
  		<li><a href="https://www.facebook.com/pages/Young-Life-International-Schools-Costa-Rica/354482144657896?fref=ts" class="boton-area"><h4>Colegios Internacionales</h4></a></li>
  		<li><a href="https://www.facebook.com/pages/Vidas-Jovenes-Costa-Rica/215824008487295?fref=ts" class="boton-area"><h4>Vidas J&oacute;venes</h4></a></li>
   </ul>
  </div>
  <div id="noticias">
      <?php
      $noticias = rand(1,5);
      echo $noticias;
      switch($noticias)
      {
          case 1:
          {
              echo '<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FVidaJovenAreaOeste%3Ffref%3Dts&amp;width=237&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:237px; height:590px;" allowTransparency="true"></iframe>';
              break;
          }
          case 2:
          {
              echo '<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FCentralVJ%3Ffref%3Dts&amp;width=237&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:237px; height:590px;" allowTransparency="true"></iframe>';
              break;
          }
          case 3:
          {
              echo '<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FVida-Joven-%25C3%2581rea-Este%2F531732240179309%3Ffref%3Dts&amp;width=292&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:237px; height:590px;" allowTransparency="true"></iframe>';
              break;
          }
          case 4:
          {
              echo '<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FVida-Joven-%25C3%2581rea-Este%2F531732240179309%3Ffref%3Dts&amp;width=292&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:237px; height:590px;" allowTransparency="true"></iframe>';
              break;
          }
          default:
          {
              echo '<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FVida-Joven-%25C3%2581rea-Este%2F531732240179309%3Ffref%3Dts&amp;width=292&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:237px; height:590px;" allowTransparency="true"></iframe>';
          }
      }
      ?>
  </div>
</div>
<?php include("includes/footer.php") ?> 
</body>
</html>
