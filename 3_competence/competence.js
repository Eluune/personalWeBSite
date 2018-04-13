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

$(document).ready(function(){
  var progressBarOptions = {
  	startAngle: 0,
  	size: 50,
      value: 0.75,
      fill: {
  		color: '#ffa500'
  	}
  }

  $('.circle-100').circleProgress({
  	value : 1.00,
  	fill: {
  		color: '#2ecc71'
  	}
  });

  $('.circle-95').circleProgress({
  	value : 0.95,
  	fill: {
  		color: '#2ecc71'
  	}
  });

  $('.circle-90').circleProgress({
  	value : 0.90,
  	fill: {
  		color: '#27ae60'
  	}
  });

  $('.circle-85').circleProgress({
  	value : 0.85,
  	fill: {
  		color: '#f1c40f'
  	}
  });

  $('.circle-80').circleProgress({
  	value : 0.80,
  	fill: {
  		color: '#f39c12'
  	}
  });

  $('.circle-75').circleProgress({
    value : 0.75,
    fill: {
      color: '#e67e22'
    }
  });

  $('.circle-70').circleProgress({
    value : 0.70,
    fill: {
      color: '#d35400'
    }
  });

  $('.circle-65').circleProgress({
    value : 0.65,
    fill: {
      color: '#e74c3c'
    }
  });
});
