$(window).load(function() {
	show();
});
$(document).ready(function(e) {
	
	//changeLogo();
	//hideServices();
	//setTimeout(function(){show()},2000);
	
	//NProgress.done();
});
ssm.addStates([
{
    id: 'mobile',
    maxWidth: 480,
    onEnter: function(){
        console.log('enter mobile');
    }
},
{
    id: 'desktop',
    minWidth: 480,
    onEnter: function(){
        console.log('enter desktop');
        // initialize skrollr
        var s=skrollr.init();
    }
}
]);

ssm.ready();



//NProgress.set(0.6); 
//NProgress.start();



// click toogle function

(function($) {
    $.fn.clickToggle = function(func1, func2) {
        var funcs = [func1, func2];
        this.data('toggleclicked', 0);
        this.click(function() {
            var data = $(this).data();
            var tc = data.toggleclicked;
            $.proxy(funcs[tc], this)();
            data.toggleclicked = (tc + 1) % 2;
        });
        return this;
    };
}(jQuery));

// loading effect

function show() {
    setTimeout(
    	function(){
    		$('#loading').fadeOut(200)
    	},500);
  };


function changeLogo() {
	if($('html,body').scrollTop() >= 100){
		$('.logo img').css('top','0');
	}
	else{
		$('.logo img').css('top','-43px');
	}
};






/*$('.apply-button').click(function(){
	alert ('ddd');
	$('#posts').fadeOut();
	setTimeout(function(){$('.apply-form').fadeIn();},300);
})
$('.m-close-button').click(function(){
	$('.apply-form').fadeOut();
	setTimeout(function(){$('#posts').fadeIn();},300);
})
*/

// button down function

$('.bannerSlider .button_down_container').click(function(){
	var targetOffset = 650;
		$('html,body')
		.animate({scrollTop: targetOffset}, 1000);
});
$('.aboutus .button_down_container').click(function(){
	var targetOffset = 1300;
		$('html,body')
		.animate({scrollTop: targetOffset}, 1000);
});
$('.whatWeOffer .button_down_container').click(function(){
	var targetOffset = 2000;
		$('html,body')
		.animate({scrollTop: targetOffset}, 1000);
});
$('.primaryServices .button_down_container.d2').click(function(){
	var targetOffset = 3045;
		$('html,body')
		.animate({scrollTop: targetOffset}, 1300);
});

$(document).ready(function(){
  $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset - 54}, 1000);
       return false;
      }
    }
  });
});

function openMenu(){
	$('.navigation').slideToggle('fast');
}
	$('.logo a').hover(function() {
	$(this).animate({width:260},50);
},
function() {
    $(this).animate({width:60},50);
});

$('.req-quote').click(function(){
	$('#request').toggleClass('animate');
	$('.overlay').fadeToggle();
	//$('#request').animate({opacity:1},0);
	//$('#request').animate({height:100+'%'},300);
	$('.page').animate({marginTop:100+'%'},300);
	$('.page').css('opacity',0);
})
$('#request .cancel').click(function(){
	$('#request').toggleClass('animate');
	$('.overlay').fadeToggle();
	//$('.page').animate({opacity:1},100);
	//$('#request').animate({opacity:0,height:0},400);
	//$('.page').animate({marginTop:0},300);
});
function contactForm(){
	$('#contact').toggleClass('animate');
	$('.overlay').fadeToggle();

}
$('#contact .cancel').click(function(){
	$('#contact').toggleClass('animate');
	$('.overlay').fadeToggle();
});
/*
$('#request .container21').slimscroll({
	  height: '100%'
});
*/
/* Career apply form */
$('.apply-here').click(function(){
		$('#php-criteria').fadeOut();	
});

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement

(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore

(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54884858-1', 'auto');
  ga('send', 'pageview');
/*
// Hotjar Insights

	(function(w,d) {
		w.hj = w.hj || function() { (w.hj.q=w.hj.q||[]).push(arguments); };
		w._hjSettings = { hjid: 1615 };
		var s = d.createElement('script');
		s.src = '//insights.hotjar.com/static/client/insights.js';
		d.getElementsByTagName('head')[0].appendChild(s);
	}(window,document));
*/
