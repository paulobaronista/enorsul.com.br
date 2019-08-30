$(function(){

	// Tabs Vídeo institucional
	 // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content").hide();
    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {
		
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	$('ul.tabs li').last().addClass("tab_last");
	
	
		$.fn.extend({
		blueberry: function(options) {

			//default values for plugin options
			var defaults = {
				interval: 5000,
				duration: 500,
				lineheight: 1,
				height: 'auto', //reserved
				hoverpause: false,
				pager: true,
				nav: true, //reserved
				keynav: true
			}
			var options =  $.extend(defaults, options);
 
			return this.each(function() {
				var o = options;
				var obj = $(this);

				//store the slide and pager li
				var slides = $('.slides li', obj);
				var pager = $('.pager li', obj);

				//set initial current and next slide index values
				var current = 0;
				var next = current+1;

				//get height and width of initial slide image and calculate size ratio
				var imgHeight = slides.eq(current).find('img').height();
				var imgWidth = slides.eq(current).find('img').width();
				var imgRatio = imgWidth/imgHeight;

				//define vars for setsize function
				var sliderWidth = 0;
				var cropHeight = 0;

				//hide all slides, fade in the first, add active class to first slide
				slides.hide().eq(current).fadeIn(o.duration).addClass('active');
				

				//build pager if it doesn't already exist and if enabled
				if(pager.length) {
					pager.eq(current).addClass('active');
				} else if(o.pager){
					obj.append('<ul class="pager"></ul>');
					slides.each(function(index) {
						$('.pager', obj).append('<li><a href="#"><span>'+index+'</span></a></li>')
					});
					pager = $('.pager li', obj);
					pager.eq(current).addClass('active');
				}

				//rotate to selected slide on pager click
				if(pager){
					$('a', pager).click(function() {
						//stop the timer
						clearTimeout(obj.play);
						//set the slide index based on pager index
						next = $(this).parent().index();
						//rotate the slides
						rotate();
						return false;
					});
				}

				//primary function to change slides
				var rotate = function(){
					//fade out current slide and remove active class,
					//fade in next slide and add active class
					slides.eq(current).fadeOut(o.duration).removeClass('active')
						.end().eq(next).fadeIn(o.duration).addClass('active').queue(function(){
							//add rotateTimer function to end of animation queue
							//this prevents animation buildup caused by requestAnimationFrame
							//rotateTimer starts a timer for the next rotate
							rotateTimer();
							$(this).dequeue()
					});

					//update pager to reflect slide change
					if(pager){
						pager.eq(current).removeClass('active')
							.end().eq(next).addClass('active');
					}

					//update current and next vars to reflect slide change
					//set next as first slide if current is the last
					current = next;
					next = current >= slides.length-1 ? 0 : current+1;
				};
				//create a timer to control slide rotation interval
				var rotateTimer = function(){
					obj.play = setTimeout(function(){
						//trigger slide rotate function at end of timer
						rotate();
					}, o.interval);
				};
				//start the timer for the first time
				rotateTimer();

				//pause the slider on hover
				//disabled by default due to bug
				if(o.hoverpause){
					slides.hover(function(){
						//stop the timer in mousein
						clearTimeout(obj.play);
					}, function(){
						//start the timer on mouseout
						rotateTimer();
					});
				}

				//calculate and set height based on image width/height ratio and specified line height
				var setsize = function(){
					sliderWidth = $('.slides', obj).width();
					cropHeight = Math.floor(((sliderWidth/imgRatio)/o.lineheight))*o.lineheight;

					$('.slides', obj).css({height: cropHeight});
				};
				setsize();

				//bind setsize function to window resize event
				$(window).resize(function(){
					setsize();
				});
				
				

				//Add keyboard navigation

				if(o.keynav){
					$(document).keyup(function(e){

						switch (e.which) {

							case 39: case 32: //right arrow & space

								clearTimeout(obj.play);

								rotate();

								break;


							case 37: // left arrow
								clearTimeout(obj.play);
								next = current - 1;
								rotate();

								break;
						}

					});
				}


			});
		}
	});

   $.fn.scrollToTop = function(){
    $(this).hide().removeAttr("href");
    
    if($(window).scrollTop() != "0")
    {
      $(this).fadeIn("slow");
    }
    
    var scrollDiv = $(this);
    
    $(window).scroll(function(){
      if($(window).scrollTop() == "0")
      {
        $(scrollDiv).fadeOut("slow");
      }
      else
      {
        $(scrollDiv).fadeIn("slow");
      }
    });
    
    $(this).click(function(){
      $("html, body").animate({scrollTop:0},"slow");
    });
  };

  $("#toTop").scrollToTop();

	$('.status_nome').clear();
	$('.status_email').clear();
	$('.status_telefone').clear();
	$('.status_msg').clear();
	
	$('.btn_enviar').on('click', function(){
		var n, e, t, m;
		var msg = "";
		n = $('.status_nome').val();
		e = $('.status_email').val();
		t = $('.status_telefone').val();
		m = $('.status_msg').val();
		
		if(n == "Digite seu nome aqui"){ msg += 'Campo Nome vazio. \n'; }
		if(e == "Digite seu e-mail aqui"){ msg += 'Campo E-mail vazio. \n'; }
		if(t == "Digite seu telefone aqui"){ msg += 'Campo Telefone vazio. \n'; }
		if(m == "Digite sua mensagem aqui"){ msg += 'Campo Mensagem vazio. \n'; }
		
		if(msg != ""){
			alerta = "Por favor, preencha o(s) campo(s) abaixo: \n\n"+msg;
			alert(alerta);
			return false;
		}
		
	});

	/*$('.status_nome_tr').clear();
	$('.status_email_tr').clear();
	$('.status_telefone_tr').clear();
	$('.status_msg_tr').clear();
	
	$('.btn_enviar_tr').on('click', function(){
		var n, e, t, m;
		var msg = "";
		n = $('.status_nome_tr').val();
		e = $('.status_email_tr').val();
		t = $('.status_telefone_tr').val();
		m = $('.status_msg_tr').val();
		
		if(n == "Digite seu nome aqui"){ msg += 'Campo Nome vazio. \n'; }
		if(e == "Digite seu e-mail aqui"){ msg += 'Campo E-mail vazio. \n'; }
		if(t == "Digite seu telefone aqui"){ msg += 'Campo Telefone vazio. \n'; }
		if(m == "Digite sua mensagem aqui"){ msg += 'Campo Mensagem vazio. \n'; }
		
		if(msg != ""){
			alerta = "Por favor, preencha o(s) campo(s) abaixo: \n\n"+msg;
			alert(alerta);
			return false;
		}
		
	});*/

});