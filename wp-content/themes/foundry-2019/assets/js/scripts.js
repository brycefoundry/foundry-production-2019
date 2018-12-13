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

			
		}

		components = function(){
			mobilemenu();
		}

		init();

		


		



		
		
	});
	
})(jQuery, this);
