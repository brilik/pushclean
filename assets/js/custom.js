$(window).on('load', function () {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('body').addClass('ios');
	} else{
		$('body').addClass('web');
	};
	
	if ($('.js-img').length) {
		setTimeout(function () {
			$('.js-img').each(function () {
				var imgSrc = $(this).attr('data-src');
				$(this).attr('src', imgSrc);
			});
			$('.js-img').each(function () {
				var imgSrc = $(this).attr('data-srcset');
				$(this).attr('srcset', imgSrc);
			});
		}, 300);
	};
	setTimeout(function () {
		$('body').removeClass('loaded');
		for_wordpress();
	}, 400);
	
});

/* viewport width */
function viewport(){
	var e = window, 
		a = 'inner';
	if ( !( 'innerWidth' in window ) )
	{
		a = 'client';
		e = document.documentElement || document.body;
	}
	return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
};
/* viewport width */


$(function(){


	
	/* placeholder*/	   
	$('input, textarea').each(function(){
 		var placeholder = $(this).attr('placeholder');
 		$(this).focus(function(){ $(this).attr('placeholder', '');});
 		$(this).focusout(function(){			 
 			$(this).attr('placeholder', placeholder);  			
 		});
 	});
	/* placeholder*/

	/* lang toggle*/
	$('.header-lang__title').click(function () {
		$('.js--list-lang').slideToggle('fast');
		$(this).toggleClass('active');
	});

	$('.list-lang__link').click(function () {
		$('.header-lang__title').text($(this).text()).removeClass('active');
		$('.js--list-lang').slideToggle('fast');
	});

	jQuery(document).on('click', function (e) {
		var el = $('.header-lang');
		if (jQuery(e.target).closest(el).length) return;
		$(el).find('.js--list-lang').slideUp();
		$('.header-lang__title').removeClass('active');
	});
	/* lang toggle*/

	/*input label animation*/
	$('.form-control').focus(function () {
		$(this).parents('.box-field').addClass('focused-field').removeClass('filled-field');
	});
	$('input, textarea').each(function () {
		var valField = $(this).val().length;
		if (valField >= 1) {
			$(this).parents('.box-field').addClass('focused-field');
		} else {
			$(this).parents('.box-field').removeClass('focused-field');
		};
	});
	$('.form-control').focusout(function () {
		var valField = $(this).val().length;
		if (valField >= 1) {
			$(this).parents('.box-field').addClass('focused-field').addClass('filled-field');
			if ($(this).val() == '+7 (___) ___-__-__') {
				$(this).parents('.box-field').removeClass('focused-field');
			}
		} else {
			$(this).parents('.box-field').removeClass('focused-field');

		};
	});
	/*input label animation*/
	
	/* phone mask */

	$("input[type='tel']").mask("+7 (999) 999-99-99");

	/* phone masks */

	/*counter product*/
	var productVal = 19.99;
	var totalVal = productVal;

    $('.counter__link_prev').click(function() {
        var $input = $(this).parents('.box-counter').find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
		$input.change();
		if(totalVal >= productVal + productVal) {
			totalVal = totalVal - productVal;
			totalVal = Math.floor(totalVal * 100) / 100;
			$('.form-info__price').text('$' + totalVal);
			var totalValSum = (totalVal + "").split(".");
			$('.form-info__price').html('$' + totalValSum[0] + '.' + '<sup>' + totalValSum[1] + '</sup>');
		} else {
			totalVal = 19.99;
			$('.form-info__price').html('$' + 19 + '.' + '<sup>' + 99 + '</sup>');;
		}
		

        return false;
    });
    $('.counter__link_next').click(function() {
        var $input = $(this).parents('.box-counter').find('input');
        var count = parseInt($input.val()) + 1;
        count = count > ($input.attr("maxlength")) ? ($input.attr("maxlength")) : count;
        $input.val(count);
		$input.change();
		totalVal = totalVal + productVal;
		totalVal = Math.floor(totalVal * 100) / 100;
		var totalValSum = (totalVal + "").split(".");
		$('.form-info__price').html('$' + totalValSum[0] + '.' + '<sup>' + totalValSum[1] + '</sup>');
        return false;
    });
	/*counter product*/  

	/*form validation*/
	if ($('.js--contact-form3').length) {
		$('.js--contact-form3').each(function () {
			$(this).validate({
				rules: {
					address: {
						required: true,
						minlength: 1
					},
					address2: {
						required: true,
						minlength: 1
					},
					city: {
						required: true,
						minlength: 1
					},
					country: {
						required: true
					},
					state: {
						required: true
					},
					zip: {
						required: true,
						minlength: 1
					},
					card_num: {
						required: true,
						minlength: 1
					},
					expiration: {
						required: true
					},
					expiration2: {
						required: true
					},
					card_name: {
						required: true,
						minlength: 1
					},
					card_cvv: {
						required: true,
						minlength: 1
					}
				},
				messages: {
					address: {
						required: "",
						minlength: ""
					},
					address2: {
						required: "",
						minlength: ""
					},
					city: {
						required: "",
						minlength: ""
					},
					country: {
						required: ""
					},
					state: {
						required: ""
					},
					zip: {
						required: "",
						minlength: ""
					},
					card_num: {
						required: "",
						minlength: ""
					},
					expiration: {
						required: ""
					},
					expiration2: {
						required: ""
					},
					card_name: {
						required: "",
						minlength: ""
					},
					card_cvv: {
						required: "",
						minlength: ""
					}
				},

				submitHandler: function (form) {
				}
			});
		})
	};
	/*form validation*/

	
	if($('.styled').length) {
		$('.styled').styler({
			onSelectOpened: function() {
				
			}
		});
	};

	$(".jq-selectbox__dropdown ul").mCustomScrollbar({
		axis:"y",
		theme:"dark-thin",
		autoExpandScrollbar:true
	});

	
});

