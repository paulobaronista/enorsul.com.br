<?php echo doctype('html5'); ?>
	<head>
		<title><?php echo $title; ?></title>
		<?php
		$meta = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => $description),
			array('name' => 'keywords', 'content' => $keywords),
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'Content-type', 'content' => 'text/html;charset=utf-8', 'type' => 'equiv')
		);
		echo meta($meta);
		echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/ico');
        echo link_tag('assets/fancybox/jquery.fancybox.css?v=2.1.5');
		echo link_tag('assets/css/style.css');
		echo link_tag('assets/css/reset.css');
		echo script_tag('assets/js/jquery-1.11.3.js');
		echo script_tag('assets/js/jquery.clearinput.js');
		echo script_tag('assets/js/jFuncoes.js');
		echo script_tag('assets/fancybox/jquery.fancybox.js?v=2.1.5');
		?>
		<script>
		 $(window).load(function() {
		 $('.blueberry').blueberry();
		 });
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

		});
	</script>
	<script language="javascript" type="text/javascript">
	 function checa_formulario(email){
		 if (email.nome.value == ""){
		  alert("Por Favor não deixe o seu nome em branco!!!");
		  email.nome.focus();
		  return (false);
		 }
		 if (email.email_from.value == ""){
		  alert("Por Favor não deixe o seu email em branco!!!");
		  email.email_from.focus();
		  return (false);
		 }
		 if (email.assunto.value == ""){
		  alert("não deixe o assunto em branco!!!");
		  email.assunto.focus();
		  return (false); 
		 }
		 if (email.mensagem.value == ""){
		  alert("não deixe a mensagem em branco!!!");
		  email.mensagem.focus();
		  return (false); 
		 }
	}
	</script>
	</head>
<body onLoad="document.email.nome.focus();">
