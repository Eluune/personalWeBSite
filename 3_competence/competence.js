$(document).ready(function()
{
  $("#c-0").css({"display":"block"});

  $(".circle").click(function()
  {
    var id = $(this).attr('id'); // On recupère l'ID
    id = id.substr(7,8);
    //console.log(id);

    $(".comp-texte").slideUp('slow'); // Ferme tous les liens
    $(".comp-titre").slideUp('slow');

    if($("#c-"+id).css("display") == "none")
    {
      $("#c-"+id).slideDown('slow'); // On affiche si Invisible
      $("#ct-"+id).slideDown('slow');
    }
    else
    {
      $("#c-"+id).slideUp('slow'); // On enleve si Visible
      $("#ct-"+id).slideUp('slow');
    }
  });

});

$(document).ready(function(){
  var progressBarOptions = {
  	startAngle: 0,
  	size: 200,
      value: 0.75,
      fill: {
  		color: '#ffa500'
  	}
  }

  $('#circle-a').circleProgress({
  	value : 0.90,
  	fill: {
  		color: '#008290'
  	}
  });

  $('#circle-b').circleProgress({
  	value : 0.85,
  	fill: {
  		color: '#E64142'
  	}
  });

  $('#circle-c').circleProgress({
  	value : 0.85,
  	fill: {
  		color: '#008290'
  	}
  });

  $('#circle-d').circleProgress({
  	value : 0.70,
  	fill: {
  		color: '#E64142'
  	}
  });

  $('#circle-e').circleProgress({
  	value : 0.80,
  	fill: {
  		color: '#008290'
  	}
  });

  $('#circle-f').circleProgress({
    value : 0.80,
    fill: {
      color: '#E64142'
    }
  });
});
