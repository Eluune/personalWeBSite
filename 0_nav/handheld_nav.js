$(document).ready(function()
{
  if($(document).width() < 1280)
  {
    $("#section-0").hide();
  }

  $(".menu-burger").click(function()
  {
    if($(document).width() < 1280)
    {
      this.classList.toggle("change");
      $("#section-0").toggle("slide");
    }
  });

  $("#section-0 a").click(function()
  {
    if($(document).width() < 1280)
    {
      $("#section-0").toggle("slide");
      $(".change").removeClass("change");
    }
  });


  $(window).resize(function()
  {
    if($(document).width() >= 1280)
    {
      $("section-0").show();
    }
  });



});
