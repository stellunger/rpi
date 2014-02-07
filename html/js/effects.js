
/* */

		$('document').ready(function(){
			$('#form').validate(
			{	
				rules:{
					"name":{
						required:true,
						maxlength:40
					},
					"email":{
						required:true,
						email:true,
						maxlength:100
					},
					"number":{
						required:true,
						maxlength:40
					}
				},
				messages:{
					"name":{
						required:""
					},
					"email":{
						required:"",
						email:""
					},
					"number":{
						required:""
					}
				},		
			})
		});

/* */
	
		$(document).ready(function () {
			$('#mt1').click(function(){
				$('#map-1-text').fadeIn(0);
				$('#map-1').fadeIn(0);
				$('#mt1').addClass("map-text-active");
				$('#mt2, #mt3').removeClass("map-text-active");
				$('#mt2, #mt3').addClass("map-text");
				$('#map-2-text, #map-3-text').fadeOut(0);
				$('#map-2, #map-3').fadeOut(0);
				$('.b-mt1').fadeIn(0);
				$('.b-mt2').fadeOut(0);
			});
		});	
	
		$(document).ready(function () {
			$('#mt2').click(function(){
				$('#map-2-text').fadeIn(0);
				$('#map-2').fadeIn(0);
				$('#mt2').addClass("map-text-active");
				$('#mt1, #mt3').removeClass("map-text-active");
				$('#mt1, #mt3').addClass("map-text");
				$('#map-1-text, #map-3-text').fadeOut(0);
				$('#map-1, #map-3').fadeOut(0);
				$('.b-mt2').fadeIn(0);
				$('.b-mt1').fadeOut(0);
			});
		});	
	
		$(document).ready(function () {
			$('#mt3').click(function(){
				$('#map-3-text').fadeIn(0);
				$('#map-3').fadeIn(0);
				$('#mt3').addClass("map-text-active");
				$('#mt1, #mt2').removeClass("map-text-active");
				$('#mt1, #mt2').addClass("map-text");
				$('#map-1-text, #map-2-text').fadeOut(0);
				$('#map-1, #map-2').fadeOut(0);
			});
		});	

/* */
	
		$(document).ready(function () {
			$('#open-g').click(function(){
				$('#geography-img').css('height','400');
				$('#geography h1').fadeOut(0);
				$('#geography h2').fadeIn(0);
				$('#open-g').fadeOut(0);
				$('#close-g').fadeIn(0);
			});
		});	
	
		$(document).ready(function () {
			$('#close-g').click(function(){
				$('#geography-img').css('height','100');
				$('#geography h2').fadeOut(0);
				$('#geography h1').fadeIn(0);
				$('#close-g').fadeOut(0);
				$('#open-g').fadeIn(0);
			});
		});	

