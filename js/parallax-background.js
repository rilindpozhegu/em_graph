    $(function(){                
        //caching window and body, setting the body background attachment to fixed
        var $window = $(window);
        var $bodya = $("#parallax_slide_bg").css("background-attachment" , "fixed");                
        //scroll amount - the less it is, the more noticable the effect is 
        var scrollAmount = -1.6;                
        //functuon executed while we're scrolling 
        $window.scroll(function() {
            //moving the background position 
            $bodya.css("background-position", "center " + parseInt( $window.scrollTop()/scrollAmount ) + "px");
        });                        
            
        //just for the demo     
    
        $("#direction-normal").on("click", function(){
            scrollAmount = -8;
        });
        
        $("#direction-reverse").on("click", function(){
            scrollAmount = 8;
        }); 
            
    });