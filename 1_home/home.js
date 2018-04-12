$(document).ready(function()
{
  $("#logo1").css({'transform' : 'rotate('+ 360 +'deg)'});
  $("#logo2").css({'transform' : 'rotate('+ (-360) +'deg)'});
  $("#logo3").css({'transform' : 'rotate('+ 720 +'deg)'});

  $("#logo4").delay(1000).animate({left: $(window).width() / 3.33}, 500);
  $("#logo5").delay(2000).css({'opacity':'1'});


  $("#scroll").click(function()
  {
    var scroll = $("body").scrollTop();
    if(scroll < $(window).height())
    {
      var section = $("#section-2").offset().top;
      $('body,html').animate({scrollTop: section}, 1000);
    }
  });

  $("#logo4").click(function()
  {
    var scroll = $("body").scrollTop();
    if(scroll < $(window).height())
    {
      var section = $("#section-2").offset().top;
      $('body,html').animate({scrollTop: section}, 1000);
    }
  });

});
