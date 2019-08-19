$(function (){
  $('#info-left-section, .right-side').theiaStickySidebar();
});


// start wow animations
new WOW().init();
  // handle animationend to callback
  var animationend = 'oAnimationEnd mozAnimationEnd webkitAnimationEnd MSAnimationend animationend';
  var inClass   = 'bounceIn';
  var outClass  = 'bounceOut';

$('.portfolio .main_content').hide();

$(document).on('click', '.see_myPortfolio', function (){

    // change the link
    $(this).html(' Return to my CV <i class="fas fa-long-arrow-alt-left"></i>')
    $(this).addClass('see_myCV').removeClass('see_myPortfolio');
    // ./

    $('.cv').removeClass(inClass);
    $('.cv').removeClass(outClass);
    $('.portfolio .main_content').removeClass(outClass);
    $('.portfolio .main_content').removeClass(inClass);

    // hide cv content
    $(".cv").addClass(outClass).one(animationend, function (){
        // display cv content
        $('.cv').css('display', 'none');

        // show conent portfolio with
        $('.portfolio .main_content').css('display', 'block');
        $('.portfolio .main_content').addClass(inClass);

        // remove outClasses
        $('.cv').removeClass(inClass);
        $('.cv').removeClass(outClass);
        $('.portfolio .main_content').removeClass(outClass);
        $('.portfolio .main_content').removeClass(inClass);

    });
    return false;
});

// return to cv
$(document).on('click', '.see_myCV', function (){

    // change the link
    $(this).html('<i class="far fa-smile-beam"></i> See My Portfolio <i class="fas fa-long-arrow-alt-right"></i>')
    $(this).addClass('see_myPortfolio').removeClass('see_myCV');
    // ./

    $('.cv').removeClass(inClass);
    $('.cv').removeClass(outClass);
    $('.portfolio .main_content').removeClass(outClass);
    $('.portfolio .main_content').removeClass(inClass);

    // hide cv content
    $(".portfolio .main_content").addClass(outClass).one(animationend, function (){
        // display portfolio .main_content content
        $('.portfolio .main_content').css('display', 'none');

        // show conent portfolio with
        $('.cv').css('display', 'block');
        $('.cv').addClass(inClass);

        // remove outClasses
        $('.cv').removeClass(inClass);
        $('.cv').removeClass(outClass);
        $('.portfolio .main_content').removeClass(outClass);
        $('.portfolio .main_content').removeClass(inClass);

    });

    return false;
})
