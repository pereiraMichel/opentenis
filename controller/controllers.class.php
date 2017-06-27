<?php

class controllers{



    public function telaSlide(){
//        $medidaTop = "padding-top: 200px";//medida do subtítulo no banner
//        $medidaTopGruposSemanais = "padding-top: 170px";//medida do subtítulo no banner
        echo "<hr size='2' style='background-color: #2f5698;' width='100%'>";
        echo "<div class='banner-box'>";
        echo "  <div class='banner'>";
        echo "  <ul class='bxslider'>";
        echo "      <li class='icone_slider img-responsive' id='imagemTenis'>";
        echo "          <div>&nbsp;</div>";
        echo "      </li>";

/*        echo "      <li style='background-image: url(\"img/dummy-images/fundo.jpg\");'>";
        echo "          <div class='banner_texto1'>";
        echo "              <p style='text-align: center; font-family: arial'>";
        echo "                  OPEN Infanto Juvenil de Tênis";
        echo "              </p>";
        echo "              <p id='sub'>II Campeonato Saldanha da Gama</p>";
        echo "          </div>";
        echo "          <div class='banner_texto2'>";
        echo "              <p>Saiba mais...</p>";
        echo "          </div>";
        echo "      </li>";
*/
        echo "      <li class='icone_slider img-responsive' id='imagemQuadraTenis'>";
        echo "          <div>&nbsp;</div>";
        // class='icone_slider img-responsive'
/*        echo "          <div class='banner_texto1'>";
        echo "              <p style='text-align: center; font-family: arial'>";
        echo "                  OPEN Infanto Juvenil de Tênis";
        echo "              </p>";
        echo "              <p id='sub'>Conheça a nossa equipe</p>";
        echo "          </div>";
        echo "          <div class='banner_texto2'>";
        echo "              <p>Saiba mais...</p>";
        echo "          </div>";*/
        echo "      </li>";

        echo "  </ul>";// fecha bxslider

        echo "  </div>"; // fecha banner
        echo "</div>";//fecha banner-box
        echo "<hr size='2' style='background-color: #2f5698;' width='100%'>";

    }
    
    public function telaNovoSlide(){
        
        echo "<hr size='2' style='background-color: #2f5698;' width='100%' noshade='noshade'>";
        echo "<div id='myCarousel' class='carousel slide' data-ride='carousel' style='height: 100%; padding-top: 0;'>";
        echo "  <ol class='carousel-indicators'>";
        echo "      <li data-target='#myCarousel' data-slide-to='0' class='active'>";
        echo "      </li>";
//        echo "      <li data-target='#myCarousel' data-slide-to='1'>";
//        echo "      </li>";
        echo "  </ol>";
        echo "<!-- Carousel-inner -->";
        echo "  <div class='carousel-inner'>";
        echo "      <div class='active item' id='imagemTenis'>";
        echo "          <div class='carousel-caption'>";
        echo "              <div class='icone_slider'>";
        echo "                  <div class='banner_texto1'>";
        echo "                      <p style='text-align: center; font-family: arial; font-size: 24px; padding-top: 10px;'>";
        echo "                          II Campeonato de Saldanha";
        echo "                      </p>";
        echo "                  </div>";
        echo "                  <div class='banner_texto2'>";
//        echo "                      <img src='img/campeonato.png' width='300' height='200' style='padding-top: 20px;'>";
//        echo "                      <p style='text-align: center; font-size: 20px; font-family: arial; font-size: 30px;'>";
//        echo "                          II Campeonato de Saldanha";
//        echo "                      </p>";
        echo "                      <a href='#' style='text-align: center; font-size: 20px; font-family: arial; color: #fff; margin-top: 150px;'>";
        echo "                          Saiba mais...";
        echo "                      </a>";
        echo "                  </div>";
        echo "              </div>";
        echo "          </div>";
        echo "      </div>";
/*        echo "      <div class='item' id='imagemQuadraTenis'>";
        echo "          <div class='carousel-caption'>";
        echo "              <div class='banner_texto_estilo1'>";
        echo "                  <p style='text-align: center;'>&nbsp;</p>";
        echo "                  <p style='font-size: 20px;'>&nbsp;</p>";
        echo "              </div>";
        echo "          </div>";
        echo "          <div class='carousel-caption'>";
        echo "              <div class='banner_texto_estilo3'>";
        echo "                  <p style='text-align: left;'>&nbsp;</p>";
        echo "                  <p style='text-align: left;'>&nbsp;</p>";
        echo "                  <p style='text-align: left;'>&nbsp;</p>";
        echo "              </div>";
        echo "          </div>";
        echo "      </div>";*/
        echo "  </div>";//fecha carousel-inner
        echo "  <!-- Carousel nav -->";
        echo "  <a class='carousel-control left' href='#myCarousel' role='button' data-slide='prev'>";
        echo "      <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>";
        echo "      <span class='sr-only'>Previous</span>";
        echo "  </a>";
//        echo "  <a class='carousel-control left' href='#myCarousel' data-slide='prev'>&lsaquo;</a>";
        echo "  <a class='carousel-control right' href='#myCarousel' data-slide='next'>";
        echo "      <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>";
        echo "      <span class='sr-only'>Next</span>";
        echo "  </a>";
        echo "</div>";
        echo "<br>";
        echo "<hr size='2' style='background-color: #2f5698;' width='100%'>";
    }

