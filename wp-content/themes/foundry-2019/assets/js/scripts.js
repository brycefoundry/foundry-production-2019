(function ($, root, undefined) {
	
	$(function () {


		
		
		
		init = function(){
			views();
			components();
			modtext();
			sectionanim();
		
			
		}

		views = function(){
			
			//Cases Detail

			if ($("body").hasClass("single-clients")) {
				singleclients();
			}



			if($('#password-form').length){
				$('.container.locked').addClass('show');

				setTimeout(function(){
				$('.case-section').remove();	
				},1000);

				$('.header').addClass('locked');
				
				
			}else{
				
				
					

			}

			if($('.page-section').length){
				//$.scrollify({
			   //    section : ".page-section",
			   //  });
			}

			if($('div.wrapper.bg-video').length){
				videocover();
			}

			if($('div.wrapper.featured').length){
				featuredvideo();
			}


			if($('video').length){

				var lazyLoadInstance = new LazyLoad({
				    elements_selector: ".lazy"
				    // ... more custom settings?
				});
				
				$(window).scroll(function() {
				    $('video').each(function() {
				        if ($(this).visible(true)) {
				            $(this)[0].play();
				        } else {
				            $(this)[0].pause();
				        }
				    })
				});
			}

		}

		singleclients = function(){
			
		}

		videocover = function(){

		}


		featuredvideo = function(){
			var videotoggle = 0;
			$('button.play-btn').click(function(){


				$('#video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
			

				if(videotoggle==0){
					
					videotoggle = 1;
					$('body').addClass('active-fs').addClass('disable');

					setTimeout(function(){
						$('#video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
					},1000);
				}else if(videotoggle==1){
					videotoggle = 0;
					$('body').removeClass('active-fs').removeClass('disable');
					$('#video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
					
				}
			});

			



		}

		mobilemenu = function(){

			var waypoint = new Waypoint({
			  element: document.getElementById('px-offset-waypoint'),
			  handler: function(direction) {
			   

			   if(direction=='down'){
			   	
			   	$('.header').addClass('minified');
			   	$('#fs-play').addClass('minified');
			   }else if(direction=='up'){
			   	
			   	$('.header').removeClass('minified');
			   	$('#fs-play').removeClass('minified');
			   }
			  },
			  offset: -1 
			})

			var menutoggle = 0;
			$('#menu-btn').click(function(){
				
					
				
				if(menutoggle==0){
					$.scrollify.disable()
					$('body').addClass('menu-active').addClass('disable');
					menutoggle = 1;
					
					
					var duration = .5;
					var outtime = duration;


					var transitiondelay = 0;

					$('.menu ul li').each(function(index){
						
						transitiondelay = (transitiondelay+index)/10;

						

						var applieddelay = duration + transitiondelay;
						
						$(this).find('button,a').addClass('easeinquart');
						$(this).find('button, a').css('transition-delay',applieddelay + 's');


					});


					
					
						
					
					
				}else if(menutoggle==1){
					$.scrollify.enable()
					$('.menu ul li').find('button, a').attr('style','');
					$('body').removeClass('menu-active');
					$('body').removeClass('disable');
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

			$('section').each(function(index){
				var transitiondelay = 0;
				var duration = .5;
				$(this).find('.card').each(function(index){
					transitiondelay = (transitiondelay+index)/10;

					

					var applieddelay = duration + transitiondelay;
					
					
					$(this).css('transition-delay',applieddelay + 's');
				});
			});

			

			
			
			$('section h1').each(function(index){
				
				
				
				var transitiondelay = 0;
				$(this).find('.text-container').each(function(e){
					
					transitiondelay = (transitiondelay+e)/4;
					
					
					$(this).find('.word').css('transition-delay',transitiondelay + 's');


				});

			});

			

			



		}


		sectionanim = function(){

			$('.page-section').each(function(index){
				var section = $(this);
				var inview = new Waypoint({
				  element: $('.page-section')[index],
				  handler: function(direction) {
				   

				   if(direction=='down'){
				   		
						section.addClass('active');
						
						
				   						   
				   
				   }
				  },
				  offset: '50%'
				})


			});

			$('.page-section').each(function(index){
				var section = $(this);
				var inview = new Waypoint({
				  element: $('.page-section')[index],
				  handler: function(direction) {
				   

				  if(direction=='up'){
				   		
						

				   	
				   }
				  },
				 offset: function() {
				     return -this.element.clientHeight
				   }
				})


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
