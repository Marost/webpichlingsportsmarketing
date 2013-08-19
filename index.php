<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=true;
$sc_slider=true;

//NOTICIAS
$rst_noticias=mysql_query("SELECT * FROM pmkt_noticia WHERE fecha_publicacion<='$fechaActual' AND publicar=1 ORDER BY fecha_publicacion DESC LIMIT 2;", $conexion);
?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Pichling Sports Marketing</title>

	<?php require_once("wg-script-header.php"); ?>

</head>
<body class="l-body home">

<!-- CANVAS -->
<div class="l-canvas type_boxed col_cont">
	<div class="l-canvas-h">

		<!-- HEADER -->
		<?php require_once("wg-header.php"); ?>
		<!-- /HEADER -->

		<!-- MAIN -->
		<div class="l-main">
			<div class="l-main-h">

				<div class="l-submain">
					<div class="l-submain-h g-html">

						<div class="g-cols">
							<div class="one-third">
								<div class="w-iconbox">
									<div class="w-iconbox-h">
										<a class="w-iconbox-link" href="#">
											<div class="w-iconbox-icon">
												<i class="icon-html5"></i>
											</div>
											<div class="w-iconbox-text">
												<h3>Modern Design</h3>
												<p>Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.</p>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="one-third">
								<div class="w-iconbox">
									<div class="w-iconbox-h">
										<a class="w-iconbox-link" href="#">
											<div class="w-iconbox-icon">
												<i class="icon-thumbs-up"></i>
											</div>
											<div class="w-iconbox-text">
												<h3>High Quality</h3>
												<p>Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.</p>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="one-third">
								<div class="w-iconbox">
									<div class="w-iconbox-h">
										<a class="w-iconbox-link" href="#">
											<div class="w-iconbox-icon">
												<i class="icon-star-empty"></i>
											</div>
											<div class="w-iconbox-text">
												<h3>Responsive Layout</h3>
												<p>Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				
				<div class="l-submain with_shadow">
					<div class="l-submain-h g-html">
					
						<h1 style="text-align: center;">Perfect Template for Showing Your Products</h1>
						<p style="text-align: center;">This is Vittoria, a modern, responsive & <strong>super flexible multipurpose</strong> theme that makes it easy to show your work!<br>Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.</p>
						
						<div class="hr hr_short">
							<span class="hr-h">
								<span class="hr-hh"></span>
							</span>
						</div>
					
						<div class="w-portfolio columns_4">
							<div class="w-portfolio-h">
								<div class="w-portfolio-list">
								<div class="w-portfolio-list-h">

									<div class="w-portfolio-item order_1 naming webdesign">
									<div class="w-portfolio-item-h animate_wfc">
										<a class="w-portfolio-item-anchor" href="project.html">
											<div class="w-portfolio-item-image">
												<img src="imagenes/placeholder/500x500.gif" alt=""/>
												<div class="w-portfolio-item-meta">
													<h2 class="w-portfolio-item-title">Business Solutions</h2>
													<span class="w-portfolio-item-text">naming / web design</span>
												</div>
											</div>
										</a>
									</div>
									</div>

									<div class="w-portfolio-item order_2 naming branding">
									<div class="w-portfolio-item-h animate_wfc">
										<a class="w-portfolio-item-anchor" href="project.html">
											<div class="w-portfolio-item-image">
												<img src="imagenes/placeholder/500x500.gif" alt=""/>
												<div class="w-portfolio-item-meta">
													<h2 class="w-portfolio-item-title">Custom Templates</h2>
													<span class="w-portfolio-item-text">naming / branding</span>
												</div>
											</div>
										</a>
									</div>
									</div>

									<div class="w-portfolio-item order_3 webdesign illustration">
									<div class="w-portfolio-item-h animate_wfc">
										<a class="w-portfolio-item-anchor" href="project.html">
											<div class="w-portfolio-item-image">
												<img src="imagenes/placeholder/500x500.gif" alt=""/>
												<div class="w-portfolio-item-meta">
													<h2 class="w-portfolio-item-title">Website Design</h2>
													<span class="w-portfolio-item-text">illustration / web design</span>
												</div>
											</div>
										</a>
									</div>
									</div>

									<div class="w-portfolio-item order_4 photography naming">
									<div class="w-portfolio-item-h animate_wfc">
										<a class="w-portfolio-item-anchor" href="project.html">
											<div class="w-portfolio-item-image">
												<img src="imagenes/placeholder/500x500.gif" alt=""/>
												<div class="w-portfolio-item-meta">
													<h2 class="w-portfolio-item-title">Old Town Street</h2>
													<span class="w-portfolio-item-text">photography / naming</span>
												</div>
											</div>
										</a>
									</div>
									</div>

								</div>
								</div>
							</div>
						</div>
						
						<div class="hr hr_short">
							<span class="hr-h">
								<span class="hr-hh"></span>
							</span>
						</div>
						
						<p style="text-align: center;"><a class="g-btn type_color" href="portfolio-4.html">View Full Portfolio</a></p>
					
					</div>
				</div>

				<div class="l-submain type_grey">
					<div class="l-submain-h g-html i-cf">
						<div class="g-cols">
							<div class="one-half animate_afl">
								<img src="imagenes/placeholder/500x500.gif" alt="" style="display: block; margin: 0 auto;"/>
							</div>
							<div class="one-half">
								<h2 style="text-transform:uppercase;">100% Responsive Layout</h2>
								<div class="hr hr_short hr_left">
									<span class="hr-h">
										<span class="hr-hh"></span>
									</span>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
								<div class="hr hr_short hr_left">
									<span class="hr-h">
										<span class="hr-hh"></span>
									</span>
								</div>
								<p><a class="g-btn type_dark" href="features.html">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html i-cf">
						<div class="g-cols">
							<div class="one-third animate_afl">
								<h2 style="text-transform:uppercase; text-align: center;">Just Do It</h2>
								<div class="hr hr_short">
									<span class="hr-h">
										<span class="hr-hh"></span>
									</span>
								</div>
								<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
								<p style="text-align: center;"><a class="g-btn type_color" href="portfolio-3.html">Learn More</a></p>
							</div>
							<div class="one-third animate_afb">
								<div class="w-gallery layout_tile size_xs align_center">
									<div class="w-gallery-h">
										<div class="w-gallery-tnails">
											<div class="w-gallery-tnails-h">
											
												<a class="w-gallery-tnail order_1" href="imagenes/placeholder/1200x800.gif">
													<span class="w-gallery-tnail-h">
														<img class="w-gallery-tnail-img" src="imagenes/placeholder/220x220.gif" alt="Tit 1"/>
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>
												</a>

												<a class="w-gallery-tnail order_2" href="imagenes/placeholder/600x900.gif">
													<span class="w-gallery-tnail-h">
														<img class="w-gallery-tnail-img" src="imagenes/placeholder/220x220.gif" alt="photo"/>
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>
												</a>

												<a class="w-gallery-tnail order_3" href="imagenes/placeholder/1200x800.gif">
													<span class="w-gallery-tnail-h">
														<img class="w-gallery-tnail-img" src="imagenes/placeholder/220x220.gif" alt="photo"/>
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>
												</a>

												<a class="w-gallery-tnail order_4" href="imagenes/placeholder/600x900.gif">
													<span class="w-gallery-tnail-h">
														<img class="w-gallery-tnail-img" src="imagenes/placeholder/220x220.gif" alt="photo"/>
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>
												</a>

												<a class="w-gallery-tnail order_5" href="imagenes/placeholder/1200x800.gif">
													<span class="w-gallery-tnail-h">
														<img class="w-gallery-tnail-img" src="imagenes/placeholder/220x220.gif" alt="photo"/>
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>
												</a>

												<a class="w-gallery-tnail order_6" href="imagenes/placeholder/600x900.gif">
													<span class="w-gallery-tnail-h">
														<img class="w-gallery-tnail-img" src="imagenes/placeholder/220x220.gif" alt="photo"/>
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>
												</a>

												<a class="w-gallery-tnail order_7" href="imagenes/placeholder/1200x800.gif">
													<span class="w-gallery-tnail-h">
														<img class="w-gallery-tnail-img" src="imagenes/placeholder/220x220.gif" alt="photo"/>
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>
												</a>

												<a class="w-gallery-tnail order_8" href="imagenes/placeholder/600x900.gif">
													<span class="w-gallery-tnail-h">
														<img class="w-gallery-tnail-img" src="imagenes/placeholder/220x220.gif" alt="photo"/>
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>
												</a>

												<a class="w-gallery-tnail order_9" href="imagenes/placeholder/1200x800.gif">
													<span class="w-gallery-tnail-h">
														<img class="w-gallery-tnail-img" src="imagenes/placeholder/220x220.gif" alt="photo"/>
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>
												</a>

												<a class="w-gallery-tnail order_10" href="imagenes/placeholder/600x900.gif">
													<span class="w-gallery-tnail-h">
														<img class="w-gallery-tnail-img" src="imagenes/placeholder/220x220.gif" alt="photo"/>
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>
												</a>

												<a class="w-gallery-tnail order_11" href="imagenes/placeholder/1200x800.gif">
													<span class="w-gallery-tnail-h">
														<img class="w-gallery-tnail-img" src="imagenes/placeholder/220x220.gif" alt="photo"/>
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>
												</a>

												<a class="w-gallery-tnail order_12" href="imagenes/placeholder/600x900.gif">
													<span class="w-gallery-tnail-h">
														<img class="w-gallery-tnail-img" src="imagenes/placeholder/220x220.gif" alt="photo"/>
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>
												</a>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="one-third animate_afr">
								<h2>Some Features</h2>
								<ul>
									<li>Clean and Developer-friendly HTML5 and CSS3 code</li>
									<li>Optional Search Field and Language Toggler</li>
									<li><b>Fully Responsive</b> (works on all major browsers, tablets and phones)</li>
									<li>Boxed and Wide layouts, which can be switched in a moment</li>
									<li>9 Predefined Color Schemes and ability to easily create your own</li>
									<li>Font Awesome Icons</li>
									<li>Built-in Style Switcher</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="l-submain type_background with_arrow" style="background-image: url(imagenes/slides/slide7.jpg);">
					<div class="l-submain-h g-html">
					
						<h2 style="text-transform:uppercase; text-align: center;">Four Reasons to Work with Us</h2>
						<p style="text-align: center;">Visit <a href="about.html">this page</a> to learn more about us.</p>
						
						<div class="hr hr_invisible">
							<span class="hr-h">
								<span class="hr-hh"></span>
							</span>
						</div>
						
						<div class="g-cols">
							<div class="one-fourth">
								<div class="w-iconbox animate_afc">
									<div class="w-iconbox-h">
										<a class="w-iconbox-link" href="#">
											<div class="w-iconbox-icon">
												<i class="icon-magic"></i>
												<div class="w-iconbox-icon-img">
													<img src="imagenes/icon-example.png" alt="icon"/>
												</div>
											</div>
											<div class="w-iconbox-text">
												<h3>Imagination</h3>
												<p>Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.</p>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="one-fourth">
								<div class="w-iconbox animate_afc d1">
									<div class="w-iconbox-h">
										<a class="w-iconbox-link" href="#">
											<div class="w-iconbox-icon">
												<i class="icon-star-empty"></i>
												<div class="w-iconbox-icon-img">
													<img src="imagenes/icon-example.png" alt="icon"/>
												</div>
											</div>
											<div class="w-iconbox-text">
												<h3>Quality</h3>
												<p>Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.</p>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="one-fourth">
								<div class="w-iconbox animate_afc d2">
									<div class="w-iconbox-h">
										<a class="w-iconbox-link" href="#">
											<div class="w-iconbox-icon">
												<i class="icon-smile"></i>
												<div class="w-iconbox-icon-img">
													<img src="imagenes/icon-example.png" alt="icon"/>
												</div>
											</div>
											<div class="w-iconbox-text">
												<h3>Knowledge</h3>
												<p>Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.</p>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="one-fourth">
								<div class="w-iconbox with_img animate_afc d3">
									<div class="w-iconbox-h">
										<a class="w-iconbox-link" href="#">
											<div class="w-iconbox-icon">
												<i class="icon-trophy"></i>
												<div class="w-iconbox-icon-img">
													<img src="imagenes/icon-example.png" alt="icon"/>
												</div>
											</div>
											<div class="w-iconbox-text">
												<h3>Custom Icon</h3>
												<p>You can put your own 32x32 px icon in this block. But it will not be animated when you hover the block.</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html i-cf">
					
						<h3>Últimas Noticias</h3>
						
						<div class="w-shortblog columns_2 date_atleft">
							<div class="w-shortblog-h">
																
								<div class="w-shortblog-list">

									<?php while($fila_noticias=mysql_fetch_array($rst_noticias)){
										$noticias_id=$fila_noticias["id"];
										$noticias_url=$fila_noticias["url"];
										$noticias_titulo=$fila_noticias["titulo"];
										$noticias_contenido=primerParrafo($fila_noticias["contenido"]);
										$noticias_fechaGen=explode(" ", $fila_noticias["fecha_publicacion"]);
										$noticias_fechaPub=explode("-", $noticias_fechaGen[0]);

										//URL
										$noticias_UrlWeb=$web."noticia/".$noticias_id."-".$noticias_url;
									?>
									<div class="w-shortblog-entry">
										<div class="w-shortblog-entry-h">
											<a class="w-shortblog-entry-link" href="<?php echo $noticias_UrlWeb; ?>">
												<h4 class="w-shortblog-entry-title">
													<span class="w-shortblog-entry-title-h"><?php echo $noticias_titulo; ?></span>
												</h4>
											</a>
											<div class="w-shortblog-entry-meta">
												<div class="w-shortblog-entry-meta-date">
													<span class="w-shortblog-entry-meta-date-month"><?php echo nombreMesCorto($noticias_fechaPub[1]); ?></span>
													<span class="w-shortblog-entry-meta-date-day"><?php echo $noticias_fechaPub[2]; ?></span>
													<span class="w-shortblog-entry-meta-date-year"><?php echo $noticias_fechaPub[0]; ?></span>
												</div>
											</div>
											<div class="w-shortblog-entry-short">
											<p><?php echo $noticias_contenido; ?></p>
											</div>
										</div>
									</div>
									<?php } ?>
									
								</div>
							</div>
						</div>
						
						<div class="hr">
							<span class="hr-h">
								<span class="hr-hh"></span>
							</span>
						</div>
						
						<h3>Empresas con las que mantenemos Relaciones Comerciales</h3>
						
						<div class="w-clients type_carousel columns_5">
							<div class="w-clients-h">
								<div class="w-clients-list">
									<div class="w-clients-list-h">

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/antamina.jpg" alt="Antamina" />
										</a>
										
										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/backus.jpg" alt="Backus" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/club-alianza-lima.jpg" alt="Club Alianza Lima" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/club-cienciano.jpg" alt="Club Cienciano" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/club-juan-aurich.jpg" alt="Club Juan Aurich" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/club-sport-huancayo.jpg" alt="Club Sport Huancayo" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/club-universitario-deportes.jpg" alt="Club Universitario de Deportes" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/depor.jpg" alt="Diario Depor" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/federacion-peruana-futbol.jpg" alt="Federación Peruana de Fútbol" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/federacion-peruana-voley.jpg" alt="Federación Peruana de Voley" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/frecuencia-latina.jpg" alt="Frecuencia Latina" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/gatorade.jpg" alt="Gatorade" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/instituto-peruano-deporte.jpg" alt="Instituto Peruano del Deporte" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/mapfre.jpg" alt="Mapfre" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/media-networks.jpg" alt="Media Networks" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/miq-logistics.jpg" alt="MIQ Logistics" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/movix.jpg" alt="Movix" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/pepsico.jpg" alt="Pepsico" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/unique.jpg" alt="Unique" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/universidad-alas-peruanas.jpg" alt="Universidad Alas Peruanas" />
										</a>

										<a class="w-clients-item" href="javascript:void(0);">
											<img src="imagenes/clientes/volcan.jpg" alt="Volcan" />
										</a>

									</div>
								</div>
								<a class="w-clients-nav to_prev disabled" href="javascript:void(0)" title="Show previous"></a>
								<a class="w-clients-nav to_next" href="javascript:void(0)" title="Show next"></a>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="l-submain type_colored with_arrow">
					<div class="l-submain-h g-html">

						<div class="w-actionbox controls_aside">
							<div class="w-actionbox-h">
								<div class="w-actionbox-text">
									<h2>El Deporte está ligado a las emociones mas fieles, apasionadas y reconfortantes de las personas… es justamente ahí donde tiene que estar presente TÚ marca.</h2>
								</div>
							</div>
						</div>

					</div>
				</div>
				
			</div>
		</div>
		<!-- /MAIN -->

	</div>
</div>
<!-- /CANVAS -->

<!-- FOOTER -->
<?php require_once("wg-footer.php"); ?>
<!-- /FOOTER -->

<?php require_once("wg-script-footer.php"); ?>

</body>
</html>
