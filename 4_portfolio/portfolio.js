$(document).ready(function()
{
  /*
  $(".portfolio-image-1, .portfolio-image-2").mouseover(function()
  {
    $(this).children(".portfolio-description").animate({left:"show"}, "slow");
  });

  $(".portfolio-image-1, .portfolio-image-2").mouseleave(function()
  {
    $(this).children(".portfolio-description").animate({left:"hide"}, "slow");
  });
  */

  $(".portfolio-image-1, .portfolio-image-2").mouseover(function()
  {
    $(this).children(".portfolio-description").slideDown("1000");
  });

  $(".portfolio-image-1, .portfolio-image-2").mouseleave(function()
  {
    $(this).children(".portfolio-description").slideUp("1000");
  });
});
