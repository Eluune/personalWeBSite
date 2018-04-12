$(document).ready(function()
{
  $(".comp-t").hide();

  $(".circle").click(function()
  {
    var id = $(this).attr('id'); // On recupère l'ID
    id = id.substr(7,8);

    $(".comp-t").slideUp('slow');
    $(".circle").children("span").css({"color":"RGB(240,240,240)"});

    if($("#ce-"+id).css("display") == "none")
    {
      $("#ce-"+id).slideDown(1000);
      $(this).children("span").css({"color":"RGB(255,65,66)"});
    }
    else
    {
      $("#ce-"+id).slideUp(1000);
      $(this).children("span").css({"color":"RGB(240,240,240)"});
    }


  });
});
