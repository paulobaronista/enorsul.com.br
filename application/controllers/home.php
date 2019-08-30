<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['home'] = 'active';
		$conteudo['pagina_view'] = 'home_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function politicadequalidade()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['politicadequalidade'] = 'active';
		$conteudo['pagina_view'] = 'politicadequalidade_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function focosdeatuacao()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['focosdeatuacao'] = 'active';
		$conteudo['pagina_view'] = 'focosdeatuacao_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function quemsomos()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['quemsomos'] = 'active';
		$conteudo['pagina_view'] = 'quemsomos_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function historico()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['historico'] = 'active';
		$conteudo['pagina_view'] = 'historico_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function premios()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['premios'] = 'active';
		$conteudo['pagina_view'] = 'premios_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

	public function noticias()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['premios'] = 'active';
		$conteudo['pagina_view'] = 'noticias_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

	public function compliance()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['premios'] = 'active';
		$conteudo['pagina_view'] = 'compliance_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

	public function servicos()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['servicos'] = 'active';
		$conteudo['pagina_view'] = 'servicos_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function automacao()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['automacao'] = 'active';
		$conteudo['pagina_view'] = 'automacao_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function desenvolvimentooperacional()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['desenvolvimentooperacional'] = 'active';
		$conteudo['pagina_view'] = 'desenvolvimentooperacional_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function desenvolvimentocomercial()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['desenvolvimentocomercial'] = 'active';
		$conteudo['pagina_view'] = 'desenvolvimentocomercial_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function prestacaodeservicoseobras()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['prestacaodeservicoseobras'] = 'active';
		$conteudo['pagina_view'] = 'prestacaodeservicoseobras_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function concessoes()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['concessoes'] = 'active';
		$conteudo['pagina_view'] = 'concessoes_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function clientes()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['clientes'] = 'active';
		$conteudo['pagina_view'] = 'clientes_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function enderecos()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['enderecos'] = 'active';
		$conteudo['pagina_view'] = 'enderecos_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

	public function faleconosco()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['faleconosco'] = 'active';
		$conteudo['pagina_view'] = 'faleconosco_view';

		// if($this->input->post('enviar_email') == "enviar"){		
		// 	$nome = $this->input->post('nome');
		// 	$email = $this->input->post('email');
		// 	$telefone = $this->input->post('phone');
		// 	$mensagem = utf8_decode($this->input->post('mss'));
		// 	$assunto = utf8_decode('Contato via site Enorsul - Fale Conosco');

		// 	$this->load->library('email');
		// 	$config['mailtype'] = 'html';
		// 	$this->email->initialize($config);

		// 	$this->email->from("$email","$nome");
		// 	$this->email->to('paulobaronista@gmail.com');	
		// 	//$this->email->to('enorsul@enorsul.com.br');		
		// 	//$this->email->cc('enorsul@enorsul.com.br, enorsul@enorsul.com.br');
		// 	//$this->email->bcc('enorsul@enorsul.com.br, enorsul@enorsul.com.br');

		// 	$this->email->subject($assunto);
		// 	$this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
		// 	<head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
		// 		Nome:		{$nome}<br/>
		// 		E-mail:		{$email}<br/>
		// 		Telefone:	{$telefone}<br/>
		// 		Mensagem:	{$mensagem}<br/>
		// 	</body></html>");

		// 	if($this->email->send()){
		// 		redirect('contato/obrigado');
		// 	}else{
		// 		redirect('contato/fail');
		// 	}

		// }

		if ($this->input->post('enviar_email') == "enviar") {
			$nome = $this->input->post('nome');
			$email = $this->input->post('email');
			$telefone = $this->input->post('phone');
			$mensagem = utf8_decode($this->input->post('mss'));
			$assunto = utf8_decode('Contato via site Enorsul - Fale Conosco');
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->from("site@enorsul.com.br", "$nome");
			$this->email->to('site@enorsul.com.br');
			$this->email->cc('enorsul@enorsul.com.br');
			$this->email->subject($assunto);
			$this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                Telefone:	{$telefone}<br/>
                    E-mail:		{$email}<br/>
                            Mensagem:	{$mensagem}<br/>
                            </body></html>");
			if ($this->email->send()) {
				redirect('http://www.enorsul.com.br/contato/obrigado');
			} else {
				redirect('http://www.enorsul.com.br/contato/fail');
			}
		}
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

	public function trabalheconosco()
	{
		$data['title'] = 'Enorsul - Serviços em Saneamento LTDA.';
		$data['description'] = 'A Enorsul acredita que, em saneamento básico, a raiz para a solução da maioria dos problemas reside na mescla balanceada do antigo com o novo, do tradicional com o inovador. E investe nessa idéia.';
		$data['keywords'] = 'emissao, norte-sul, servicos em saneamento ltda, automacao, tecnologia, projeto de concessoes, desenvolvimento operacional, obras';
		$menu['trabalheconosco'] = 'active';
		$conteudo['pagina_view'] = 'trabalheconosco_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
}

/* Location: ./application/controllers/home.php */
