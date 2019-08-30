<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function obrigado(){
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['contato'] = 'active';
		$conteudo['pagina_view'] = 'contato_sucesso';
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
	public function fail(){
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['contato'] = 'active';
		$conteudo['pagina_view'] = 'contato_insucesso';
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
}

/* Location: ./application/controllers/contato.php */