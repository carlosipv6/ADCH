<?session_start();
$conexion=mysql_connect("mysql7.000webhost.com","a1169527_yo","123456abc")
        or die("No se pudo Conectar");
mysql_select_db('a1169527_regis',$conexion)
or die("Error al conectarse a la BD");
    $_SESSION['nuser'] = $_REQUEST['user'];
    $_SESSION['npass'] = $_REQUEST['pass'];
$consulta= "SELECT * FROM usuarios WHERE usuario='".$_SESSION['nuser']."' AND pass='".$_SESSION['npass']."'"; 
$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
$fila=mysql_fetch_array($resultado);

$cont= "SELECT * FROM usuarios WHERE usuario='".$_SESSION['nuser']."'"; 
$res = mysql_query($cont,$conexion) or die (mysql_error());
$fil=mysql_fetch_array($res);
$id = $fil["id"];
$name = $fil["nombre"];

if (!$fila[0])
{
    echo '<script language = javascript>
    alert("Usuario o Password errados, porfavor intente de nuevo.")
    self.location = "entrar.html"
    </script>';
}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Page Description">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title>Intranet | GrupoNu3.com</title>
		<link rel="stylesheet" href="CSS/CSS Principal/layers.min.css" media="screen">
		<link rel="stylesheet" href="CSS/CSS Principal/font-awesome.min.css" media="screen"> 
		<link rel="stylesheet" href="CSS/CSS Principal/Principal.css" media="screen">
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" href="Logos/Iconu3.png">	
	</head>

	<body class="page">

		<header role="banner" class="transparent light">
			<div class="row">
				<div class="nav-inner row-content buffer-left buffer-right even clear-after">
					<div id="brand">
						<h1 class="reset"><a href="home-01.html"><img src="Logos/Logonu3.png" alt="logo"></a></h1>
					</div><!-- brand -->
					<a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
					<nav>
						<ul class="reset" role="navigation">
							<li class="menu-item">
								<a href="#">AREA 1</a>
								<ul class="sub-menu">
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="#">AREA 2</a>
								<ul class="sub-menu">
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="#l">AREA 3</a>
								<ul class="sub-menu">
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="#">AREA 4</a>
								<ul class="sub-menu">
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="#">AREA 5</a>
								<ul class="sub-menu">
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
									<li>
										<a href="#">SUBAREA</a>
										<ul class="sub-menu">
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
										</ul>										
									</li>
								</ul>								
							</li>
							<li class="menu-item">
								<a href="#">AREA 6</a>
								<ul class="sub-menu">
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
									<li><a href="#">Area</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div><!-- row-content -->	
			</div><!-- row -->	
		</header>
<br><br><br>
		<main role="main">
			<div id="intro-wrap">
				<div id="intro" class="preload darken" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fadeUp">					
					<div class="intro-item" style="background-image: url(Imagenes/Backprin1.jpg);">
						<div class="caption">
							<h2>UNA FILOSOFÍA DE EQUIPO</h2>
							<p>RESPETO|PERSEVERANCIA|HONESTIDAD|SERVICIO|TRABAJO EN EQUIPO|FE|HUMILDAD</p>
							<a class="button white transparent" href="#">INTRANET</a>
						</div><!-- caption -->
						<div class="photocaption">
							<h4>Tomada por <a href="#">Nombre</a></h4>
						</div><!-- photocaption -->						
					</div>									
					<div class="intro-item" style="background-image: url(Imagenes/Backprin2.jpg);">
						<div class="caption">
							<h2>MISIÓN</h2>
							<p>Trascender alimentando y sirviendo al mundo para mejorar la calidad de vida.</p>
							<a class="button white transparent" href="#">INTRANET</a>
						</div><!-- caption -->
						<div class="photocaption">
							<h4>Tomada por <a href="#">Nombre</a></h4>
						</div><!-- photocaption -->						
					</div>						
					<div class="intro-item" style="background-image: url(Imagenes/Backprin3.jpg);">
						<div class="caption">
							<h2>VISIÓN</h2>
							<p>Ser un grupo integral diversificado, logrando la satisfacción de nuestros clientes y el desarrollo de proveedores certificados, manteniendo un incremento constante en utilidades y generando un número creciente de empleos, a través de la Innovación, Mejora Continua y Calidad de Vida, manteniéndonos como empresas socialmente responsables y de clase mundial.</p>
							<a class="button white transparent" href="#">INTRANET</a>
						</div><!-- caption -->
						<div class="photocaption">
							<h4>Tomada por <a href="#">Nombre</a></h4>
						</div><!-- photocaption -->						
					</div>		
					<div class="intro-item" style="background-image: url(Imagenes/Backprin2.jpg);">
						<div class="caption">
							<h2>POLÍTICA DE CALIDAD</h2>
							<p>La satisfacción del cliente compromete nuestras acciones, mejorando continuamente nuestros productos, procesos, servicios y calidad de vida del personal, aumentando nuestra participación en el mercado y cuidando el medio ambiente.</p>
							<a class="button white transparent" href="#">INTRANET</a>
						</div><!-- caption -->
						<div class="photocaption">
							<h4>Tomada por <a href="#">Nombre</a></h4>
						</div><!-- photocaption -->						
					</div>																		
				</div><!-- intro -->
			</div><!-- intro-wrap -->

			<div id="main">

				<section class="row section call-to-action">
					<div class="row-content buffer even">
						<p>La satisfacción del cliente compromete nuestras acciones, mejorando continuamente
