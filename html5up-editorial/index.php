<?php

    if(isset($_POST['Email'])){

    //conecta servidor

    $conectar = new mysqli('localhost','id11932593_admin','admin','id11932593_info_formulario');

    //conexion

    if (!$conectar){
        echo "conexión fallida";
        }
    else {
    //    echo 'conexión ok';
    }

    //recuperar variable
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Message=$_POST['Message'];
    //sentencia sql
    $sql="INSERT INTO bbdd VALUES ('$Name',
                                   '$Email',
                                   '$Message')";
echo $sql;
    //ejecuta
    $ejecutar=$conectar->query($sql);
  }
?>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Página de prueba proyecto</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Kimberly del Hierro Diaz</strong></a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Esta es mi página</h1>
											<p>Academia de idiomas</p>
										</header>
										<p>Introducción a al proyecto y such.</p>
										<ul class="actions">
											<li><a href="#" class="button big">Más</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/pic10.jpg" alt="" />
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Cursos</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fal fa-flag"></span>
											<div class="content">
												<h3>Aleman</h3>
												<p>blablablablabla.</p>
											</div>
										</article>
										<article>
											<span class="icon fal fa-flag"></span>
											<div class="content">
												<h3>Japones</h3>
												<p>blablablablablablablablbalablbalablaba.</p>
											</div>
										</article>
										<article>
											<span class="icon fal fa-flag"></span>
											<div class="content">
												<h3>Inglés</h3>
												<p>blablablablablbalbalbalblablbalbalbal.</p>
											</div>
										</article>
                                        <article>
											<span class="icon fal fa-flag"></span>
											<div class="content">
												<h3>Portugués</h3>
												<p>blablablablablbalbblablalablablablablaalbalblablbalbalbal.</p>
											</div>
										</article>
                                        <article>
											<span class="icon fal fa-flag"></span>
											<div class="content">
												<h3>Italiano</h3>
												<p>blablablablablbalbalbalblablbalbalbal.</p>
											</div>
										</article>
										<article>
											<span class="icon fal fa-flag"></span>
											<div class="content">
												<h3>Chino</h3>
												<p>blablablablablablbalbalblablblbalbalbalbalblabla.</p>
											</div>
										</article>
									</div>
								</section>
                            <!-- formulario -->          
                                          </br>
                                <section>
									<header class="major">
										<h2>Contáctanos</h2>
									</header>
									<div class="image">
                                    <form method="post">
                                        <div class="post">
                                    <div class="buttom">
                                    <input type="text" name="Name" placeholder="Name"/>
                                    </div>  </br>
                                    <div>
                                        <input type="email" name="Email" placeholder="Email"/>
                                    </div></br>
                                    <div class="">
                                    <textarea name="Message" placeholder="Message" rows="6"></textarea>
                                    </div></br>
                                    <div class="post">
                                    <ul class="actions special">
                                        <li><input type="submit" value="Send Message"/></li>
                                    </ul>
                                    </div>
                                    </form>
									</div>
                                </section>
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Niveles</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
											<h3>A1</h3>
											<ul class="actions">
												<li><a href="#" class="button">Más</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
											<h3>A2.1</h3>
										    <ul class="actions">
												<li><a href="#" class="button">Más</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
											<h3>A2.2</h3>
											<ul class="actions">
												<li><a href="#" class="button">Más</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
											<h3>C1.1</h3>
											<ul class="actions">
												<li><a href="#" class="button">Más</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3>C1.2</h3>
											<ul class="actions">
												<li><a href="#" class="button">Más</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3>C2</h3>
											<ul class="actions">
												<li><a href="#" class="button">Más</a></li>
											</ul>
										</article>
                            
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.html">Página de Inicio</a></li>
										<li>
											<span class="opener">Idiomas</span>
											<ul>
												<li><a href="#">Alemán</a></li>
												<li><a href="#">Inglés</a></li>
												<li><a href="#">Italiano</a></li>
                                               	<li><a href="#">Portugués</a></li>
												<li><a href="#">Japonés</a></li>
                                               	<li><a href="#">Chino</a></li>
											</ul>
										<li>
											<span class="opener">Niveles</span>
											<ul>
												<li><a href="#">A1</a></li>
												<li><a href="#">A2</a></li>
												<li><a href="#">B1</a></li>
												<li><a href="#">B2.1</a></li>
                                                <li><a href="#">B2.2</a></li>
												<li><a href="#">C1.1</a></li>
												<li><a href="#">C1.2</a></li>
												<li><a href="#">C2</a></li>
											</ul>
										</li>
										<li><a href="#">Diplomas</a></li>
										<li><a href="#">Estudios Online</a></li>
										<li><a href="#">Sobre nosotros</a></li>
                                       
									</ul>
								</nav>

							
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Contáctanos</h2>
									</header>
									<p>blablablablablablablablablabla.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">ZafiroOfficial@zafirola.com</a></li>
										<li class="icon solid fa-phone">942 12 34 56</li>
                                        <li class="icon solid fa-phone">610 12 34 56</li>
										<li class="icon solid fa-home">Santander blabla<br />
                                        España, blabla </li>
                                        <li class="icon solid fa-home">Frankfurt blabla<br />
										Alemania, blabla</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Modify by: <a href="https://html5up.net">Kim</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
