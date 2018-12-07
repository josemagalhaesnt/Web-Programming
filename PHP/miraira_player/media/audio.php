<?php 
  require_once($_SERVER['DOCUMENT_ROOT'].'/html5_player/config.php'); 
  require_once($_SERVER['DOCUMENT_ROOT'].'/html5_player/inc/player_header.php'); 
  require_once($_SERVER['DOCUMENT_ROOT'].'/html5_player/inc/player_functions.php');

  $titulo = "Teste";
  $album = "Teste";
  $url = "audios/04.mp3";


	/* Créditos da Música */

	echo('<div id="creditos" class="musica">');

		echo('<div class="titulo">' . exibir_titulo($titulo) . '</div>'); 
		
		echo('<div class="autor">' . exibir_autor($autor) . '</div>'); 
		echo('<div class="interprete">' . exibir_interprete($interprete) . '</div>'); 
		echo('<div class="album">' . exibir_album($album) . '</div>'); 


	echo ('</div>');

	/* Player de áudio */

	echo('<div class="container">'. '<div id="player">' . '<audio src="' . $url . ' preload="none" oncontextmenu="return false;" controls> Seu navegador não suporta a execução desse áudio. 
				</audio></div></div>');
	
	echo('</div>'); 

require_once($_SERVER['DOCUMENT_ROOT'].'/html5_player/inc/player_footer.php'); 
?>