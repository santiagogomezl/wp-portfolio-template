// JavaScript Document
$(document).ready(function() {

	var windowState='large';
	var sw=document.body.clientWidth;
	if(sw<481){
		smLayout();	
	}else if(sw>=481 && sw <=768){
		mdLayout();	
	}else{
		lgLayout();	
	}


	$(window).resize(function(){
	var sw=document.body.clientWidth;
	if(sw<481 && windowState!='small'){
		smLayout();	
	}
	if(sw>=481 && sw<=768 && windowState!='medium'){
		mdLayout();	
	}
	if(sw>769 && windowState!='large'){
		lgLayout();	
	}
	});

	function smLayout(){
	gallery_length('small');			
	windowState='small';	
	}
	function mdLayout(){
	gallery_length('medium');
	windowState='medium';
	
	}
	function lgLayout(){
	gallery_length('large');	
	windowState='large';	
	}

	//Gallery ul width
	function gallery_length(wsize){
	if(wsize =='large'){	
		var num_images=$('div#gallery-container li').length;
		var length_ul=num_images*320+(400*9);//9 landscape picture
		$('div#gallery-container ul').css('width',length_ul+'px');
		}
	else if(wsize =='medium'){	
		var num_images=$('div#gallery-container li').length;
		var length_ul=num_images*256+(320*9);
		$('div#gallery-container ul').css('width',length_ul+'px');
		}		
	}

	//Gallery scroll functions
	$('#scroll-right').click(function() {	
     var leftPos = $('div#gallery-container').scrollLeft();
	 if(windowState=='large'){var addedPx=320;}
	 else if (windowState=='medium'){var addedPx=256;}
  	$("div#gallery-container").animate({scrollLeft: leftPos + addedPx}, 500);  
    });
	
	$('#scroll-left').click(function() {
     var leftPos = $('div#gallery-container').scrollLeft();
	 if(windowState=='large'){var addedPx=320;}
	 else if (windowState=='medium'){var addedPx=256;}
  	$("div#gallery-container").animate({scrollLeft: leftPos - addedPx}, 500);  
    });
	
	//Galley arrows opacity
	$('#gallery-scroll img',this).hover(function(){
		$(this).animate({opacity:'0.8'},300);
		},function(){
		$(this).animate({opacity:'0.5'},300);	
		});
				
	//Scrolling
	$('div#menu li',this).click(function() {
	var link_id=$(this).attr('id');
	var div_id=link_id.replace('link-','');
	if(windowState!='small'){
		$('html, body').animate({
        scrollTop: $("div#"+div_id).offset().top-80
		}, 2000);
		}
	else{
		$('html, body').animate({
        scrollTop: $("div#"+div_id).offset().top-120
		}, 2000);
		}	
    });
	
	 //Gallery arrows motion
	$(document.documentElement).keyup(function (event) {
	  if (event.keyCode == 39) {
		var leftPos = $('div#gallery-container').scrollLeft();
		 if(windowState=='large'){var addedPx=320;}
		 else if (windowState=='medium'){var addedPx=256;}
  		$("div#gallery-container").animate({scrollLeft: leftPos + addedPx}, 500);  
		$('#gallery-container li.current')
	  } else if (event.keyCode == 37) {
		 if(windowState=='large'){var addedPx=320;}
		 else if (windowState=='medium'){var addedPx=256;}
		 var leftPos = $('div#gallery-container').scrollLeft();
  		$("div#gallery-container").animate({scrollLeft: leftPos - addedPx}, 500);   
	  }
	});
	
	//Gallery caption desktop
	$('#gallery-container img',this).hover(function(){
		var credits=$(this).attr('alt');
			if(credits!='' && windowState=='large' ){
				$('#pic-credits').append('<p>'+credits+'</p>');	
			}
		},function(){
		$('#pic-credits p').remove();			
		});
		
	//Gallery caption tablet and smartphone	
		$('#gallery-container img',this).click(function() {
			var credits=$(this).attr('alt');
			//tablet
        	if(credits!='' && windowState=='medium'){
				var current_class=$(this).attr('class');
				if(current_class!='active'){
				$(this).addClass('active');
				$('#pic-credits').append('<p>'+credits+'</p>');		
				}
				else{
				$(this).removeClass('active');
				$('#pic-credits p').remove();	
				}
			}
			//smarthphone
			else if(credits!='' && windowState=='small'){
			var current_class=$(this).attr('class');	
			if(current_class!='active'){
				$(this).addClass('active');
				var img_top=$(this).offset().top;
				var img_height=$(this).height();
				$('#pic-credits').offset({top:img_top+img_height-50});
				$('#pic-credits').append('<p>'+credits+'</p>');		
				}
				else{
				$(this).removeClass('active');
				$('#pic-credits p').remove();	
				}	
			}  
        });
		
		
		

    
});