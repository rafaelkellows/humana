$(function(){ 
	(function() {
		var _s,int,
			humanamagna = {
	        init: function() {
	            this.loading();
	            this.galeria();
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
							$('html, body').animate({ scrollTop: 0 }, 100);
						}, 1000 )
					});
				});
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