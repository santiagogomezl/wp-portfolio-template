$(document).ready(function() {
    
    
    
    
		
    var windowState='large';
    var sw=document.body.clientWidth;
    if(sw<569){
            smLayout();	
    }else if(sw>=569 && sw <=768){
            mdLayout();	
    }else{
            lgLayout();	
    }


    $(window).resize(function(){
    var sw=document.body.clientWidth;
    if(sw<=568 && windowState!='small'){
            smLayout();	
    }
    if(sw>=569 && sw<=768 && windowState!='medium'){
            mdLayout();	
    }
    if(sw>769 && windowState!='large'){
            lgLayout();	
    }
    });

    function smLayout(){			
            windowState='small';
            $('.main-menu').removeClass('toggled').css('display','none');
            $('.box-button').css('background-color','#a69d65').css('border','1px solid #fff');;
            $('.box-button span').css('background-color','#fff');
            
             //Tune up wp admin bar
            if($('body').hasClass('admin-bar')){
                $('header').css('top',46);
            }
    }

    function mdLayout(){
            windowState='medium';
            //ulWidth()
            
            ul_width = 10624;
            $('.gallery ul').css('width',ul_width+'px');
            
            gallery_width = 768;
            number_pics = 3;
            $('.main-menu').removeClass('toggled').css('display','table');
            
             //Tune up wp admin bar
            if($('body').hasClass('admin-bar')){
                $('header').css('top',46);
            }
    }

    function lgLayout(){	
            windowState='large';
            //ulWidth()
            
            ul_width = 13280;
            $('.gallery ul').css('width',ul_width+'px');
            
            gallery_width = 1024;
            number_pics = 4;
            $('.main-menu').removeClass('toggled').css('display','table');	

            //Tune up wp admin bar
            if($('body').hasClass('admin-bar')){
                $('header').css('top',32);
            }

    }

    //add active class to firs <li> in gallery
    $('.gallery li:first').addClass('active');

    //ul gallery width
//    function ulWidth(){
//            ul_width = 0;
//            $('.gallery img').each(function(index, element) {
//               ul_width += $(this).width(); 
//            });	
//            $('.gallery ul').css('width',ul_width+'px');
//    }

    //Move gallery right
    function moveRight(){

                    //gallery current pos	
                    var my_pos = $('.gallery').scrollLeft();
                    //current img width i.e li width
                    var my_width = $('li.active').width();
                    //classes swapping and animation
                    if($('.gallery ul li:nth-last-child('+number_pics+')').hasClass('active')){
                            $('li.active').removeClass('active');
                            $('.gallery ul li:first').addClass('active');
                            $('.gallery').animate({scrollLeft:0}, 400);	
                    }else{
                            $('li.active').removeClass('active').next().addClass('active');			
                            $('.gallery').animate({scrollLeft:my_pos + my_width},400);
                    }

    }

    //move gallery left
    function moveLeft(){
                    //gallery current pos	
                    var my_pos = $('.gallery').scrollLeft();
                    //left img width
                    var left_width = $('li.active').prev().width();
                    //classes swapping and animation
                    if($('.gallery ul li:first-child').hasClass('active')){
                            $('li.active').removeClass('active');
                            $('.gallery ul li:nth-last-child('+number_pics+')').addClass('active');
                            $('.gallery').animate({scrollLeft:ul_width - gallery_width}, 400);		
                    }else{
                            $('li.active').removeClass('active').prev().addClass('active');	
                            $('.gallery').animate({scrollLeft:my_pos - left_width}, 400);	
                    }

    }

    //move gallery with keyboard
    $(document.documentElement).keyup(function (event) {

            //to right
            if (event.keyCode == 39) {
                    moveRight();
            }			
            //to left
            else if (event.keyCode == 37) {
                    moveLeft();
            }

    });

            //Move gallery when click on arrows
            $('.nav-right img').click(function(e) {
        moveRight();
    });

            $('.nav-left img').click(function(e) {
        moveLeft();
    });

            //arrows opacity
            $('.navigation img').hover(function(){
                    $(this).animate({opacity:1.0},200);
                    },function(){
                    $(this).animate({opacity:0.7},200);	
            });

            //toggle menu
            $('.box-button').click(function(e) {
            displayMenu();  
    });

            function displayMenu(){
                    if($('.main-menu').hasClass('toggled')){
                            $('.main-menu').stop().slideUp(400).removeClass('toggled');
                            $('.box-button').css('background-color','#a69d65').css('border','1px solid #fff');;
                            $('.box-button span').css('background-color','#fff');
                    }else{
                            $('.main-menu').stop().slideDown(400).addClass('toggled'); 
                            $('.box-button').css('background-color','#fff').css('border','1px solid #a69d65');
                            $('.box-button span').css('background-color','#a69d65');
                    }	
            }

            //Scroll to sections
            $('.main-menu a').click(function(e) {
            e.preventDefault();
            var link_id =$(this).attr('id');
            var section_class = link_id.replace('-link','');
            $('html, body').stop().animate({
                    scrollTop: $('.'+section_class+'').offset().top-90
            }, 2000);
            if(document.body.clientWidth <=568 ){
                    displayMenu();		
            }
    });


});

