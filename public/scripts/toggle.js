

$(document).ready(function() {
		
	// Toggle menu

	$('.toggle').click(function() {
		$('.header nav').slideToggle('fast');
		$(this).hide();
		$('.times').show();
	});

	$('.times').click(function() {
		$('.header nav').slideToggle('fast');
		$(this).hide();
		$('.toggle').show();
	});

	// Hover effects on the nav links

	$('.header nav ul li a').hover(function() {
		$(this).addClass('act');
	});
	$('.header nav ul li a').mouseout(function() {
		$(this).removeClass('act');
	});

	// Positioning the h3 after the img
	let width = $(window).width();

	if(width >= 1024) {
		$('.content .img-description h3').appendTo($('.content .img-description'));
	}

	// Hover effects on the Blog nav links

	$('.categories ul li a').hover(function() {
		$(this).addClass('act');
	});
	$('.categories ul li a').mouseout(function() {
		$(this).removeClass('act');
	});

	// Select effect on the Blog nav links

	 $(".categories ul li a")
        .click(function(e) {
            var link = $(this);

            var item = link.parent(".categories ul li");
            
            if (item.hasClass("activ")) {
                item.removeClass("activ").children("a").removeClass("activ");
            } else {
                item.addClass("activ").children("a").addClass("activ");
            }

            if (item.children(".categories ul").length > 0) {
                var href = link.attr("href");
                link.attr("href", "#");
                setTimeout(function () { 
                    link.attr("href", href);
                }, 300);
                e.preventDefault();
            }
        })
        .each(function() {
            var link = $(this);
            if (link.get(0).href === location.href) {
                link.addClass("activ").parents(".categories ul li").addClass("activ");
                return false;
            }
        });

});
