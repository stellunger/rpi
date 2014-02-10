<!DOCTYPE html>
<html>
<head>
	<!-- meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href="fonts/stylesheet.css" rel="stylesheet" media="screen">
	<meta name="description" content="">

	<!-- css -->	
	<link href="<?php echo base_url(); ?>css/style.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/effects.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.js"></script>
	<link rel="stylesheet" media="screen" href="http://openfontlibrary.org/face/sansus-webissimo" rel="stylesheet" type="text/css"/>

	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.11.4/TweenMax.min.js"></script>
  	<script src="js/jquery.mousewheel.js"></script>
  	<script src="js/jquery.jscrollpane.min.js"></script>
  	<script type="text/javascript">
  	$(function(){
		
		
		$('area').hover(
		function(e) {
			var ind = $(this).index();
			$('.b-map-peac > div').eq(ind).css({'display':'block'});
			$('.b-point-container > div').eq(ind).find('.b-point').css({'background':'#fff'});
		},
		function(e) {
			var ind = $(this).index();
			if (!$('.b-map-peac').hasClass('active')){
				$('.b-map-peac > div').css({'display':'none'});
			}
			$('.b-point-container > div').eq(ind).find('.b-point').css({'background':'#4275B3'});
		});
		
		$('.b-marker').hover(
		 function(){
			$(this).css('z-index','8');
		 },function(){
			$(this).css('z-index','5');
		 }
		);
		
		$('area').click(function(e) {
			var ind = $(this).index();
			$('.b-map-peac > div').css({'display':'none'});
			$('.b-map-peac > div').eq(ind).css({'display':'block'}).addClass('active');
			
			TweenLite.to($('.b-map-peac > div:eq('+ind+') img'), 1, {scale:1.8,
				onComplete:function(){
					$('.b-markers > div:eq('+ind+') .b-marker').fadeIn();
				}
			});
			$(this).addClass('active');
			$('.b-map-peac').addClass('active');
			return false;
		});
		$('.b-map-peac > div').click(function(e) {
			if($(this).parent().hasClass('active')){
				$('.b-marker').fadeOut();
				TweenLite.to($(this).find('img'), 1, {scale:1,onComplete:function(){$('.b-map-peac').removeClass('active')}});
				$(this).removeClass('active')
				$('.b-text-modal').fadeOut('fast',function(){$('.b-text-modal').remove()});
				var x = $(this).index();
			    $('.b-point-container > div').eq(x).find('.b-point').css({'background':'#fff'});
			}
		});
		$('body').on('click','.b-map-peac.active',function(e) {
			$('.b-marker').fadeOut();
			TweenLite.to($('.b-map-peac .active').find('img'), 1, {scale:1,onComplete:function(){$('.b-map-peac').removeClass('active')}});
			$('.b-text-modal').fadeOut('fast',function(){$('.b-text-modal').remove()});
			
		});
		
		var apis = [];
		
		
		$('.b-marker').click(function(e) {
			
			if (apis.length) {
				$.each(
					apis,
					function(i) {
						this.destroy();
					}
				)
				apis = [];
			}

			$('.b-text-modal').remove();
			if ($(this).find('.b-hide-data').length != 0){
				var html = $(this).find('.b-hide-data').html();
				$(this).parent().append('<div class="b-text-modal"></div>')
				$(this).parent().find('.b-text-modal').html(html);
				$(this).parent().find('.b-text-modal').fadeIn('fast');
				$('.b-scroll').each(
						function()
						{
							apis.push($(this).jScrollPane({showArrows: true}).data().jsp);
						}
					)
			}
		});
		$('body').on('click','.b-close',function(){
			var then = $(this)
			then.parent().fadeOut('fast',function(){then.parent().remove();});
			return false;
		});
		
		//b-map-peac
		$('.b-marker-wraper').each(function(index, element) {
			$('.b-point-container > div').eq(index).append('<div class="b-scale-points"></div>');
			var then = $('.b-point-container > div').eq(index).find('.b-scale-points');
			
			$(this).find('.b-marker').each(function(index, element) {
				var html_var = $(this).attr('style');
				then.append('<div class="b-point" style="'+html_var+'"></div>');
			});
		});
		
		
	});
  </script>
  <style>
  	/* Base css*/
	body{background:#f0f0f0;}
	/* Map css */
	.b-map-contaianr{
		width:930px;
		height:541px;
		position:relative;		
	}
	.b-map-contaianr > .b-title{
		font:24px 'NeoBlod';
		color:#4275b3;
		text-transform:uppercase;
		text-align:center;
		z-index: 8;
position: absolute;
left:0;
top:0;
right:0;
	}
	.b-map-contaianr .b-lable{
		position:absolute;
		top:0;
		left:0;
	}
  	area{
		outline:none;
	}
	.b-map-contaianr{
		position:relative;
	}
	.b-map{
		overflow:hidden;
		width:930px;
		height:541px;
		position:relative;
		z-index:3;
	}
	.b-map img{
		position:relative;
		opacity:0;
		filter: alpha(opacity=0);
	}
	.b-map-peac{
		background-image:url(images/map1.png);
		background-position:0 0;
		width:930px;
		height:541px;
		position:absolute;
		z-index:0;
		top:0;
		left:0;
	}
	.b-map-peac img{
		max-width:100%;
		height:auto;
	}
	.b-map-peac.active{
		background-image:url(images/map_hover.png);
		z-index:4;
	}
	.b-map-peac > div{
		position:absolute;
		display:none;
	}
	.b-map1{
		left: 0px;
		top: 85px;
	}
	.b-map2{
		left: 34px;
		top: 274px;
	}
	.b-map3{
		left: 0px;
		top: 384px;
	}
	.b-map4{
		left: 89px;
		top: 308px;
	}
	.b-map5{
		left: 204px;
		top: 212px;
	}
	
	.b-map6{
		left: 303px;
		top: 110px;
	}
	.b-map7{
		left: 521px;
		top: 0px;
	}
	
	.b-markers{
		position:absolute;
		top:0;
		left:0;
	}
	.b-markers > div{
		position:absolute;
	}
	.b-markers > div img{
		visibility:hidden;
	}
	.b-marker{
		position:absolute;
		width:14px;
		height:20px;
		background:url(images/marker.png);
		cursor:pointer;
		z-index:5;
		font:14px 'Myriad Pro';
		display:none;
	}
	.b-marker:hover span{
		display:block;
	}
	.b-marker span{
		position: absolute;
		left: 0;
		top: -27px;
		color: #4275b3;
		background: #fff;
		padding: 3px 7px;
		white-space:nowrap;
		display:none;
	}
	.b-marker:hover span{
		color:#fff;
		background:#4275b3;
	}
	.b-hide-data{
		display:none;
	}
	.b-text-modal{
		position: absolute;
		z-index: 5;
		background: #fff;
		border-radius: 50%;
		width:371px;
		height:371px;
		font:14px 'NeoMedium';
		color:#4275b3;
		display:none; 
		text-align:left;

		box-sizing:border-box;
		-moz-box-sizing:border-box;
		-ms-box-sizing:border-box;
		-o-box-sizing:border-box;
		-webkit-box-sizing:border-box;
		padding: 54px 68px;
		padding-left: 75px;
	}
	.b-markers .b-map1 .b-text-modal{
		right: -365px;
		top: 28px;
	}
	.b-markers .b-map2 .b-text-modal{
		right: -399px;
		top: -129px;
	}
	.b-markers .b-map3 .b-text-modal{
		right: -390px;
		top: -210px;
	}
	.b-markers .b-map4 .b-text-modal{
		right: -404px;
		top: -156px;
	}
	.b-markers .b-map5 .b-text-modal{
		right: -365px;
		top: -107px;
	}
	.b-markers .b-map6 .b-text-modal{
		right: -301px;
		top: -27px;
	}
	.b-markers .b-map7 .b-text-modal{
		top: 0;
		left: -367px;
	}
	.b-text-modal p{
		text-transform:uppercase;
		margin: 0;
		line-height: 19px;
		margin-bottom: 9px;		
	}
	.b-qudrat{
		display:block;
		font:15px 'NeoLight';
		text-transform:none;
	}
	.b-close{
		position:absolute;
		right: 4px;
		top: 44px;
		background:url(images/close.png);
		width:52px;
		height:52px;
	}
	.b-text-modal .b-title{
		color:#bd474f;
		font:24px 'NeoMedium';
		margin-bottom: 5px;
	}
	.b-scroll{
		height: 217px;
		overflow: auto;
		padding-right: 10px;
		width: 228px;
	}
	
	.b-marker-wraper{
		position: absolute;
		top: 0;
		left: 0;
		right:0;
		bottom:0;
	}
	
	
	/* POINTS */
	.b-point-container{
		width: 930px;
		height: 541px;
		position: absolute;
		z-index: 0;
		top: 0;
		left: 0;
	}
	.b-point-container > div {
		position: absolute;
	}
	.b-point-container .b-map-point1 {
	left: 0px;
	top: 85px;
	}
	.b-point-container .b-map-point2 {
	left: 34px;
	top: 274px;
	}
	.b-point-container .b-map-point3 {
	left: 0px;
	top: 384px;
	}
	.b-point-container .b-map-point4 {
	left: 89px;
	top: 308px;
	}
	.b-point-container .b-map-point5 {
	left: 204px;
	top: 212px;
	}
	.b-point-container .b-map-point6 {
	left: 303px;
	top: 110px;
	}
	.b-point-container .b-map-point7 {
	left: 521px;
	top: 0px;
	}
	
	.b-scale-points{
	position: absolute;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	-webkit-transform: scale(0.6);
	-mox-transform: scale(0.6);
	-ms-transform: scale(0.6);
	-o-transform: scale(0.6);
	transform: scale(0.6);
	}
	.b-point-container .b-map-point1 .b-scale-points{
		margin-left: 11px;
		margin-top: 3px;
	}
	.b-point-container .b-map-point2 .b-scale-points{
	margin-left: 28px;
	margin-top: -9px;
	}
	.b-point-container .b-map-point3 .b-scale-points{
	margin-left: 6px;
margin-top: -9px;
	}
	.b-point-container .b-map-point4 .b-scale-points{
	margin-left: -1px;
margin-top: -9px;
	}
	.b-point-container .b-map-point5 .b-scale-points{
	margin-left: 15px;
margin-top: -1px;
	}
	.b-point-container .b-map-point6 .b-scale-points{
	margin-left: 21px;
margin-top: -6px;
	}
	.b-point-container .b-map-point7 .b-scale-points{
	margin-left: 0px;
margin-top: -9px;
	}
	
	.b-point-container img{
	 visibility:hidden;
	}
	.b-point-container .b-scale-points{
	
	}
	
	.b-scale-points .b-point{
		width:8px;
		height:8px;
		background:#4275B3;
		border-radius:50%;
		position:absolute;
	}
	
	/*
 * CSS Styles that are needed by jScrollPane for it to operate correctly.
 *
 * Include this stylesheet in your site or copy and paste the styles below into your stylesheet - jScrollPane
 * may not operate correctly without them.
 */

.jspContainer
{
	overflow: hidden;
	position: relative;
}

.jspPane
{
	position: absolute;
}

.jspVerticalBar
{
	position: absolute;
	top: 0;
	right: 0;
	width: 8px;
	height: 100%;
}

.jspHorizontalBar
{
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 16px;
	background: red;
}

.jspCap
{
	display: none;
}

.jspHorizontalBar .jspCap
{
	float: left;
}

.jspTrack
{
	background: none;
	position: relative;
}

.jspDrag
{
	background: #4275B3;
	position: relative;
	top: 0;
	left: 0;
	cursor: pointer;
	border-radius:350px;
}

.jspHorizontalBar .jspTrack,
.jspHorizontalBar .jspDrag
{
	float: left;
	height: 100%;
}

.jspArrow
{
	
	text-indent: -20000px;
	display: block;
	cursor: pointer;
	padding: 0;
	margin: 0;
}
.jspArrowUp{
background:url(images/arrows.png);
}
.jspArrowDown{
background:url(images/arrows.png) 0 -5px;
}


.jspArrow.jspDisabled
{
	cursor: default;
}

.jspVerticalBar .jspArrow
{
	height: 8px;
}

.jspHorizontalBar .jspArrow
{
	width: 16px;
	float: left;
	height: 100%;
}

.jspVerticalBar .jspArrow:focus
{
	outline: none;
}

.jspCorner
{
	background: #eeeef4;
	float: left;
	height: 100%;
}

	
		
  </style>

	<!-- title -->
	<title>Инжиниринговый кластер инфраструктурных решений | РосПромИнжиниринг</title>
</head>
<body>

	<!-- header
	============================================= -->
			
		<div id="header">
			<div id="logo"></div>
			<div id="menu-wrapper">
				<ul id="menu">
					<li><a href="<?php echo base_url(); ?>">Главная</a></li>
					<li><a href="<?php echo base_url(); ?>projects">Проектирование</a></li>
					<li><a href="<?php echo base_url(); ?>equipment">Оборудование</a></li>
					<li><a href="<?php echo base_url(); ?>montage/montage/base">Монтаж</a></li>
					<li><a href="<?php echo base_url(); ?>service/service/base">Сервис</a></li>
					<li><a href="<?php echo base_url(); ?>technologies/technologies/base">Технологии</a></li>
					<li><a href="<?php echo base_url(); ?>production">Производство</a></li>
					<li><a href="<?php echo base_url(); ?>contacts">Контакты</a></li>
				</ul>
			</div>
			<h1><span>Инжиниринговый</span><br><span>кластер</span><br><span>инфраструктурных</span><br><span>решений</span></h1>
		</div>