var handler = function(){
	
	var height_footer = $('footer').height();	
	var height_header = $('header').height();		
	
	
	var viewport_wid = viewport().width;
	var viewport_height = viewport().height;
	
	if (viewport_wid <= 991) {
		$('.safe-btn-content .btn').text('buy');
	}
	
}

$(window).bind('load', handler);
$(window).bind('resize', handler);

function for_wordpress() {
	language_polylang()
	wpcf7_handler()
}

function language_polylang() {
	var langList = $('.js--list-lang');
	var curLang = langList.find('.current-lang');
	// curLang.addClass('active');
	langList.find('li').addClass('list-lang__item');
	langList.find('a').addClass('list-lang__link');
    $('.header-lang__title').text(curLang.text())
}

function wpcf7_handler(){
    $(".wpcf7").on('wpcf7:mailsent', function(event){

    	// remove focus
        $(this).find('.box-field').each(function () {
			$(this).removeClass('focused-field')
			$(this).removeClass('filled-field')
        })

        // reset border
        $(this).find('input').each(function (i,e) {
            $(this).css('border','1px solid #D3D3D3')
		})

		// redirect to order
        var hasOrangeBodyClass = $('body').hasClass('page-template-template-landing-orange')
        var hasGreenBodyClass = $('body').hasClass('page-template-template-landing-green')
        var hasBlueBodyClass = $('body').hasClass('page-template-template-landing-blue')

		if( $('#js-lang-page').text() === 'Eng' ) {
			if ( hasOrangeBodyClass ) document.location.href = '/order-orange/'
			else if ( hasGreenBodyClass ) document.location.href = '/order-green/'
			else if ( hasBlueBodyClass ) document.location.href = '/order-blue/'
		} else if( $('#js-lang-page').text() === 'Рус' ) {
            if ( hasOrangeBodyClass ) document.location.href = '/ru/zakaz-oranjeviy/'
            else if ( hasGreenBodyClass ) document.location.href = '/ru/zakaz-zeleniy/'
            else if ( hasBlueBodyClass ) document.location.href = '/ru/zakaz-goluboy/'
		}

    })

    $(".wpcf7").on('wpcf7:invalid', function(event){

        form_show_error($(this))
    })
}

function form_show_error(form) {


    form.find('input').each(function (i,e) {

    	if( $(this).next().length ){
            $(this).css('border','1px solid red')
        } else {
            $(this).css('border','1px solid #D3D3D3')
        }

    })

}