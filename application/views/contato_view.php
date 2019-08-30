<form method="post" action="<?php echo base_url("contato")?>">
<input class="status_nome" name="nome" value="Nome"/>
<br class="clear" />
<input class="status_email" name="email" value="E-mail"/>
<br class="clear" />
<input class="status_telefone" name="phone" value="Telefone"/>
<br class="clear" />
<textarea class="status_msg" cols="60" rows="10" name="mss" value="Mensagem">Mensagem</textarea>
<br class="clear" />
<button type="submit" class="btn_enviar" title="Enviar" name="enviar_email" value="enviar">ENVIAR</button>
</form>
<?php
if(isset($email_enviado))
    echo $email_enviado;
?>