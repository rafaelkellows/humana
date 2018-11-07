$(function(){ 
	(function() {
		var validateEmail = function(email){
		  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		  return re.test(email);
		}
		var validateInput = function(val){
		  var re = /^[^]+$/;
		  return re.test(val);
		};
		var d = new Date();
		var month = d.getMonth()+1;
		var day = d.getDate();

		$('.telefone').mask('(00) 0000-0000');
		$('.celular').mask('(00) 00000-0000');
		$('.mdata').mask('00/00/0000');
		var _s,int,wW,
			humanamagna = {
	        init: function() {
	            this.loading();
	            this.galeria();
	            this.rszWindow();
	        },
	        rszWindow : function () {
				$(window).resize(function() {
					if( $(window).width() != wW ){
						wW = $(window).width();
						$(".box-parallixit .bxn-parallixit").removeAttr('height');
						setTimeout( function(){ 
							humanamagna.toTop();
							$('html, body').animate({ scrollTop: jQuery(this).scrollTop()+1 }, 10); 
							humanamagna.menu();
						},100);
						console.log('Change Size');
					}

				}).load(function(){
					wW = $(window).width();
				})
	        },
	        menu : function(){
	        	clearInterval(_s);
	        	var getSub = $('body main > nav.sub'), menuClick = $('body main > nav:not(.sub)'); _s;
	        	if( getSub.length &&  menuClick.hasClass('on') && wW <= 768 ){
	        		_links = getSub.find('>a');
	        		_lLength = _links.length;
        			_s = setInterval(
        				function(){
        					if(_lLength > 0){
        						menuClick.addClass('_0'+_lLength);
        						_lLength = eval(_lLength-1);
        						//_links.eq(_lLength).addClass('close');
        					}else{
        						clearInterval(_s);
        						$('body main > nav').removeClass('on');
        						_lLength = _links.length;
								_lLength = eval(_lLength-1);
								_links.eq(_lLength).addClass('close');
        						_s = setInterval(
			        				function(){
			        					if(_lLength > 0){
											_lLength = eval(_lLength-1);
											_links.eq(_lLength).addClass('close');
			        					}else{
			        						clearInterval(_s);
			        						$('body main > nav:not(.sub)').removeClass('_01').removeClass('_02').removeClass('_03');
			        					}
			        				},
			        				150
			        			)
        					}
        				},
        				800
        			);
	        	}else{
	        		if(wW <= 768){
	        			getSub.find('>a').addClass('close');
	        		}else{
	        			getSub.find('>a').removeClass('close');
	        			menuClick.removeClass('on');
	        		}
	        	}

				menuClick.unbind('click').click(function(){
					if( wW <= 768 ){
						if($('body main > nav:not(.sub)').hasClass('on')){
							clearInterval(_s);
							$('body main > nav:not(.sub)').removeClass('_01').removeClass('_02').removeClass('_03');
							$('body main > nav.sub').find('>a').addClass('close');
							$('body main > nav').removeClass('on');
						}else{
							$('body main > nav').addClass('on');
							$('body main > nav.sub').find('>a').removeClass('close');
						}
					}	
				});
	        },
	        loading : function(){
				humanamagna.animaLoading();
		    	$(window).load(function(){
			    	$(document).ready(function(){
			    		setTimeout( function(){ 
							humanamagna.toTop();
							$("main section.box-parallixit .bxn-parallixit").first().addClass('pltON');
							$('html, body').animate({ scrollTop: $("main").offset().top+1 }, 100);
							$('#loading .logoH, #loading .logoV, #loading > p').removeClass('anima'+int);
							$('#loading').addClass('close');
							setTimeout( function(){ $('#loading').remove() }, 700 )
							clearInterval(_s);
							humanamagna.menu();
							$('html, body').animate({ scrollTop: 0 }, 100);
						}, 1000 );
						if( $('main.parceiros').length || $('main.trabalhe').length ){
							humanamagna.parceiros();
						}
						if( $('main.survey').length ){
							humanamagna.survey();
							var output =  (day<10 ? '0' : '') + day + '/' + (month<10 ? '0' : '') + month + '/' + d.getFullYear();
					    	$('input[name=currentDate]').val(output);
						}
					});
				});
	        },
	        parceiros : function(){

				$('form input[type=submit]').click(function(e){
					e.preventDefault();
					var nome = $(this).closest('form').find('input[name=nome]'), 
					email = $(this).closest('form').find('input[name=email]'), 
					telefone = $(this).closest('form').find('input[name=telefone]'), 
					celular = $(this).closest('form').find('input[name=celular]'),
					arquivo = $(this).closest('form').find('input[name=arquivo]');

					var _vNome = function(){
				        if(!validateInput(nome.val())){
		  					alert('O campo Nome precisa ser preenchido.');
		  					nome.focus();
		  					return false;
				        }else{
				        	return true;	
				        }
					};

					if( !_vNome() ) return;

					var _vEmail = function(_t){
				        if(validateInput(email.val())){
		  					if (validateEmail(email.val())) {
		  						_t.closest('form').submit();
		  					}else{
		  						alert('O E-mail inserido parece estar errado! Por favor confira novamente.');
		  					}
				        }else{
				        	alert('O campo E-mail precisa ser preenchido para entrarmos em contato.');
				        	email.focus();
				        	return false;
				        }
					};

					var _vCelular = function(_t){
				        if(validateInput(celular.val())){
				        	_t.closest('form').submit();
				        }else{
				        	alert('O campo Celular precisa ser preenchido para entrarmos em contato.');
				        	celular.focus();
				        	return false;
				        }
					};

					switch($(this).closest('form').find('input[name=contactby]:checked').val()) {
					    case 'e-mail':
					        _vEmail($(this)); return;
					        break;
					    case 'telefone':
					        if(validateInput(telefone.val())){
					        	$(this).closest('form').submit();
					        }else{
					        	alert('O campo Telefone precisa ser preenchido para entrarmos em contato.');
					        	telefone.focus();
					        	return;
					        }
					        break;
					    case 'celular':
					    	_vCelular($(this)); return;
					        break;
					    default:
					        null;
					}
					if($('main').hasClass('trabalhe')){
						if(email.val().length === 0){
							_vEmail();
							return;
						}
						if(celular.val().length === 0){
							_vCelular();
							return;
						}
						if(arquivo.val().length === 0){
							alert('Você precisa nos enviar um arquivo em .doc ou .pdf de até 2MB.');
							return;
						}
					}
					$(this).closest('form').submit();
				})
	        },
	        survey : function(){

				$('form input[type=submit]').click(function(e){
					e.preventDefault();
					var patientName = $(this).closest('form').find('input[name=patientName]'), 
					companyName = $(this).closest('form').find('input[name=companyName]'), 
					currentDate = $(this).closest('form').find('input[name=currentDate]');

					var _vpatientName = function(){
				        if(!validateInput(patientName.val())){
		  					alert('O campo Nome do Paciente precisa ser preenchido.');
		  					patientName.focus();
		  					return false;
				        }else{
				        	return true;	
				        }
					};
					if( !_vpatientName() ) return;
					var _vcompanyName = function(){
				        if(!validateInput(companyName.val())){
		  					alert('O campo Nome da Empresa precisa ser preenchido.');
		  					companyName.focus();
		  					return false;
				        }else{
				        	return true;	
				        }
					};
					if( !_vcompanyName() ) return;
					
					var _contLength = $(this).closest('form').find('ul.ul-content').length;

					for(var c= 0; c < _contLength; c++){
						_tmpChecked = false;
						_this = $(this).closest('form').find('ul.ul-content').eq(c);
						$(this).closest('form').find('ul.ul-content').removeClass('error');
						_this.find('input[type=radio]').each(function(){
							if($(this).is(":checked")){
								_tmpChecked = true;
							}
						});
						if(!_tmpChecked){
							_this.addClass('error');
		  					alert('Você precisa definir suas respostas. Por favor, certifique de que todas foram respondidas.');
							$('html, body').animate({ scrollTop: _this.offset().top-1 }, 100);
		  					break;
						}
						if(c === (_contLength-1) ){
							$(this).closest('form').submit();
						}
					}
					//
					/*$(this).closest('form').find('ul.ul-content').each(function(){
						_tmpChecked = false;
						$(this).find('input[type=radio]').each(function(){
							if($(this).is(":checked")){
								_tmpChecked = true;
							}
						});
						if(!_tmpChecked){
							$(this).addClass('error');
		  					alert('Você precisa definir suas respostas. Por favor, certifique de que todas foram respondidas.');
							$('html, body').animate({ scrollTop: $(this).offset().top-1 }, 100);
		  					return false;
						}
						$(this).closest('form').submit();
					});*/
				})
	        },
	        animaLoading : function(){
	        	var anima = 6; 
	        	int=0;
	        	_s = setInterval(
	        		function(){
	        			$('#loading .logoH, #loading .logoV, #loading > p').removeClass('anima'+int);
	        			if(int<anima){
	        				int++;
	        			}else{
	        				int=1;
	        			}
	        			$('#loading .logoH, #loading .logoV, #loading > p').addClass('anima'+int);
	        		}, 1500
	        	);
	        },
	        galeria : function(){
	        	var loadHTML = '<div id="loading">' + "\n" +
						        '    <figure class="logoH">' + "\n" +
						        '        <img src="images/partLogoH.png" alt="" />' + "\n" +
						        '    </figure>' + "\n" +
						        '    <figure class="logoV">' + "\n" +
						        '        <img src="images/partLogoV.png" alt="" />' + "\n" +
						        '    </figure>' + "\n" +
						        '    <p>carregando</p>' + "\n" +
						        '</div>';
	        	var loadGaleria = '<div id="galeria">' + "\n" +
						        '    <a href="javascript:void(0);" alt="fechar"><i class="fa fa-times" aria-hidden="true"></i></a>' + "\n" +
						        '    <figure class="logoH">' + "\n" +
						        '        <img src="images/partLogoH.png" alt="" />' + "\n" +
						        '    </figure>' + "\n" +
						        '</div>';
				var imgSRC;

	        	var gal = $('.galeria figure img');
	        		gal.each(function(){
	        			$(this).click(function(){
	        				$('main').prepend(loadHTML);
	        				humanamagna.animaLoading();

	        				imgSRC = $(this).attr('src');
	        				imgTITLE = $(this).parent().find('figcaption').text();
	        				galeriaDIV = $(loadGaleria);
	        				galeriaDIV.find('img').attr('src',imgSRC);
	        				galeriaDIV.find('img').attr('title',imgTITLE);

	        				$('main').prepend(galeriaDIV);
	        				
							// get all images and iframes
							var $elems = galeriaDIV.find('img');

							// count them
							var elemsCount = $elems.length;

							// the loaded elements flag
							var loadedCount = 0;

							// attach the load event to elements
							$elems.on('load', function () {
							    // increase the loaded count 
							    loadedCount++;

							    // if loaded count flag is equal to elements count
							    if (loadedCount == elemsCount) {
							        // do what you want
						    		setTimeout( function(){ 
										humanamagna.toTop();
										$('#loading .logoH, #loading .logoV, #loading > p').removeClass('anima'+int);
										$('#loading').addClass('close');
										setTimeout( function(){ $('#loading').remove() }, 700 )
										clearInterval(_s);
									}, 1000 )
							    }
							});

							galeriaDIV.find('a').click(function(){
								galeriaDIV.remove();
							});
	        			});
	        		});
	        },
	        toTop : function(elem){
		        var offset = 1,
		        	duration = 500, wH = $(window).height(), dH = $(document).height();
		        var arrBoxNav = [];
		       

		        $(".box-parallixit").each(function(){
		        	arrBoxNav.push([
		        		$(this), 
		        		$(this).height(), 
		        		$(this).find(".bxn-parallixit"), 
		        		$(this).find(".bxn-parallixit").height(), 
		        		Math.round( $(this).offset().top ),
		        		Math.round( parseInt( $(this).css("left"), 10 ) ) 
		        	]);
		        });
		        //console.log(arrBoxNav);
		       
		        jQuery(window).scroll(function() {
					//for (i = 3; i < 4; i++) { 
					for (i = 0; i < arrBoxNav.length; i++) { 

						if( jQuery(this).scrollTop() >= eval(arrBoxNav[i][4]  - wH) ){

							_scroll = jQuery(this).scrollTop() - eval(arrBoxNav[i][4]  - wH);
							_scrollLeft = jQuery(this).scrollTop() + wH;
							_offsetScroll = eval( (arrBoxNav[i][3] - arrBoxNav[i][1]) ); //280
							_offsetMaximumLeft = 140;
							_scrollTopLimit = eval(wH+arrBoxNav[i][1]); //1259
							_decimalScroll = eval( _offsetScroll / _scrollTopLimit );
							_decimalLeftScroll = eval( _offsetMaximumLeft / arrBoxNav[i][4] );
							_top = eval(_scroll*_decimalScroll);
							_left = eval(_scrollLeft*_decimalLeftScroll);
							if(_top < _offsetScroll){
								//console.log( _scrollLeft );
								
								if( arrBoxNav[i][2].hasClass('bottom') ){
									arrBoxNav[i][2].css('bottom',- _top+'px');
								}
								if( arrBoxNav[i][2].hasClass('top') ){
									arrBoxNav[i][2].css('top',- _top+'px');
								}
								if( arrBoxNav[i][2].hasClass('to-left') ){
									arrBoxNav[i][2].css('left',-_top+'px');
								}
								if( arrBoxNav[i][2].hasClass('to-right') ){
									arrBoxNav[i][2].css('left', _top+'px');
								}
							}
							if( eval(_top+(_offsetScroll/1.1)) >= _offsetScroll){
								arrBoxNav[i][2].addClass('pltON');
							}
						}

					}
			        //var _conheca = $('.logoH');
					//jQuery('#temp').html(  ' Sroll ' + jQuery(this).scrollTop() +'<br> Document Height '+ $( document ).height() +'<br> window Height '+ $( window ).height() +'<br> C_TOP '+ _conheca.offset().top );
				});

    	    }
    	}
    	humanamagna.init();
	})();
});