$(document).ready(function(){
    $.mprofile();
    $.txtprofile();
    $.mNav();
    $.addCreat();
    $.UserProfile();


    $('.menu-mobile').click(function(){
    	$('.tm-menu ul.menu').slideToggle();
    });

    $('.lst-upload ul').slick({
	    dots: false,
	    infinite: true,
	    speed: 300,
	    slidesToShow: 9,
	    slidesToScroll: 9,
	    responsive: [
	      	{
	        	breakpoint: 1199,
	        	settings: {
	          		slidesToShow: 8,
	          		slidesToScroll: 8,
	          		infinite: true
	        	}
	      	},
	      	{
	        	breakpoint: 991,
	        	settings: {
	          		slidesToShow: 7,
	          		slidesToScroll: 7,
	          		infinite: true
	        	}
	      	},
	      	{
	        	breakpoint: 630,
	        	settings: {
	          		slidesToShow: 4,
	          		slidesToScroll: 4,
	          		infinite: true
	        	}
	      	},
	      	{
	        	breakpoint: 420,
	        	settings: {
	          		slidesToShow: 3,
	          		slidesToScroll: 3,
	          		infinite: true
	        	}
	      	}
	    ]
  	});

    $('.lst-block .lst-slick').slick({
	    dots: false,
	    infinite: true,
	    speed: 300,
	    swipe: false,
	    slidesToShow: 5,
	    slidesToScroll: 5,
	    responsive: [
	      	{
	        	breakpoint: 1199,
	        	settings: {
	          		slidesToShow: 4,
	          		slidesToScroll: 4
	        	}
	      	},
	      	{
	        	breakpoint: 991,
	        	settings: {
	          		slidesToShow: 3,
	          		slidesToScroll: 3
	        	}
	      	},
	      	{
	        	breakpoint: 680,
	        	settings: {
	          		slidesToShow: 2,
	          		slidesToScroll: 2
	        	}
	      	},
	      	{
	        	breakpoint: 420,
	        	settings: {
	          		slidesToShow: 1,
	          		slidesToScroll: 1
	        	}
	      	}
	    ]
  	});

  	$('.bt-large').click(function(){
  		$('.lar-content').slideToggle();
  	});

  	$('.bt-user').click(function(){
  		$('.info-content').slideToggle();
  	});

    $( ".tm-popup" ).on( "click", function(){
        $('.tm-addmore').removeClass('active');
        return $('body').css('overflow', 'auto');
    });
    $('.pop-content').click(function(e){
        e.stopPropagation();
    });

  	$('.ev-trigger .fa-list-ul').click(function(){
  		$('.ev-trigger .fa-th-large').removeClass('active');
  		$(this).addClass('active');
  		$('.lst-category').addClass('active');
  	});

	$('.ev-trigger .fa-th-large').click(function(){
		$('.ev-trigger .fa-list-ul').removeClass('active');
  		$(this).addClass('active');
		$('.lst-category').removeClass('active');
	});

    $('.arr-developer h4').click(function () {
        $(this).addClass('active');
        $('.arr-developer h4').removeClass('active');
        $('.arr-developer ul li ul').slideUp('slow');
        if ($(this).next().is(':hidden') == true) {
            $(this).addClass('active');
            $(this).next('.arr-developer ul li ul').slideDown('normal');
        }
        return false;
    });

    if($(window).width() < 991){
    	$('h4.tg-train').click(function(){
    		$('ul.mb-train').slideToggle();
    	});
    }
    if($(window).width() < 765){
    	$('.us-login .bt-log').click(function(){
    		$('.us-login ul').slideToggle();
    	});
    }

    $('#date-porn').datepicker({
    	autoclose: true,
    	todayHighlight: true
    });
});

function progress(percent, $element) {
    var progressBarWidth = percent * $element.width() / 100;
    $element.find('div').animate({ width: progressBarWidth }, 500).html(percent + "% ");
}

(function($) {
    $.txtprofile = function(options) {
        var settings = $.extend({
            txtprofile: '.txt-intro',
            trigger: '.read-more'
        }, options);

        $(settings.trigger).click(function() {
            if (!$(this).hasClass('active')) {
                $(this).addClass('active');
                $(settings.txtprofile).addClass('active');
            } else {
                $(this).removeClass('active');
                $(settings.txtprofile).removeClass('active');
            }
        });
    };
}(jQuery));

(function($) {
    $.mprofile = function(options) {
        var settings = $.extend({
            profile: '.tm-txtProfile',
            trigger: '.bt-event'
        }, options);

        $(settings.trigger).click(function() {
            if (!$(this).hasClass('active')) {
                $(this).addClass('active');
                $(settings.profile).addClass('active');
            } else {
                $(this).removeClass('active');
                $(settings.profile).removeClass('active');
            }
        });
    };
}(jQuery));

(function($) {
    $.mNav = function(options) {
        var settings = $.extend({
            navProfile: 'body',
            trigger: '.bt-nav'
        }, options);

        $(settings.trigger).click(function() {
            if (!$(this).hasClass('active')) {
                $(this).addClass('active');
                $(settings.navProfile).addClass('navactive');
            } else {
                $(this).removeClass('active');
                $(settings.navProfile).removeClass('navactive');
            }
        });
    };
}(jQuery));

(function($) {
    $.addCreat = function(options) {
        var settings = $.extend({
            addCreat: '.tm-addmore',
            trigger: '.bt-addMore'
        }, options);

        $(settings.trigger).click(function() {
            if (!$(this).hasClass('active')) {
                $(settings.addCreat).addClass('active');
                return $('body').css('overflow', 'hidden');
            } else {
                $(settings.addCreat).removeClass('active');
                return $('body').css('overflow', 'auto');
            }
        });
    };
}(jQuery));


(function($) {
    $.UserProfile = function(options) {
        var settings = $.extend({
            addCreat: '.tm-txtProfile',
            trigger: '.bt-views'
        }, options);

        $(settings.trigger).click(function() {
            if (!$(this).hasClass('active')) {
                $(this).addClass('active');
                $(settings.addCreat).addClass('active');
            } else {
                $(this).removeClass('active');
                $(settings.addCreat).removeClass('active');
            }
        });
    };
}(jQuery));

