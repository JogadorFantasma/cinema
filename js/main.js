(function ($) {
 "use strict";

/*----------------------------
 jQuery MeanMenu
------------------------------ */
  jQuery('nav#dropdown').meanmenu();  

/*----------------------------
 wow js active
------------------------------ */
 new WOW().init();
 
/*----------------------------
 Slider active
------------------------------ */  
  $(".slider-content").owlCarousel({
      autoPlay: true, 
	  slideSpeed:2000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
 /*----------------------------
  Promos active
 ------------------------------ */  
   $(".total-promos-area").owlCarousel({
       autoPlay: true, 
 	  slideSpeed:2000,
 	  pagination:false,
 	  navigation:true,	  
       items : 3,
 	  /* transitionStyle : "fade", */    /* [This code for animation ] */
 	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
       itemsDesktop : [1199,3],
 	  itemsDesktopSmall : [980,2],
 	  itemsTablet: [720,1],
 	  itemsMobile : [479,1],
   });   
/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    }); 	   
 /*------------------------------------
 jquery Serch Box activation code 
 --------------------------------------*/
	 $(".search-area a").on('click', function(){
	    $(".search-box-area").slideToggle('slow');
	});
/* ----------------------------
 mixitup active
 ------------------------------*/  
  $('#Container').mixItUp();


/*----------------------------
Product Items added
------------------------------ */
	$('.spinner-normal .btn:first-of-type').on('click', function() {
	  $('.spinner-normal input').val( parseInt($('.spinner-normal input').val(), 10) + 1);
<<<<<<< HEAD
    $('.spinner-normal2 input').val( parseInt($('.spinner-normal2 input').val(), 10) + 1);
	});
	$('.spinner-normal .btn:last-of-type').on('click', function() {
	  $('.spinner-normal input').val( parseInt($('.spinner-normal input').val(), 10) - 1);
    $('.spinner-normal2 input').val( parseInt($('.spinner-normal2 input').val(), 10) - 1);
=======
	});
	$('.spinner-normal .btn:last-of-type').on('click', function() {
	  $('.spinner-normal input').val( parseInt($('.spinner-normal input').val(), 10) - 1);
>>>>>>> 4b38f4c1dde727b5fdf9fa8495401051167d5e59
  }); 
  
  $('.spinner-meia .btn:first-of-type').on('click', function() {
	  $('.spinner-meia input').val( parseInt($('.spinner-meia input').val(), 10) + 1);
<<<<<<< HEAD
    $('.spinner-meia2 input').val( parseInt($('.spinner-meia2 input').val(), 10) + 1);
	});
	$('.spinner-meia .btn:last-of-type').on('click', function() {
	  $('.spinner-meia input').val( parseInt($('.spinner-meia input').val(), 10) - 1);
    $('.spinner-meia2 input').val( parseInt($('.spinner-meia2 input').val(), 10) - 1);
=======
	});
	$('.spinner-meia .btn:last-of-type').on('click', function() {
	  $('.spinner-meia input').val( parseInt($('.spinner-meia input').val(), 10) - 1);
>>>>>>> 4b38f4c1dde727b5fdf9fa8495401051167d5e59
	}); 

/*-----------------------------------
Bootstrap Step
-----------------------------------*/
$(window).on('load', function() {
  $('.done').on('click', function () {
    var this_li_ind = $(this).parent().parent("li").index();
    if($('.payment-wizard li').hasClass("jump-here")){
      $(this).parent().parent("li").removeClass("active").addClass("completed");
      $(this).parent(".wizard-content").slideUp();
      $('.payment-wizard li.jump-here').removeClass("jump-here");
    }else{
      $(this).parent().parent("li").removeClass("active").addClass("completed");
      $(this).parent(".wizard-content").slideUp();
      $(this).parent().parent("li").next("li:not('.completed')").addClass('active').children('.wizard-content').slideDown();
    }
  });
	$(".click-seat").on('click', function () {
		$(this).toggleClass('click-seat-change');
		$(this).find('input[type="checkbox"]').attr('checked','checked');
	});
	
  $('.payment-wizard li .wizard-heading').on('click', function () {
    if($(this).parent().hasClass('completed')){
      var this_li_ind = $(this).parent("li").index();   
      var li_ind = $('.payment-wizard li.active').index();
      if(this_li_ind < li_ind){
        $('.payment-wizard li.active').addClass("jump-here");
      }
      $(this).parent().addClass('active').removeClass('completed');
      $(this).siblings('.wizard-content').slideDown();
    }
  });
})

})(jQuery); 