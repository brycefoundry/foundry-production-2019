(function ($, root, undefined) {
	
	$(function () {
		
		$.scrollify({
	       section : ".case-section",
	     });

		init = function(){
			views();
			components();
		
			
		}

		views = function(){

			//Cases Detail

			if ($("body").hasClass("single-clients")) {

			}

		}

		mobilemenu = function(){

			var menutoggle = 0;
			$('#menu-btn').click(function(){
				
					
				
				if(menutoggle==0){
					
					$('body').addClass('menu-active');
					menutoggle = 1;
					
				}else if(menutoggle==1){
					
					
					$('body').removeClass('menu-active');
					$('body').removeClass('submenu-active');
					$('#menu .submenu ul.active').removeClass('active');
					$('#menu .menu ul li.expandable.active').removeClass('active');
					menutoggle = 0;
					
				}
				console.log(menutoggle);

			});

			
			
			$('li.expandable').click(function(){
					
					if($(this).hasClass('active')){
						$('li.expandable').removeClass('active');
						$(this).removeClass('active');

						
						$('.submenu ul').removeClass('active');
						$('body').removeClass('submenu-active');
						

						
						
							
						
						

					}else{
						$('li.expandable').removeClass('active');
						$(this).addClass('active');
						$('body').addClass('submenu-active');
						if($(this).hasClass('about')){
							$('.submenu ul').removeClass('active');
							$('.about-sub-nav').addClass('active');
						}

						if($(this).hasClass('clients')){
							$('.submenu ul').removeClass('active');
							$('.clients-sub-nav').addClass('active');
							
						}
					}





				
			});

			$('#menu .col-sm-4.top-nav ul li').hover(function(){
				var activeitem = $(this).index();
				$('.video ul li.active').removeClass('active');
				$('.video ul li.active').find('video').trigger('pause');
				$('.video ul li').eq(activeitem).addClass('active');
				$('.video ul li').eq(activeitem).find('video').trigger('play');



			}, function(){
				var activeitem = $(this).index();

				
			});

			

			
		}

		components = function(){
			mobilemenu();
		}

		init();

		


		



		
		
	});
	
})(jQuery, this);
