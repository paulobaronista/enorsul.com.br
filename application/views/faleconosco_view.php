<section class="contato">
  <div class="box-container">
   <div class="box-contato">

     <form method="post" action="<?php echo base_url("faleconosco")?>">
      <p class="tt-form">Cadastre-se</p>
      <p class="txt-form">Obtenha mais informações.<br/>
      Preencha os campos abaixo e envie para nós.</p>

      <label class="statusNome" for="nome">Nome Completo*</label>
      <input class="status_nome" name="nome" value="Digite seu nome aqui"/>
      <br class="clear" />
      
      <label class="statusEmail" for="e-mail">E-mail*</label>
      <input class="status_email" name="email" value="Digite seu e-mail aqui"/>
      <br class="clear" />
      
      <label class="statusTelefone" for="telefone">Telefone*</label>
      <input class="status_telefone" name="phone" value="Digite seu telefone aqui"/>
      <label class="statusTelefone" for="telefone">Ex.: DDD + Telefone</label>
      
      <br class="clear" />
      
      <label class="statusMensagem" for="mensagem">Mensagem*</label>
      <textarea class="status_msg" cols="60" rows="10" name="mss" value="Mensagem">Digite sua mensagem aqui</textarea>
      <br class="clear" />
      
      <button type="submit" class="btn_enviar" title="Enviar" name="enviar_email" value="enviar">ENVIAR</button>
    </form>

   </div>
  </div>
</section>
<?php
if(isset($email_enviado))
    echo $email_enviado;
?>














<!-- <section id="menu-implantacao">
  <div id="sombra-menu-implantacao"></div>

    <div id="box-menu-implantacao">
  
        <ul>

         <li class="p-projeto">
          <a href="<?php echo base_url();?>implantacao" title="Implantação">
          <span class="tt-home01" style="margin-top:115px">IMPLANTAÇÃO</span><br/> 
          </a>
         </li>
  
         <li class="p-localizacao">
          <a href="<?php echo base_url();?>localizacao" title="Localização Jardins, síntese de luxo e estilo">
          <span class="tt-home01" style="margin-top:20px">LOCALIZAÇÃO</span><br/> 
          </a>
         </li>
  
         <li class="la-projeto">
          <a href="<?php echo base_url();?>projeto" title="Projeto você merece o melhor">
          <span class="tt-home01" style="margin-top:15px">PROJETO</span><br/> 
          </a>
         </li>
  
         <li class="l-seu">
          <a href="<?php echo base_url();?>lazer" title="Lazer para curtir">
          <span class="tt-home01" style="margin-top:15px">LAZER</span><br/> 
          </a>
         </li>
  
         <li class="l-implantacao">
          <a href="<?php echo base_url();?>seuapartamento" title="O seu Maison Louise">
          <span class="tt-home01" style="margin-top:20px">O SEU</span><br/> 
          </a>
         </li>
  
       </ul>
        
    </div>


 </section>

<section id="implantacao">
  <div id="implantacao-titulo">
    <h3>O espaço que você deseja com o <br/>
    bom gosto que você merece.</h3>
  </div>

  <div id="implantacao-banner">
    <figure>
      <a class="fancybox" href="<?= base_url(); ?>assets/images/g-implantacao.png"  title="Ilustração artística da implantação"><img src="<?= base_url(); ?>assets/images/implantacao.png" alt="Implantação"/></a>
    </figure>
  </div>

  <div id="implantacao-info">
   <p id="leng-banner">Ilustração artística da implantação</p>

    <p id="leng-banner-amp">Clique na imagem para ampliar</p>
 
     <p id="leng-banner-impl">1 - Piscina coberta | 2 - Fitness | 3 - Salão de festas | 4 - Apoio festas<br/>
       5 - Jardim com área de descanso | 6 - Recreação infantil | 7 - Hall Social e de serviço</p>

    <figure>
      <figcaption>Projeto paisagístico:</figcaption>
      <img src="<?= base_url(); ?>assets/images/beneditoabbud.png" alt="Benedito Abbud"/></a>
    </figure>

  </div>
</section>

<section id="box-aviso">
  <p>ENTREGA EM DEZEMBRO/2015 - CONDIÇÕES ESPECIAIS</p>
</section> -->