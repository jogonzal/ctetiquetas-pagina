<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CT Etiquetas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">


       
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
       <script src="js/slides/jquery.slides.min.js"></script>
	   <script src="js/cycle.js"></script>
  </head>
    <body>

        <header>
        	<a href="index.html"><img class="logo" src="img/Logo.png" alt="CTEtiquetas"/></a>
        	<nav id="nav">
	        	<ul>
	        		<li><a href="nosotros.html" >Nosotros</a></li>
	        		<li><a href="productos.html">Productos</a></li>
	        		<li><a href="industrias.html">Industrias</a></li>
	        		<li><a href ="especialidades.html">Especialidades</a></li>
	        		<li><a href="contacto.php">Contacto</a></li>
	        	</ul>
        	</nav>
        	<a style="color:#F4F4F4;" href="http://www.youtube.com/user/GrupoEmpresarialCT/about" target="_blank">
        		<img class="social" src="img/Youtube.png" border="0">
        	</a>
        	<a style="color:#F4F4F4;" href="http://grupoempresarialct.blogspot.mx/" target="_blank">
        		<img class="social" src="img/Blogger.png" alt="Blogger">
        	</a>
        	<a style="color:#F4F4F4;" href="http://www.linkedin.com/company/3021592?trk=tyah" target="_blank">
        		<img class="social" src="img/Linkedin.png" alt="Linkedin">
        	</a>
        </header>
        
        <div class="columnas">
			<div class="col">
					<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msid=200070241754971124047.0004d9f0ccc8d326b2ce4&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;iwloc=0004d9f0cccbcea50c098&amp;ll=25.707898,-100.367489&amp;spn=0.031089,0.049438&amp;output=embed"></iframe><br /><small>Ver <a href="https://maps.google.com/maps/ms?msid=200070241754971124047.0004d9f0ccc8d326b2ce4&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;iwloc=0004d9f0cccbcea50c098&amp;ll=25.707898,-100.367489&amp;spn=0.031089,0.049438&amp;source=embed" style="color:#0000FF;text-align:left">Grupo Empresarial CT</a> en un mapa ampliado</small>
			</div>
		
		
			<div class="col">
				<div class="contentBigTitle">
					<span class="contentTitle">Contáctanos</span>
					<br />
				</div>
				<form id="formContact" method="get" class="text">
					<label>Nombre</label>
					<input type="text" name="nombre" />
					<label>Correo</label>
					<input type="text" name="correo"/>
					<label>Teléfono</label>
					<input type="text" name="telefono"/>
					<label>Mensaje</label>
					<textarea name="mensaje"></textarea>
					<button class="boton2" type="submit">Enviar</button>
				</form>
				<?php
					if (isset($_REQUEST['nombre']))
					  {
					  //send email
					  $email = "info@ctetiquetas.com";
					  $subject = "Solicitud de contacto a través de página ctetiquetas.com de " . $_REQUEST['correo'];
					  $message = "Se ha recibido una solicitud de contacto en la página ctetiquetas.com. \nNombre: " .
					  $_REQUEST['nombre'] .
					  "\nCorreo: " . $_REQUEST['correo'] .
					  "\nTeléfono: " . $_REQUEST['telefono'] .
					  "\nMensaje:\n" . $_REQUEST['mensaje'] .
					  "\n\nDesarrollado por Big Black Suitcase";
					  mail("info@ctetiquetas.com", $subject, $message, "From:" . $email);
					  echo '<p class="text" style="float:right; font-size: 0.65em;">Tu mensaje ha sido enviado. ¡Espera una respuesta pronto!</p>';
					  }
				?>
			</div>
		</div>
		
		<hr />
		<footer>
			<p class="slogan">
			CT Etiquetas: Una etiqueta para cada necesidad.
			<br />
			</p>
			<p class="gerber">
			<img class="gerberImage" src="img/Gerber.png" alt="" href="http://www.gerbertechnology.com/"/>
			A Gerber Technology Partner
			</p>
			<p class="direccion">Joaquín García 256, Col. Burócratas del Estado, Monterrey, N.L. C.P. 64380, Tel. y Fax 1158-65-65 info@ctetiquetas.com
				<br />
			</p>
			<p class="BBS">Desarrollado por</p><a target="_blank" href="http://www.bigblacksuitcase.com"><img class="BBSicon" src="img/BBSlogo.png" /></a>
		</footer>
	
	
  </script>
        <script src="js/main.js"></script>
    </body>
</html>
