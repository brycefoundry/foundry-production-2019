(function ($, root, undefined) {
	
	$(function () {
		
		
		init = function(){
			views();
			components();
			modtext();
		
			
		}

		views = function(){

			//Cases Detail

			if ($("body").hasClass("single-clients")) {

			}



			if($('#password-form').length){
				$('.container.locked').addClass('show');

				setTimeout(function(){
				$('.case-section').remove();	
				},1000);

				$('.header').addClass('locked');
				
				
			}else{
				
				$.scrollify({
			       section : ".case-section",
			     });

			}

			if($('div.wrapper.bg-video').length){
				videocover();
			}

		}

		videocover = function(){

		}

		mobilemenu = function(){

			var waypoint = new Waypoint({
			  element: document.getElementById('px-offset-waypoint'),
			  handler: function(direction) {
			   

			   if(direction=='down'){
			   	
			   	$('.header').addClass('minified');
			   }else if(direction=='up'){
			   	
			   	$('.header').removeClass('minified');
			   }
			  },
			  offset: -1 
			})

			var menutoggle = 0;
			$('#menu-btn').click(function(){
				
					
				
				if(menutoggle==0){
					
					$('body').addClass('menu-active');
					menutoggle = 1;
					
					
					var duration = .7;
					var outtime = duration;


					var transitiondelay = 0;

					$('.menu ul li').each(function(index){
						
						transitiondelay = (transitiondelay+index)/10;

						

						var applieddelay = duration + transitiondelay;
						
						$(this).find('button,a').addClass('easeinquart');
						$(this).find('button, a').css('transition-delay',applieddelay + 's');


					});


					
					
						
					
					
				}else if(menutoggle==1){
					
					$('.menu ul li').find('button, a').attr('style','');
					$('body').removeClass('menu-active');
					$('body').removeClass('submenu-active');
					$('#menu .submenu ul.active').removeClass('active');
					$('#menu .menu ul li.expandable.active').removeClass('active');
					menutoggle = 0;
					
				}
				

			});

			

			
			
			$('li.expandable').click(function(){
					
					if($(this).hasClass('active')){
						$('.submenu ul li').attr('style','');
						$('li.expandable').removeClass('active');
						$(this).removeClass('active');

						
						$('.submenu ul').removeClass('active');
						$('body').removeClass('submenu-active');
						

							
						
							
						
						

					}else{
						submenuanim();
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

			$('#menu').hover(function(){
				$('.menu ul li').find('button,a').attr('style','').removeClass('easeinquart');
			}, function(){

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

		modtext = function(){
			$('section h1').each(function(){
			   var text = $(this).html().split(' '),
			           len = text.length,
			           result = []; 

			       for( var i = 0; i < len; i++ ) {
			           result[i] = '<span class="text-container"><span class="word">' + text[i] + '</span></span>';
			       }
			       $(this).html(result.join(' '));
			}); 

			

			
			
			$('section h1').each(function(index){
				
				
				
				var transitiondelay = 0;
				$(this).find('.text-container').each(function(e){
					
					transitiondelay = (transitiondelay+e)/4;
					
					
					$(this).css('transition-delay',transitiondelay + 's');


				});

			});

			

			



		}

		submenuanim = function(){
			var duration = .6;
			var outtime = duration;


			var transitiondelay = 0;

			$('.submenu ul').each(function(index){

				$(this).find('li').each(function(index){
					transitiondelay = (transitiondelay+index)/20;

					

					var applieddelay = duration + transitiondelay;
					
					
					$(this).css('transition-delay',applieddelay + 's');
				});
				
				


			});
		}

		components = function(){
			mobilemenu();
		}

		init();

		


		



		
		
	});
	
})(jQuery, this);
