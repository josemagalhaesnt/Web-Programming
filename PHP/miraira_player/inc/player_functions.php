<?php

	function exibir_titulo($titulo) {
		return ('<span class="campo text text-center">Título: </span>' . 
			'<span class="informacao text text-center">' . $_GET['$titulo'] . '</span>');
	}

	function exibir_autor() {
		return ('<span class="campo text text-center">Autor: </span>' . 
			'<span class="informacao text text-center">' . $_GET['$autor'] . '</span>');
	}

	function exibir_interprete() {
		return ('<span class="campo text text-center">Intérprete: </span>' . 
			'<span class="informacao text text-center">' . $_GET['$interprete'] . '</span>');
	}

	function exibir_album() {
		return ('<span class="campo text text-center">Álbum: </span>' . 
			'<span class="informacao text text-center">' . $_GET['$album'] . '</span>');
	}

	function player_musica(){
		
	}

?>