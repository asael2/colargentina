// JavaScript Colargentina.com,  Colombianosenargentina.com developed info@artyficial.net
version = "Alfa RC3.5";
var puntoDeAyuda = 1004;
$ = jQuery;
var topArrow, slide, btn, elemento, Timeslide;
//$(".coloader").show();
//Set external links to _blank
$('a').each(function() {
   var a = new RegExp('/' + window.location.host + '/');
   if(!a.test(this.href)) {
       $(this).click(function(event) {
           event.preventDefault();
           event.stopPropagation();
           window.open(this.href, '_blank');
       });
   }
});

	
function setVersion(){
	$(".message").html(version)
};



var Timeslide = {
	init:function(){	
		$("#searchLayer").slideOut;

		//Iniciar menu por defecto
		Timeslide.showSearchLayer();
		
		$("#calendar-icon").addClass("activeSlide");
		$(".elUniverso").show("slow");
		$("#calendar-icon").on("click", function(event){
			Timeslide.showPeriodLayer(this);
		});	

		$("#lupa-icon").on("click", function(event){
			Timeslide.showSearchLayer(this);
		});
	},
	slideOut : function(slide){
		$(slide).animate(
		{ 
			height: 'hide',
			opacity: .2
		}, 900);
	},
	slideIn : function(slide){
		$(slide).animate(
		{ 
			height: 'show',
			opacity:1 
		}, 1000);
	},
	showSearchLayer : function(btn){
		$(".menuControls li a").removeClass("activeSlide");
		$(btn).addClass("activeSlide");
		Timeslide.slideIn("#searchLayer");
		Timeslide.slideOut("#periodLayer");
	},
	showPeriodLayer : function(btn){
		$(".menuControls li a").removeClass("activeSlide");
		$(btn).addClass("activeSlide");
		Timeslide.slideOut("#searchLayer");
		Timeslide.slideIn("#periodLayer");
	}	
};

/*Colargentina Class*/
var Colargentina = function(nombre){
    this.init = function() {	
		this.nombre = nombre;
		var este = this; 
    };
    this.init();
    this.mitad =  function(){
    	return Math.floor($(document).height() / 2);	
    };
};

Colargentina.prototype.fixedMenu = function(){
	$('#bpAjaxMenu').addClass('ajaxFixed');
};

Colargentina.prototype.onHelPoint = function(){
	$('.back2top').addClass('back2top2');
	$('.back2top').fadeIn('slow');
	
	this.fixedMenu();
};
	
Colargentina.prototype.offHelPoint = function(){
	$('.back2top').fadeOut('slow');
	$('.back2top').removeClass('back2top2');
	$('#bpAjaxMenu').removeClass('ajaxFixed');
};

Colargentina.prototype.toppage = function(scrollPoint){
	this.scrollPoint = scrollPoint;
	$("html, body").animate( {scrollTop:scrollPoint}, 1000,  
		function(){ 
       		console.log ("scroll completed! "); 
    });
};

Colargentina.prototype.checkPosition = function(enPoint, mitad){   
	mitad = this.helpoint;

	//console.log(enPoint, "::::", mitad);

	if (enPoint > mitad)	{
		this.onHelPoint();
	}else{
		this.offHelPoint();
	}
};

Colargentina.prototype.resetSizes = function(){
	$("#activity-stream li").each(function(index, element) {
		//if it's a video
		
	if(!$(this).hasClass("wide-activity")){
	
		if( $(".activity-inner p", this).has("iframe").length ){
			
			$(this).addClass("wide-activity activity-video");
		 
			$(".activity-inner p iframe", this).attr('wmode', 'transparent').wrap('<div class="elVideo" />');

		} else if( $(".bpfb_images", this) ){
			$(".bpfb_images>img", this).addClass("wideImg");
		}
	}	
				
	}); 
	$("#activity-stream>li:first-child").addClass("wide-activity");
	$("#activity-stream>li:nth-child(2)").removeClass("wide-activity");
	$(".coloader").hide();
};
/*Colargentina template EOF*/

//////////////////////////////////////////////

///////////////////////////////////////////////////////ready
$(document).ready(function() {
	$(".coloader").show();
	var enPoint;
	homeLayout = new Colargentina("homelayout");
	homeLayout.helpoint = puntoDeAyuda;
	Timeslide.init();
	

	/*Boton Volver arriba*/
	$("#back2topHome").html("Volver Arriba").on("click", function(event){
	 	event.preventDefault();
		homeLayout.toppage(0);
	});
	
	/*Listener de Scroll*/
	$(window).scroll(function() {
		enPoint = $(window).scrollTop();
		homeLayout.checkPosition(enPoint);
	})

setVersion();	

});///////////////////////////////////////////////////////ready eof
jQuery(window).load(function () {
	$(".coloader").hide("slow", function(){
			homeLayout.resetSizes();
	});
		
})
