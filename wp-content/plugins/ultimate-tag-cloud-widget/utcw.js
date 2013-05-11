/* Wayfarer Tooltip
 * Version 1.0.9
 * Author Abel Mohler
 * URI: http://www.wayfarerweb.com/wtooltip.php
 * Released with the MIT License: http://www.wayfarerweb.com/mit.php
 */
(function(a){a.fn.wTooltip=function(f,r){f=a.extend({content:null,ajax:null,follow:true,auto:true,fadeIn:0,fadeOut:0,appendTip:document.body,degrade:false,offsetY:10,offsetX:1,style:{},className:null,id:null,callBefore:function(t,p,o){},callAfter:function(t,p,o){},clickAction:function(p,o){a(p).hide()},delay:0,timeout:0},f||{});if(!f.style&&typeof f.style!="object"){f.style={};f.style.zIndex="1000"}else{f.style=a.extend({border:"1px solid gray",background:"#edeef0",color:"#000",padding:"10px",zIndex:"1000",textAlign:"left"},f.style||{})}if(typeof r=="function"){f.callAfter=r||f.callAfter}f.style.display="none",f.style.position="absolute";var m,l,q,c,k={},b=true,e=false,n=false,s=document.createElement("div"),g=(typeof document.body.style.maxWidth=="undefined")?true:false,j=(typeof a.talk=="function"&&typeof a.listen=="function")?true:false;if(f.id){s.id=f.id}if(f.className){s.className=f.className}f.degrade=(f.degrade&&g)?true:false;for(var d in f.style){s.style[d]=f.style[d]}function i(o){if(o){if(f.degrade){a(s).html(f.content.replace(/<\/?[^>]+>/gi,""))}else{a(s).html(f.content)}}}if(f.ajax){a.get(f.ajax,function(o){if(o){f.content=o}i(f.content)})}function h(p){function t(u){if(m&&!f.content){m=""}}function o(){if(!e&&f.auto){clearInterval(c);if(f.fadeOut){a(s).fadeOut(f.fadeOut,function(){t(p)})}else{t(p);s.style.display="none"}}if(typeof f.callAfter=="function"){f.callAfter(s,p,f)}if(j){f=a.listen(f)}}if(f.timeout>0){q=setTimeout(function(){o()},f.timeout)}else{o()}}a(s).hover(function(){e=true},function(){e=false;h(k)});if(j){f.key=s;f.plugin="wTooltip";f.channel="wayfarer";a.talk(f)}i(f.content&&!f.ajax);a(s).appendTo(f.appendTip);return this.each(function(){a(this).hover(function(){var p=this;clearTimeout(q);if((this.title||this.titleMemKeep)&&!f.degrade&&!f.content){m=this.title||this.titleMemKeep;if(this.title){this.titleMemKeep=this.title;this.title=""}}if(f.content&&f.degrade){this.title=s.innerHTML}function o(){if(typeof f.callBefore=="function"){f.callBefore(s,p,f)}if(j){f=a.listen(f)}var t;if(f.content){if(!f.degrade){t="block"}}else{if(m&&!f.degrade){a(s).html(unescape(m));t="block";m=""}else{t="none"}}if(f.auto){if(t=="block"&&f.fadeIn){a(s).fadeIn(f.fadeIn)}else{s.style.display=t}}}if(f.delay>0){l=setTimeout(function(){o()},f.delay)}else{o()}},function(){clearTimeout(l);var o=this;b=true;if(!f.follow||n||((f.offsetX<0&&(0-f.offsetX<a(s).outerWidth()))&&(f.offsetY>0&&0-f.offsetY<a(s).outerHeight()))){setTimeout(function(){c=setInterval(function(){h(o)},1)},1)}else{h(this)}});a(this).mousemove(function(v){k=this;if(f.follow||b){var y=a(window).scrollTop(),z=a(window).scrollLeft(),w=v.clientY+y+f.offsetY,t=v.clientX+z+f.offsetX,x=a(f.appendTip).outerHeight(),p=a(f.appendTip).innerHeight(),o=a(window).width()+z-a(s).outerWidth(),u=a(window).height()+y-a(s).outerHeight();w=(x>p)?w-(x-p):w;n=(w>u||t>o)?true:false;if(t-z<=0&&f.offsetX<0){t=z}else{if(t>o){t=o}}if(w-y<=0&&f.offsetY<0){w=y}else{if(w>u){w=u}}s.style.top=w+"px";s.style.left=t+"px";b=false}});if(typeof f.clickAction=="function"){a(this).click(function(){f.clickAction(s,this)})}})}})(jQuery);

var utcwActiveTab = [];
var wTooltipStyle={border:"solid 1px #6295fb",background:"#fff",color:"#000",padding:"5px",zIndex:1E3};

(function($){

	$(document).ready(function() {

		$('input[id$=-color_none], input[id$=-color_random], input[id$=-color_set], input[id$=-color_span]').live('click', function() {

			$("div[id$='set_chooser']").addClass('utcw-hidden');
			$("div[id$='span_chooser']").addClass('utcw-hidden');

			if ($(this).val() == 'set') {
				$("div[id$='set_chooser']").removeClass('utcw-hidden');
			} else if ($(this).val() == 'span') {
				$("div[id$='span_chooser']").removeClass('utcw-hidden');
			}
		});

		$('.utcw-tab-button').live('click', function() {

			var $this = $(this);

			if ( $this.data('id') == "utcw-__i__" ) {
				return false;
			}

			$this.parent().find(".utcw-tab-button").removeClass("utcw-active");
			$this.addClass("utcw-active");

			$this.parent().find("fieldset.utcw").addClass("hidden");
			$("#" + $this.data('tab') ).removeClass("hidden");

			utcwActiveTab[ $this.data('id') ] = $this.data('tab');

			return false;
		});
	});
})(jQuery);

