(function($){'use strict';$(window).on('load',function(){$('#preloader').fadeOut('slow',function(){$(this).hide();});});$('.feedback-carousel').owlCarousel({items:1,autoplay:true,autoplayTimeout:4000,autoplaySpeed:1000,loop:true,dots:true,dotsSpeed:1000,dragEndSpeed:1000});$(".v-review").fitVids();$('.navbar-collapse a').on('click',function(){$(".navbar-collapse").collapse('hide');});$(window).scroll(function(){if($(".navbar").offset().top>50){$(".navbar-fixed-top").addClass("navbar-clone");}else{$(".navbar-fixed-top").removeClass("navbar-clone");}});$('body').scrollspy({target:".navbar",offset:60});$(window).on('scroll',function(){if($(this).scrollTop()>300){$('.scrollToTop').fadeIn();}else{$('.scrollToTop').fadeOut();}});$('.scrollToTop').on('click',function(){$('html, body').animate({scrollTop:0},800);return false;});$(function(){$('.scroll-to a[href*="#"]:not([href="#"])').on('click',function(){if(location.pathname.replace(/^\//,'')===this.pathname.replace(/^\//,'')&&location.hostname===this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+ this.hash.slice(1)+']');if(target.length){$('html, body').animate({scrollTop:target.offset().top},1000);return false;}}});});var submitContact=$('#submit-message'),message=$('#msg');submitContact.on('click',function(e){e.preventDefault();var $this=$(this);$.ajax({type:"POST",url:'php/contact.php',dataType:'json',cache:false,data:$('#contact-form').serialize(),success:function(data){if(data.info!=='error'){$this.parents('form').find('input[type=text],input[type=email],textarea,select').filter(':visible').val('');message.hide().removeClass('success').removeClass('error').addClass('success').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');}else{message.hide().removeClass('success').removeClass('error').addClass('error').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');}}});});})(jQuery);