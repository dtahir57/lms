$(document).ready(function(){
	$("#pricing-select").change(function(){
		$(this).find("option:selected").each(function(){
			var optionValue = $(this).attr("value");
			if(optionValue){
				$(".pricing-values-mobile").not("." + optionValue).hide();
				$("." + optionValue).show();
			} else{
				$(".pricing-values-mobile").hide();
			}
		});
	}).change();

	// Desktop Version
	var elements = document.getElementsByClassName("package-values");
	var changeActivePrice = function() {
		$(this).parent().siblings().children().removeClass("active-price");
		$(this).addClass("active-price").siblings().removeClass("active-price");
		$(this).siblings(':first').addClass("active-price");
	};
	for (var i = 1;i < elements.length; i++) {
		if (i % 5 != 0) {
			elements[i].addEventListener('click', changeActivePrice, false);
		}
	}

	// Mobile Version
	var elements_mobile = document.getElementsByClassName("price-mobile");
	var changeActivePriceMobile = function() {
		$(this).parent().siblings().children().removeClass("active-price-mobile");
		$(this).addClass("active-price-mobile").siblings().removeClass("active-price-mobile");
	};
	for (var i = 0;i < elements_mobile.length; i++) {
		elements_mobile[i].addEventListener('click', changeActivePriceMobile, false);
	}

	// FAQ
	$('.collapse').on('shown.bs.collapse', function(){
		$(this).siblings().find('h5').children().children().toggleClass('fa-chevron-right fa-chevron-down');
	}).on('hidden.bs.collapse', function(){
		$(this).siblings().find('h5').children().children().toggleClass('fa-chevron-right fa-chevron-down')
	});

	// Profile
	$(function () {
		$(".progress").each(function () {
			var value = $(this).attr('data-value');
			var left = $(this).find('.progress-left .progress-bar');
			var right = $(this).find('.progress-right .progress-bar');
			if (value > 0) {
				if (value <= 50) {
					right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
				} else {
					right.css('transform', 'rotate(180deg)')
					left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
				}
			}
		})
		function percentageToDegrees(percentage) {
			return percentage / 100 * 360
		}
	});
});