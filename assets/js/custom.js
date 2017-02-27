$(document).ready(function(){
    var animating = false;

    $(document).on('click','#topic_left',function(e){
        var box_width = $("#topic_slider_box").width();
        var marginLeft = parseInt($("#topic_slides").css('marginLeft').replace('px',''));
        
        if(marginLeft < 0 && !animating){
            animating = true;
            $("#topic_slides").animate(
                {
                    marginLeft: "+=100px"
                }, 500
            );
        }
    });

    $(document).on('click','#topic_right',function(e){
        var box_width = $("#topic_slider_box").width();
        var slides_width = 0;

        $("#topic_slides a").each(function(e){
            slides_width += $(this).width();
        });

        var marginLeft = parseInt($("#topic_slides").css('marginLeft').replace('px',''));
        console.log(box_width, marginLeft, slides_width);
        if(marginLeft > (box_width - slides_width) ){
            if(marginLeft > -box_width){
                $("#topic_slides").animate(
                    {
                        marginLeft: "-=100px"
                    }, 500
                );
            }
        }
    });

    $(document).on('click','.reply-link',function(e){
        var data_ref = $(this).attr("data-ref");
        $("#"+data_ref).focus();
    });

});