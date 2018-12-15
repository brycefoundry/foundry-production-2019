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
			$('#menu-btn').click(function(){
				
				$('body').toggleClass('menu-active');
				
			});

			
			var toggle = 0;
			$('li.expandable').click(function(){
					
					if($(this).hasClass('active')){
						$('li.expandable').removeClass('active');
						$(this).removeClass('active');

						
							$('.submenu ul').removeClass('active');
							
						

						
						
							
						
						

					}else{
						$('li.expandable').removeClass('active');
						$(this).addClass('active');

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

			

			
		}

		components = function(){
			mobilemenu();
		}

		init();

		


		



		
		
	});
	
})(jQuery, this);
