<?php

class Pagina
{
		private array $url =  [
			'dashboard'         => 'dashboard.php',
			'cadastrarLivroForm'    => 'cadastrarLivroForm.php',
        ];

		public function verificaPagina (string $valor): bool
		{
			if(array_key_exists($valor, $this->url)){
				return true;
			}

			return false;
		}

		public function pegarPagina(string $pagina): string
		{
			return $this->url[$pagina];
		}

}