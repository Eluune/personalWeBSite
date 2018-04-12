$(document).ready(function()
{
  // slide depuis le menu
  $("#section-0 a").click(function()
  {
    var pos = $("body").scrollTop();
    var clicked = $(this).attr("id"); // S1 S2 S3 ...

    var idSection = clicked.substring(1, 2); // 1 2 3 ...
    var section = $("#section-" + idSection).offset().top;
    section = pos + section;

    $('body,html').animate({scrollTop: section}, 1000);

    return false;
  });




  // change le css du menu en fonction de la position du scroll
  $("body").scroll(function()
  {
    var position = $("body").scrollTop();
    //console.log(position);

    if(position < 530)
    {
      $("#section-0 div ul li a").removeClass("active");
      $("#S0").addClass("active");
    }

    if(position >= 530 && position < 1800)
    {
      $("#section-0 div ul li a").removeClass("active");
      $("#S2").addClass("active");
    }

    if(position >= 1800 && position < 2900)
    {
      $("#section-0 div ul li a").removeClass("active");
      $("#S3").addClass("active");
    }

    if(position >= 2900)
    {
      $("#section-0 div ul li a").removeClass("active");
      $("#S4").addClass("active");
    }
  });

  var lastScroll = 0;
  var idsect = 0;
  $("body").scroll(function()
  {
    var scroll = $("body").scrollTop();

    if(scroll < 530)
    {
      idsect = 1;
    }
    else if(scroll >= 530 && scroll < 1800)
    {
      idsect = 2;
    }
    else if(scroll >= 1800 && scroll < 2900)
    {
      idsect = 3;
    }
    else
    {
      idsect = 4;
    }

    if(scroll > lastScroll)
    {
      idsect = idsect + 1;
      lastScroll = scroll;
/*
      var section = $("#section-" + idsect).offset().top;
      section = scroll + section;

      $('body,html').animate({scrollTop: section}, 1000);
*/
    }
    else
    {
      idsect = idsect - 1;
      lastScroll = scroll;
/*
      var section = $("#section-" + idsect).offset().top;
      section = scroll + section;

      $('body,html').animate({scrollTop: section}, 1000);
*/
    }
  });
});
