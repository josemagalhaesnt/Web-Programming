<?php 
  require_once($_SERVER['DOCUMENT_ROOT'].'/html5_player/config.php'); 
  require_once($_SERVER['DOCUMENT_ROOT'].'/html5_player/inc/player_header.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'/html5_player/inc/player_functions.php'); 
?>

	<h1 class="text text-center titulo-video">Título do Vídeo</h1>

	<!-- Player de vídeo -->
	
		<div id="player" class="col-md-12">

			<!-- Arquivo de vídeo - INSIRA A URL do vídeo dentro das aspas do campo src="" -->
			<video width="auto" height="auto" oncontextmenu="return false;" controls>
				<source src="videos/video.webm" type='video/webm'>
			</video>

		</div>

	<!-- Créditos do Vídeo -->
	<div class="container">
		<div id="creditos" class="col-md-12">

			<div class="autor">
				<span class="text text-center campo">Realização: </span>
				<span class="text text-center informacao autor">Autor</span><br>
			</div>

			<div class="descricao">
				<p class="text text-center informacao">Blablablablablabla</p>
			</div>
	
		</div>
	</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/html5_player/inc/player_footer.php'); ?>