<?php
	# respectivo diretorio
	namespace App;

	class Route{

		# rotas que a aplicação possui
		public function initRoutes(){
			$routes['home'] = $array(
				'route' => '/' ,
				'controller' => 'indexController',
				'action' => 'index'
			);
			$routes['sobre nós'] = $array(
				'route' => '/sobre_nos' ,
				'controller' => 'indexController',
				'action' => 'sobreNos'
			);
		}

		public function getUrl(){
			//variavel global do php, retorna os detalhes do servidor da aplicação $_SERVER
			return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); //recupera um dos elementos do array
		}

	}
?>