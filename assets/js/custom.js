$(window).scroll(function(){if($(this).scrollTop()>450){
	$('.page-progress ').addClass('fixed_serv');
	}
else{
	$('.page-progress ').removeClass('fixed_serv');
}

});






$(window).load(function() { 

	var wow = new WOW({
    	offset:100,        
    	mobile:false 
  	});
	wow.init();
})






$(document).ready(function(e) {
	
	var showChar = 456;
var ellipsestext = "...";
var moretext = "Show More";
var lesstext = "Less More";
$('.desc').each(function () {
    var content = $(this).html();
    if (content.length > showChar) {
        var show_content = content.substr(0, showChar);
        var hide_content = content.substr(showChar, content.length - showChar);
        var html = show_content + '<span class="moreelipses">' + ellipsestext + '</span><span class="remaining-content"><span>' + hide_content + '</span>&nbsp;&nbsp;<a href="javascript:void(0)" class="morelink">' + moretext + '</a></span>';
        $(this).html(html);
    }
});

$(".morelink").click(function () {
    if ($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext);
    } else {
        $(this).addClass("less");
        $(this).html(lesstext);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();
    return false;
});
	


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	var body = $('html, body');

    $('.toTop').click(function(e){
        e.preventDefault();
        body.animate({scrollTop:0}, '500', 'swing');

}); 


	
	
	
		        		

	  $('[data-toggle="tooltip"]').tooltip(); 
	  


	
	
	
	
	
	
	
			  $(".frog").hide(0);
            $(".forgp").click(function(){
				$(".login_p").slideToggle(500);
				$(".frog").slideToggle(500);
				});
      
	  
	  
$('.clockpicker').clockpicker()
	.find('input').change(function(){
		console.log(this.value);
	});
var input = $('#event-time').clockpicker({
	align: 'left',
	autoclose: true,
	'default': 'now'
});

var input = $('#event-end-time').clockpicker({
	align: 'left',
	autoclose: true,
	'default': 'now'
});

$('.clockpicker-with-callbacks').clockpicker({
		donetext: 'Done',
		init: function() { 
			console.log("colorpicker initiated");
		},
		beforeShow: function() {
			console.log("before show");
		},
		afterShow: function() {
			console.log("after show");
		},
		beforeHide: function() {
			console.log("before hide");
		},
		afterHide: function() {
			console.log("after hide");
		},
		beforeHourSelect: function() {
			console.log("before hour selected");
		},
		afterHourSelect: function() {
			console.log("after hour selected");
		},
		beforeDone: function() {
			console.log("before done");
		},
		afterDone: function() {
			console.log("after done");
		}
	})
	.find('input').change(function(){
		console.log(this.value);
	});

    });
	
	
	
	
	
	
	
	
	!function(s,i,n){function r(t,o){return this.elm=t,this.settings=s.extend({},a,o),this._defaults=a,this._name="scrollProgress",this.init(),this}
	var c="scrollProgress",
	a={
	//trackHeight:80,
	//trackColor:"#eee",
	//offset:0,
	scrollToSpeed:300};
	r.prototype={sections:[],init:function(){var t=this;return s(this.elm).find("li").each(function(){
		t=t.setSection(s(this).attr("data-progress-scroll-target"),t),
		t.addProgressbar(this),t.addClickEvent(this,t)})
		,t.attachScrollEvents(t),console.log(t.sections),t},
		setSection:function(i,n){var r=i;return e=s(r),o=e.position(),
		t=o.top-n.settings.offset,h=e.outerHeight(),b=t+h,obj={name:r,target:e,top:t,bottom:b,height:h},n.sections.push(obj),n},addProgressbar:function(t){s(t).append(s("<div>",{"class":"section-progress-bar",style:"height:"+this.settings.trackHeight+"px; width:0%; background:"+this.settings.trackColor+";"}))},
		
		addClickEvent:function(t,o){s(t).on("click",function(){var t=s(this).attr("data-progress-scroll-target");return console.log(t),s("body,html").animate({scrollTop:s(t).position().top-o.settings.offset},o.settings.scrollToSpeed),!1})},attachScrollEvents:function(t){return t.checkScollStatus(t),s(i).scroll(function(){t.checkScollStatus(t)}),this},checkScollStatus:function(t){for(var o,e=s(n).scrollTop(),i=0,r=t.sections.length;r>i;i++)o=e>=t.sections[i].top&&e<=t.sections[i].bottom?Math.floor((e-t.sections[i].top)/(t.sections[i].bottom-t.sections[i].top)*120):e<t.sections[i].top?0:120,s('*[data-progress-scroll-target="'+t.sections[i].name+'"]').find(".section-progress-bar").css("width",o+"%")}},s.fn[c]=function(t){return this.each(function(){s.data(this,"plugin_"+c)||s.data(this,"plugin_"+c,new r(this,t))}),this}}(jQuery,window,document);
