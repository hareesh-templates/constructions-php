$(window).load(function(){
    
    // ieCheck
    var ie = false;
    var aniButtonDuration = 350;
	 var defMh = 0, h = 0;
	 defMh = parseInt($('body').css('minHeight'));
    
    if($.browser.msie && $.browser.version<9)
    {
        aniButtonDuration = 0;
        ie = true;
    }
    
    
	$('#thumbNav li span').css({opacity:0})
    $('#thumbNav li a').hover(function()
    {
        $(this).find('span').stop().animate({opacity:1}, aniButtonDuration,'easeOutCubic')					   
    }, function(){
        $(this).find('span').stop().animate({opacity:0}, aniButtonDuration,'easeOutCubic')						   
    })
	 

		  
		$('#bgStretch')
		.bgStretch({
			align:'leftTop',
			navigs:$('#glob > div').navigs()
		})
        .sImg({
			spinner:$('.gall_spinner').hide()
		})
        
    var preview = $('#bgStretch').parent();
    var description = $('#description');
    var close_gall = $('#close_gall');
    
    $('#description li').each(function(){
        $(this).find('> div').css({display:'none'})
    })
    
    preview.fadeOut(0);
	 close_gall.fadeOut(0);
    description.stop().animate({opacity:0}, 0, function(){
        $(this).css({display:'none'})
    });
    
    $('#close_gall').click(function(){
        closePreview();
        return false;
    })

    function closePreview(){
      preview.fadeOut(600);
	  close_gall.fadeOut(600);
    }
    preview.fadeIn(10);
    preview.fadeOut(10);
    

   
	 
	 /*FANCYBOX*/  
	$("a[rel=Appendix]").fancybox({
		'transitionIn'		: 'elastic',
		'transitionOut'		: 'elastic',
		'titlePosition' 	: 'over',
		'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
		return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
		}
	});
	
	// lightbox image
	$(".lightbox-image").append("<span></span>");
	
	$(".lightbox-image").hover(function(){
		$(this).find("img").stop().animate({opacity:0.5}, "normal")
	}, function(){
		$(this).find("img").stop().animate({opacity:1}, "normal")
	});
	
	// slider 
	 $('.slider')
		.uCarousel({
			show:2
			,shift:0
			,rows:1
			,buttonClass:'button1'			
			,axis:'x'
			,blockAtEnd:false
			,clickable:false
		})
		
	 $('.slider>ul>li span').css({opacity:0})
    $('.slider>ul>li').hover(function()
    {
       $(this).find('span').stop().animate({opacity:1}, aniButtonDuration,'easeOutCubic')					   
    }, function(){
        $(this).find('span').stop().animate({opacity:0}, aniButtonDuration,'easeOutCubic')						   
    })
	 
	 $('.prev, .next ')
		.sprites({
			method:'simple',
			hover:true
		})
	//end slider


    /////////////////////////////////////////////////////////////////////////// 
    //                           content switch                              //
    ///////////////////////////////////////////////////////////////////////////
    
    var content=$('#content'),
        nav=$('.menu, .menu_footer'),
        splash = $('#splash'),
        header = $('header');
    
    $('ul#menu').superfish({
      delay:       700,
      animation:   {height:'show'},
      speed:       300,
      autoArrows:  false,
      dropShadows: false
    });

    $('.submenu_1 a b').css({width:'0px'})
    $('.submenu_1 a').hover(function()
    {
        $(this).find('b').css({width:'0px', left:'0px'}).stop().animate({width:'100%'}, 300,'easeOutCubic');			   
    }, function(){
        $(this).find('b').stop().animate({width:'0px', left:'100%'}, 300,'easeOutCubic');						   
    })
    
    
    nav.navs({
		useHash:true,
        defHash:'#!/',
		hoverIn:function(li){
		   	  $('>a ',li).css({color:'#9b111a'});
		   	  $('> a > span ',li).css({display:'block'}).stop().animate({opacity:1}, aniButtonDuration, 'easeOutCubic');
		},
		hoverOut:function(li){
		  if (!li.hasClass('with_ul') || !li.hasClass('sfHover')) {
              $('>a ',li).css({color:'#fff'});
		   	  $('> a > span ',li).stop().animate({opacity:0}, aniButtonDuration, 'easeOutCubic', function(){
		   	      $(this).css({display:'none'});
		   	  });
          }
		}				
    })
    
	 
	 $(window).resize(function (){
		 if (h < defMh) {h = defMh}
		 $('body').stop().animate({'minHeight':h})
        if( page_splash==1) {
            var new_margin_value=$(window).height()/2-185;
        	header.stop(true).delay(0).animate({marginTop:new_margin_value +'px'}, 650,'easeOutCubic');
            }
		});
		
		
     content.tabs({
		preFu:function(_)
        {
            _.li.css({display:'none', top:'620px'});
            _.li.each(function(){
                if($(this).height() < 624){
                    $(this).height(624);
                } else {
                    $(this).height($(this).height()+30)
                }
            })
		}
		,actFu:function(_)
        {

            if(_.pren == undefined){
                aniDelay = 250;
            } else {
                if(_.n == -1 && _.pren == -1){
                    aniDelay = 250;
                } else {
                    aniDelay = 450;
                }
            }

            
            if(_.n == -1){
                page_splash=1;
                content.stop().delay(aniDelay).animate({height:'0px'}, 650,'easeOutCubic');
                header.stop().delay(aniDelay).animate({marginTop:'281px'}, 650,'easeOutCubic');
					 h=0;
					 $(window).trigger('resize');
            } else {
                page_splash=0;
                content.stop().delay(aniDelay).animate({height:_.curr.height()+30}, 650,'easeOutCubic');
					 header.stop().delay(aniDelay).animate({marginTop:'0px'}, 650,'easeOutCubic');
            }
            
        	if(_.curr){
        	   h = parseInt( _.curr.outerHeight(true)+420);
               closePreview();
				$(window).trigger('resize');
				_.curr
					.stop()
					.delay(aniDelay).css({display:'block', top:content.height()}).animate({top:'0px'}, 650,'easeOutCubic');
            }

            
			if(_.prev){
			    _.prev 
    				.stop()
    				.animate({top:-content.height()}, 350,'easeInSine', function(){
    				     $(this).css({display:'none'});
    			     });
            }
           
        }
		
	})
       
    nav.navs(function(n, _)
    {
		content.tabs(n);
	})
    
 
})