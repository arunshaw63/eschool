$(document).ready(function(){
    $(function(){
        $("#playlist li").on("click", function (){
            $("#videoarea").attr({
                src:$(this).attr("movieurl"),
            });
        });
        $("#videoarea").attr({
            src:$("#playlist li").eq(0).attr("movieurl"),
        });
    })
})

 
// $(document).ready(function(){
//     $("#testimonial-slider").owlCarousel({
//         items:1,
//         itemsDesktop:[1000,1],
//         itemsDesktopSmall:[979,1],
//         itemsTablet:[768,1],
//         pagination:true,
//         navigation:false,
//         navigationText:["",""],
//         slideSpeed:1000,
//         singleItem:true,
//         autoPlay:true
//     });
// });
