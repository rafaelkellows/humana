$(function(){!function(){var revitech={init:function(){this.carrossel(),this.toTop()},loadJson:function(){$.ajax({url:"../js/....js",dataType:"json",success:function(json){console.log("Foi "+json[0].home.highlight),revitech.loadJsonContent()},error:function(r){console.log("Deu Erro")}})},loadJsonContent:function(argument){},loading:function(){$(window).load(function(){$(".loading").removeClass("active")})},toTop:function(elem){jQuery(window).scroll(function(){jQuery("#CS").html(jQuery(this).scrollTop())}),console.log("---")},carrossel:function(){var owl=$("section.carrossel > div");owl.length&&owl.owlCarousel({autoplay:!0,smartSpeed:600,loop:!0,margin:0,nav:!1,responsive:{0:{items:1},600:{items:1},1e3:{items:1}},paginationSpeed:1e3,singleItem:!0,autoPlay:8e3})}};revitech.init()}()});