    public function telaTop(){


        echo "<header id='home'>";
        echo "<nav class='navbar navbar-custom navbar-fixed-top' role='navigation'>";// style='background-color: rgba(0,0,0,.7);'
        echo "  <div class='container'>";
        echo "      <div class='navbar-header page-scroll'>";
        echo "          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-main-collapse'>";
        echo "              <i class='fa fa-bars'></i>";
        echo "          </button>";
        echo "          <a class='navbar-brand' href='http://localhost:8080/opentenis/'>";
        echo "              <img src='img/logoOpen.png' title='OPEN Infanto Juvenil de Tênis' width='280' height='130'>";
        echo "          </a>";
        echo "      </div>";
        echo "      <div class='collapse navbar-collapse navbar-right navbar-main-collapse' style='background-color: rgba(0,0,0,.3);'>"; 
        echo "          <ul class='nav navbar-nav'>";
//        echo "              <li>";
//        echo "                  <a href='/opentenis/'>Home</a>";
//        echo "              </li>";
        echo "              <li class='dropdown'>";
        echo "                  <a href='#' class='dropdown-toggle' data-toggle='dropdown'>O Torneio <b class='caret'></b></a>";
        echo "                  <ul class='dropdown-menu' role='menu'>";
        echo "                      <li style='padding-left: 5px;'>";
        echo "                          <a href='/torneio/a-historia/'>História do torneio</a>";
        echo "                          <a href='/torneio/clube-sede/'>Clube Sede</a>";
        echo "                          <a href='/torneio/equipe/'>Equipe</a>";
        echo "                      </li>";
        echo "                  </ul>";
        echo "              </li>";
        echo "              <li class='dropdown'>";
        echo "                  <a href='/noticias/'>Notícias</a>";// <b class='caret'></b></a>  class='dropdown-toggle' data-toggle='dropdown'";
        echo "              </li>";
        echo "              <li class='dropdown'>";
        echo "                  <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Galeria <b class='caret'></b></a>";
        echo "                  <ul class='dropdown-menu' role='menu'>";
        echo "                      <li style='padding-left: 5px;'>";
        echo "                          <a href='/galeria/fotos/'>Fotos</a>";
        echo "                          <a href='/galeria/imagens/'>Imagens</a>";
        echo "                      </li>";
        echo "                  </ul>";
        echo "              </li>";
        echo "          </ul>";
        echo "      </div>";
        echo "  </div>";
        echo "</nav>";
        echo "</header>";
    }

    public function telaDown(){
        echo "<div id='menuBaixo' class='carousel slide' data-ride='carousel' style='height: 100%; padding-top: 0;'>";
        echo "  <div class='carousel-inner'>";
        echo "      <div class='active item'>";
        echo "          <div class='center'>";
        echo "              <img src='img/patrocinio.png' width='800' height='200' title='Realização | Patrocínio'>";
        echo "          </div>";
        echo "      </div>";
        echo "      <div class='item'>";
        echo "          <div class='center'>";
//        echo "          <div class='carousel-caption'>";
//        echo "              <div id='imagemPatrocinio'></div>";
        echo "          <img src='img/realizacao.png' width='500' height='200' title='Realização | Patrocínio'>";
//        echo "          </div>";
        echo "          </div>";
        echo "      </div>";
        echo "  </div>";//fecha carousel-inner
        echo "  <!-- Carousel nav -->";
        echo "  <a class='carousel-control left' href='#menuBaixo' role='button' data-slide='prev'>";
        echo "      <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>";
        echo "      <span class='sr-only'>Previous</span>";
        echo "  </a>";
//        echo "  <a class='carousel-control left' href='#myCarousel' data-slide='prev'>&lsaquo;</a>";
        echo "  <a class='carousel-control right' href='#menuBaixo' data-slide='next'>";
        echo "      <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>";
        echo "      <span class='sr-only'>Next</span>";
        echo "  </a>";
        echo "</div>";
/*
        <div id="featured"> 
            <div class="content" style="">
                <h1>Orbit does content now.</h1>
                <h3>Highlight me...I'm text.</h3>
            </div>
            <a href=""><img src="dummy-images/overflow.jpg" /></a>
            <img src="dummy-images/captions.jpg" data-caption="#htmlCaption" />
            <img src="dummy-images/features.jpg"  />
        </div>*/        

        /*

<a href="#" class="orbit-prev">Prev <span></span></a>
  <a href="#" class="orbit-next">Next <span></span></a>

  <!-- Slide Numbers -->
  <div class="orbit-slide-number">
    <span>1</span> of <span>3</span>
  </div>

  <!-- Timer and Play/Pause Button -->
  <div class="orbit-timer">
    <span></span>
    <div class="orbit-progress"></div>
  </div>
</div>

<!-- Bullets -->
<ol class="orbit-bullets">
  <li data-orbit-slide-number="1"></li>
  <li data-orbit-slide-number="2" class="active"></li>
  <li data-orbit-slide-number="3"></li>
</ol>

        */
    }

} // Fecha class
