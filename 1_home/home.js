$(document).ready(function()
{
  $("#logo1").css({'transform' : 'rotate('+ 360 +'deg)'});
  $("#logo2").css({'transform' : 'rotate('+ (-360) +'deg)'});
  $("#logo3").css({'transform' : 'rotate('+ 720 +'deg)'});

  if($(document).width() >= 1280)
  {
    var taille = $("#logo4").width();
    var milieu = (($(window).width() - taille)/2)-10;
    $("#logo4").delay(1000).animate({left:milieu}, 500);
  }
  else
  {
    var taille = $("#logo4").width();
    var milieu = (($(window).width() - taille)/2)-10;
    $("#logo4").delay(1000).animate({left:milieu}, 500);
  }
  $("#logo5").delay(2000).css({'opacity':'1'});

  /* Si cliques sur la page de garde, slide vers la partie presentation */
  $("#scroll").click(function()
  {
    var scroll = $("body").scrollTop();
    if(scroll < $(window).height())
    {
      var section = $("#section-2").offset().top;
      $('body,html').animate({scrollTop: section}, 1000);
    }
  });

  /* Si cliques sur la flèche de scroll, slide vers la partie presentation */
  $("#logo4").click(function()
  {
    var scroll = $("body").scrollTop();
    if(scroll < $(window).height())
    {
      var section = $("#section-2").offset().top;
      $('body,html').animate({scrollTop: section}, 1000);
    }
  });

  $(window).resize(function()
  {
    var taille = $("#logo4").width();
    var milieu = (($(window).width() - taille)/2)-10;

    $("#logo4").css({"left":"-60%"});
    $("#logo4").css({"left":milieu}, 500);
  });
});