/* */

			$(document).ready(function () {
			$('.activate ul').slideDown(500);		
			});		

		$(function (){ 
			$('#clb1 h1').click(function(){
				$('#clb1 ul').slideDown(500);
				$('#clb2 ul, #clb3 ul, #clb4 ul, #clb5 ul, #clb6 ul, #clb7 ul, #clb8 ul, #clb9 ul, #clb10 ul, #clb11 ul').slideUp(500);
				$('#clb1').removeClass("content-left-bar");
				$('#clb1').addClass("activate");
				$('#clb2, #clb3, #clb4, #clb5, #clb6, #clb7, #clb8, #clb9, #clb10, #clb11').removeClass("activate");
				$('#clb2, #clb3, #clb4, #clb5, #clb6, #clb7, #clb8, #clb9, #clb10, #clb11').addClass("content-left-bar");
			});			
		});	

		$(function (){ 
			$('#clb2 h1').click(function(){
				$('#clb2 ul').slideDown(500);
				$('#clb1 ul, #clb3 ul, #clb4 ul, #clb5 ul, #clb6 ul, #clb7 ul, #clb8 ul, #clb9 ul, #clb10 ul, #clb11 ul').slideUp(500);
				$('#clb2').removeClass("content-left-bar");
				$('#clb2').addClass("activate");
				$('#clb1, #clb3, #clb4, #clb5, #clb6, #clb7, #clb8, #clb9, #clb10, #clb11').removeClass("activate");
				$('#clb1, #clb3, #clb4, #clb5, #clb6, #clb7, #clb8, #clb9, #clb10, #clb11').addClass("content-left-bar");
			});			
		});

		$(function (){ 
			$('#clb3 h1').click(function(){
				$('#clb3 ul').slideDown(500);
				$('#clb1 ul, #clb2 ul, #clb4 ul, #clb5 ul, #clb6 ul, #clb7 ul, #clb8 ul, #clb9 ul, #clb10 ul, #clb11 ul').slideUp(500);
				$('#clb3').removeClass("content-left-bar");
				$('#clb3').addClass("activate");
				$('#clb1, #clb2, #clb4, #clb5, #clb6, #clb7, #clb8, #clb9, #clb10, #clb11').removeClass("activate");
				$('#clb1, #clb2, #clb4, #clb5, #clb6, #clb7, #clb8, #clb9, #clb10, #clb11').addClass("content-left-bar");
			});			
		});

		$(function (){ 
			$('#clb4 h1').click(function(){
				$('#clb4 ul').slideDown(500);
				$('#clb1 ul, #clb2 ul, #clb3 ul, #clb5 ul, #clb6 ul, #clb7 ul, #clb8 ul, #clb9 ul, #clb10 ul, #clb11 ul').slideUp(500);
				$('#clb4').removeClass("content-left-bar");
				$('#clb4').addClass("activate");
				$('#clb1, #clb2, #clb3, #clb5, #clb6, #clb7, #clb8, #clb9, #clb10, #clb11').removeClass("activate");
				$('#clb1, #clb2, #clb3, #clb5, #clb6, #clb7, #clb8, #clb9, #clb10, #clb11').addClass("content-left-bar");
			});			
		});

		$(function (){ 
			$('#clb5 h1').click(function(){
				$('#clb5 ul').slideDown(500);
				$('#clb1 ul, #clb2 ul, #clb3 ul, #clb4 ul, #clb6 ul, #clb7 ul, #clb8 ul, #clb9 ul, #clb10 ul, #clb11 ul').slideUp(500);
				$('#clb5').removeClass("content-left-bar");
				$('#clb5').addClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb6, #clb7, #clb8, #clb9, #clb10, #clb11').removeClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb6, #clb7, #clb8, #clb9, #clb10, #clb11').addClass("content-left-bar");
			});			
		});

		$(function (){ 
			$('#clb6 h1').click(function(){
				$('#clb6 ul').slideDown(500);
				$('#clb1 ul, #clb2 ul, #clb3 ul, #clb4 ul, #clb5 ul, #clb7 ul, #clb8 ul, #clb9 ul, #clb10 ul, #clb11 ul').slideUp(500);
				$('#clb6').removeClass("content-left-bar");
				$('#clb6').addClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb5, #clb7, #clb8, #clb9, #clb10, #clb11').removeClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb5, #clb7, #clb8, #clb9, #clb10, #clb11').addClass("content-left-bar");
			});			
		});

		$(function (){ 
			$('#clb7 h1').click(function(){
				$('#clb7 ul').slideDown(500);
				$('#clb1 ul, #clb2 ul, #clb3 ul, #clb4 ul, #clb5 ul, #clb6 ul, #clb8 ul, #clb9 ul, #clb10 ul, #clb11 ul').slideUp(500);
				$('#clb7').removeClass("content-left-bar");
				$('#clb7').addClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb5, #clb6, #clb8, #clb9, #clb10, #clb11').removeClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb5, #clb6, #clb8, #clb9, #clb10, #clb11').addClass("content-left-bar");
			});			
		});

		$(function (){ 
			$('#clb8 h1').click(function(){
				$('#clb8 ul').slideDown(500);
				$('#clb1 ul, #clb2 ul, #clb3 ul, #clb4 ul, #clb5 ul, #clb6 ul, #clb7 ul, #clb9 ul, #clb10 ul, #clb11 ul').slideUp(500);
				$('#clb8').removeClass("content-left-bar");
				$('#clb8').addClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb5, #clb6, #clb7, #clb9, #clb10, #clb11').removeClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb5, #clb6, #clb7, #clb9, #clb10, #clb11').addClass("content-left-bar");
			});			
		});

		$(function (){ 
			$('#clb9 h1').click(function(){
				$('#clb9 ul').slideDown(500);
				$('#clb1 ul, #clb2 ul, #clb3 ul, #clb4 ul, #clb5 ul, #clb6 ul, #clb7 ul, #clb8 ul, #clb10 ul, #clb11 ul').slideUp(500);
				$('#clb9').removeClass("content-left-bar");
				$('#clb9').addClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb5, #clb6, #clb7, #clb8, #clb10, #clb11').removeClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb5, #clb6, #clb7, #clb8, #clb10, #clb11').addClass("content-left-bar");
			});			
		});

		$(function (){ 
			$('#clb10 h1').click(function(){
				$('#clb10 ul').slideDown(500);
				$('#clb1 ul, #clb2 ul, #clb3 ul, #clb4 ul, #clb5 ul, #clb6 ul, #clb7 ul, #clb8 ul, #clb9 ul, #clb11 ul').slideUp(500);
				$('#clb10').removeClass("content-left-bar");
				$('#clb10').addClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb5, #clb6, #clb7, #clb8, #clb9, #clb11').removeClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb5, #clb6, #clb7, #clb8, #clb9, #clb11').addClass("content-left-bar");
			});			
		});

		$(function (){ 
			$('#clb11 h1').click(function(){
				$('#clb11 ul').slideDown(500);
				$('#clb1 ul, #clb2 ul, #clb3 ul, #clb4 ul, #clb5 ul, #clb6 ul, #clb7 ul, #clb8 ul, #clb9 ul, #clb10 ul').slideUp(500);
				$('#clb11').removeClass("content-left-bar");
				$('#clb11').addClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb5, #clb6, #clb7, #clb8, #clb9, #clb10').removeClass("activate");
				$('#clb1, #clb2, #clb3, #clb4, #clb5, #clb6, #clb7, #clb8, #clb9, #clb10').addClass("content-left-bar");
			});			
		});
		
/* */
