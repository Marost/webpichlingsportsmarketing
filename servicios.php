<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES GENERALES
$script_css=true;
$script_fonts=true;
$script_galeria_fotos=true;
$script_formulario=true;
$script_ie=true;
$script_menu_servicios=true;

//NOTICIA REQUEST
$url_servicios=$_REQUEST["url"];

//NOTICIA
$rst_servicios=mysql_query("SELECT * FROM pmkt_servicios WHERE url='$url_servicios'", $conexion);
$fila_servicios=mysql_fetch_array($rst_servicios);

//NOTICIA VARIABLES
$servicios_url=$fila_servicios["url"];
$servicios_titulo=$fila_servicios["titulo"];
$servicios_contenido=$fila_servicios["contenido"];
$web_url=$web."servicios/".$servicios_url;

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title><?php echo $servicios_titulo; ?></title>
<base href="<?php echo $web; ?>">
<link rel="image_src" href="<?php echo $web."imagenes/logo.png"; ?>" >
<?php require_once("header-scripts.php"); ?>

</head>

<body>

<div class="interior limpiar">

    <?php require_once("header.php"); ?>
    
    <section class="limpiar">
    	
        <div id="section_sup">
        
        	<div id="sec_news">
            	
                <h2 class="news_titulo_nota"><?php echo $servicios_titulo; ?></h2>
                                	
                <div id="scnw_contenido">
                	<?php echo $servicios_contenido; ?>
                </div>
                
            </div><!-- FIN SECTION NEWS -->
            
            <div id="sec_sidebar">
            	
                <?php require_once("widgets/wg_eventos.php"); ?>
                
            	<?php require_once("widgets/wg_galeria.php"); ?>
            
            </div><!-- FIN SECTION SIDEBAR -->
        
        </div><!-- FIN SECTION SUPERIOR -->
            	
    </section><!-- FIN SECTION -->
    
    <?php require_once("footer.php"); ?>

</div><!-- FIN INTERIOR -->

</body>
</html>