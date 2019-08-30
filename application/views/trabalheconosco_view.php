<section class="contato">
  <div class="box-container">
   <div class="box-contato">
	<form onSubmit="return checa_formulario(this)" action="mail.php" method="post" enctype="multipart/form-data" name="email">
	<p class="tt-form">Envie seu currículo</p>
    <p class="txt-form">Trabalhe conosco.<br/>
      Preencha os campos abaixo e envie para nós.</p>

	<label class="statusNome" for="nome">Nome Completo*</label>
	<input class="status_nome_tr" name="nome" type="text" id="nome">
	<br class="clear" />
	
	<label class="statusEmail" for="e-mail">E-mail*</label>
	<input class="status_email_tr" name="email_from" type="text" class="email">
	<br class="clear" />
	
	<label class="statusTelefone" for="assunto">Assunto*</label>
	<input class="status_telefone_tr" name="assunto" type="text" id="assunto">
  <br class="clear" />
	
	<label class="statusMensagem" for="mensagem">Mensagem*</label>
	<textarea class="status_msg_tr" name="mensagem" cols="50" rows="10" id="mensagem"></textarea>
	<br class="clear" /><br/>
	
	<label class="statusTelefone" for="anexar">Anexar arquivo*</label>
	<input class="status_cv" name="arquivo" type="file">
	<br class="clear" />
	
	<input class="btn_enviar_tr" type="submit" name="Submit" value="Enviar">
	
	</form>
   </div>
  </div>
</section>
