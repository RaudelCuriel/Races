



<div id="flashnews" class="grid_16 alpha">
<div id="blank" class="grid_1 alpha">&nbsp;</div>
<div id="fotos" class="grid_14 omega">
<!--<img src="images/flashNews/<?php echo $_REQUEST['l']; ?>/banner.jpg" width="820" height="390" border="0" />-->
<ul class="bjqs">
<!--<li><img src="images/<?php echo $_REQUEST['l']; ?>/banner1.jpg" /></li>-->
<li><img src="images/slider/01.jpg" title="2014 Tecate SCORE San Felipe 250"></li>
<li><img src="images/slider/02.jpg" title="2014 Tecate SCORE San Felipe 250"></li>
<li><img src="images/slider/03.jpg" title="2014 Tecate SCORE San Felipe 250"></li>
<li><img src="images/slider/04.jpg" title="2014 Tecate SCORE San Felipe 250"></li>
<li><img src="images/slider/05.jpg" title="2014 Tecate SCORE San Felipe 250"></li>
<li><img src="images/slider/06.jpg" title="2014 Tecate SCORE San Felipe 250"></li>
<li><img src="images/slider/07.jpg" title="2014 Tecate SCORE San Felipe 250"></li>
<li><img src="images/slider/08.jpg" title="2014 Tecate SCORE San Felipe 250"></li>
<li><img src="images/slider/09.jpg" title="2014 Tecate SCORE San Felipe 250"></li>
<li><img src="images/slider/10.jpg" title="2014 Tecate SCORE San Felipe 250"></li>
</ul>

</div>
<script class="secret-source">
      jQuery(document).ready(function($) {
        
        $('#fotos').bjqs({
          animtype      : 'fade',
			animduration : 450,
          height        : 390,
          width         : 820,
          responsive    : true,
          randomstart   : false
        });
        
      });
    </script> 
<!--CONTDOWN SCRIPT-->
 <style type="text/css">
  @import "js/jquery.countdown.css";
  

  </style>
  <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
  <script type="text/javascript">
    $(function () {
    var austDay = new Date();
    austDay = new Date(2014, 3-1, 15, 13);
    $('#defaultCountdown').countdown({until: austDay});
    $('#year').text(austDay.getFullYear());
  });
  </script><div id="blank2" class="grid_1 alpha">&nbsp;</div>
<!--  END OF COUNTDOWN SCRIPT-->
</div>
<div id="promoBanner" class="grid_16 alpha"><img src="images/<?php echo $_REQUEST['l']; ?>/estacion21.gif" />
<div id="titulos" class="grid_16 alpha"><img usemap="#Map" src="images/<?php echo $_REQUEST['l']; ?>/secciones.png" />
  <map name="Map" id="Map">
    <area shape="rect" coords="504,4,882,46" href="index.php?id=videos_todos" />
    <area shape="rect" coords="41,6,412,46" href="index.php?id=prensa" />
  </map>
</div>
<div id="cuadros" class="grid_16 alpha">
<div id="noticias" class="grid_7 suffix_1 alpha">
<div style="text-align:center;">

<!--********************************* RAUDEL  **************************************-->


<!--********************************* COMENTAR DIA DE CARRERA AL FINAL•• GPS CARRERA **************************************-->
<div class="bannerrace"><img src="images/<?php echo $_REQUEST['l']; ?>/bannerrace.jpg" /></div>

<div class="tiempocarrera"><?php echo TIEMPO; ?></div>
<div id='defaultCountdown'></div>

<!--************************************ BOTON **************************************-->


<!--BOTON OFF-->
<!--<a class="botonBaja" data-tooltip="Boton sera encencido el dia de la carrera." href="#"><?php echo BOTON; ?></a>-->

<!--BOTON ENCENDIDO-->
<a class="botonBajaOn " href="http://vildosolaracing.com/race" t="_blank"><?php echo BOTON; ?></a>



<!--************************************ FIN BOTON **************************************-->



