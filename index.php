<?php

date_default_timezone_set('America/Sao_Paulo');


require_once 'controller/controllers.class.php';


$contr = new controllers();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="OPEN Infanto Juvenil de Tênis.">
        <meta name="author" content="Michel Pereira - System Software">
        <meta name="keywords" content="campeonato infanto juvenil tênis saldanha gama torneio notícias galeria história clube sede equipe campo dos goytacazes">
        <meta name="robots" content="campeonato, infanto, juvenil, tênis, saldanha, gama, torneio, notícias, galeria, história, clube, sede, equipe, campo dos goytacazes">
        <meta name="googlebot" content="campeonato, infanto, juvenil, tênis, saldanha, gama, torneio, notícias, galeria, história, clube, sede, equipe, campo dos goytacazes">
        <title>OPEN Infanto Juvenil de Tênis</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
<!--        <link href="css/lightbox.css" rel="stylesheet"> -->
        <link href="css/main.css" rel="stylesheet">
        <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/prettify.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
        <link href="css/screen.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/icone_slider.css" rel="stylesheet">
<!--        <link href="css/jquery.bxslider.css" rel="stylesheet"> -->
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet"/>


        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="img/logoOpen.ico">
        <link rel="icon" type="image/png" href="img/logoOpen.png">

        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('body').addClass('img');
            });
        </script>

        <script type="text/javascript">
            $('.carousel').carousel({
              interval: 2000
            })


        </script>
        <style>

        body
        {
        	background-color: #fff;
        	padding-top: 180px;
        }

        </style>


    </head><!--/head-->
	<body>
<?php
                    //echo "<meta http-equiv='refresh' content='5;url=index.php'>";

?>


            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navbar-text-top">
                    <!--<div class="navbar-text-top"> #D9EDF7-->
                    <?php

						$contr->telaTop();
                    ?>

                </div>
            </nav>


	        <div class="content">
				<?php

					$contr->telaNovoSlide();
                    //Novo
				?>
			</div>

	        <footer id="footer" style="background-color: #fff;">
<!--	            <nav class="navbar navbar-default navbar-fixed-bottom"> -->
	                <?php
	                    $contr->telaDown();
	                ?>
<!--	            </nav> -->
	        </footer>



        <script type="text/javascript" src="js/jquery.js"></script>
<!--        <script type="text/javascript" src="js/jquery.inview.min.js"></script> -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/mousescroll.js"></script> 
        <script type="text/javascript" src="js/smoothscroll.js"></script> 
<!--        <script type="text/javascript" src="js/lightbox.min.js"></script> -->
        <script type="text/javascript" src="js/main.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/bootstrap-carousel.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js></script>
<!--        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script> -->


	</body>
</html>