nuestros productos, procesos, servicios y calidad de la vida personal, aumentando nuestra
participación en el mercado y cuidando el medio ambiente.</p><p>
						<a class="button red">CALIDAD PARA LA VIDA | Desde 1951</a></p>
					</div>
				</section>

				<section class="row section">
					<div class="row-content buffer even clear-after">
						<div class="column four">
							<div class="small-icon red"><img src="Logos/Logonu3.png" alt="logo"></div>
							<div class="small-icon-text clear-after">
								<h4>EMPRESA</h4>
								<p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="column four">
							<div class="small-icon red"><img src="Logos/Logonu3.png" alt="logo"></div>
							<div class="small-icon-text clear-after">
								<h4>EMPRESA</h4>
								<p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="column four last">
							<div class="small-icon red"><img src="Logos/Logonu3.png" alt="logo"></div>
							<div class="small-icon-text clear-after">
								<h4>EMPRESA</h4>
								<p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="column four">
							<div class="small-icon red"><img src="Logos/Logonu3.png" alt="logo"></div>
							<div class="small-icon-text clear-after">
								<h4>EMPRESA</h4>
								<p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="column four">
							<div class="small-icon red"><img src="Logos/Logonu3.png" alt="logo"></div>
							<div class="small-icon-text clear-after">
								<h4>EMPRESA</h4>
								<p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="column four last">
							<div class="small-icon red"><img src="Logos/Logonu3.png" alt="logo"></div>
							<div class="small-icon-text clear-after">
								<h4>EMPRESA</h4>
								<p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</section>	

							
<div class="maps">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.4790416704504!2d-102.00590058051488!3d20.367312506357436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c1e955ea6cae7%3A0x209d835df74c8a84!2sGrupo+Nu3%2C+La+Piedad+De+Cavadas+-+Manuel+Doblado%2C+Guanajuato!5e1!3m2!1ses!2smx!4v1455918941685" width="1000" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>							

			</div><!-- id-main -->
		</main><!-- main -->

		<footer role="contentinfo">
			<div class="row">
				<div class="row-content buffer clear-after">
					<section id="top-footer">
						<div class="widget column three"><!-- la class="widget" è forse generata utomaticamente da wp -->
							<h4>DIRECCIONES</h4>
							<ul class="plain">
								<li><a href="home-01.html">Calle, Numero, Colonia, Localidad</a></li>
							</ul>
						</div>
						<div class="widget column three">
							<h4>TELEFONO</h4>
							<ul class="plain">
								<li><a href="#">01-(352)-0000-000</a></li>
							</ul>
						</div>												
						<div class="widget meta-social column three">
							<h4>SIGUENOS:</h4>
							<ul class="inline">
								<li><a href="#" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href="#" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
							</ul>
						</div>														
					</section><!-- top-footer -->
					<section id="bottom-footer"><font face="helvetica">
						<p id="fl_left"><center><a href="http://gruponu3.com"><font color="#a80306"><strong>Pagina Principal</strong></font></a> | Copyright © 2016 | GrupoNu3.com | <a href="entrar.html"><font color="#a80306"><strong>Salir</strong></font></a></center></p></font>
					</section><!-- bottom-footer -->		
				</div><!-- row-content -->	
			</div><!-- row -->	
		</footer>

		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>		
		<script src="JS/JS Principal/plugins.js"></script>
		<script src="JS/JS Principal/beetle.js"></script>

	</body>

</html>