<a href="http://www.branix.com"><img src="images/branixpb.png" alt="" /></a>



<!--<div class="blink_me" style="color: #fff;font-size: 16px;"><?php echo HORACARRERA; ?></div>-->


<!--********************************* POSICIONES ••• MINT 400 **************************************-->


<!--********************************* PRIMER LUGAR **************************************-->
<!--<div class="bannerrace"><img src="images/<?php echo $_REQUEST['l']; ?>/1m400.jpg" /></div>-->

<!--********************************* SEGUNDO LUGAR **************************************-->
<!--<div class="bannerrace"><img src="images/<?php echo $_REQUEST['l']; ?>/2m400.jpg" /></div>-->


<!--********************************* TERCER LUGAR **************************************-->
<!--<div class="bannerrace"><img src="images/<?php echo $_REQUEST['l']; ?>/3m400.jpg" /></div>-->












<!--********************************* NO TOCAR FUCHI **************************************-->

<!--********************************* PRIMER LUGAR SANFELIPE 250**************************************-->
<div class="bannerrace"><img src="images/<?php echo $_REQUEST['l']; ?>/1.jpg" /></div>




<div style="border: 1px solid #333;margin-top: 20px; margin-bottom: 20px; width: 100%;"></div>
<div class="baja1000txt"><?php echo BAJA_1000; ?></div>
<img src="images/TTrojo.png"/>



</div>
<div style="border: 1px solid #333;margin-top: 20px; margin-bottom: 20px; width: 100%;"></div>
<img style="margin:10px 0 0 18px ;" src="images/<?php echo $_REQUEST['l']; ?>/lider.jpg"  />
<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FVildosolaRacingOfficial&amp;width=300&amp;height=590&amp;colorscheme=dark&amp;show_faces=true&amp;border_color=%23333&amp;stream=true&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:590px;" allowTransparency="true"></iframe>
<!--<iframe src="ultimas_noticias.inc.php" scrolling="auto" frameborder="0" width="370" height="310"></iframe>-->
</div>
<div id="noticias" class="grid_7 suffix_1 omega" style="diplay:">
<iframe src="videos.inc.php" scrolling="auto" frameborder="0" width="420" height="310"  class="margen">	</iframe>

<!--================ CALENDARIO	================-->
<!--<div class="tablaCalendario">
<h2 style="margin-bottom:0px; color:#fff;text-align:left;"><?php echo RACE2013; ?></h2>
<table>

<tr>
<th>Serial</th>
<th>Carrera</th>
<th>Lugar </th>
<th>Fecha</th>
</tr>
</table>
<?php
$result = mysql_query("SELECT id as 'cid', fecha_inicio, fecha_final, serial, carrera, lugar 
FROM calendario 
ORDER BY fecha_inicio ASC");
while($row = mysql_fetch_array($result)){
extract($row);
?>
<table>
<tr>
<td><?php echo strtoupper($serial); ?></td>
<td><?php echo $carrera; ?></td>
<td><?php echo $lugar; ?></td>
<td><?php echo fechaCalendario($fecha_inicio, $fecha_final, $_REQUEST['l']); ?></td>
</tr>
</table>
<?php
}
?>
</div>-->
<!-- ========================== --->
<div class="newsletter">

<form action="newsletter.php" method="post" name="contacto" onSubmit="return formvalidation(contacto)">
<div id="correo"><h1><?php echo strtoupper(NEWSLETTER); ?>:</h1></div>
<div style="font-size:14px;" id="correo"><?php echo strtoupper(CORREO); ?>:</div>
<div id="c_correo" style="float:left;"><input type="text" name="email" size="200" maxlength="120" style="width:300px;"></div>
<input style="border:0px; background:transparent;width:auto;margin-top:11px " class="boton_enviar resetbtn" type="image" name="search" src="images/contacto/<?php echo $_REQUEST['l']; ?>/enviar.png" border="0">

</form>
</div></div>

</div>