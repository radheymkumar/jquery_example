<!DOCTYPE html>
<html>
<head>
	<title>rkJquery</title>
	<style type="text/css"> .yes {color:red; font-weight: bold; } .green {background: green; } 
  .toggler { width: 500px; height: 200px; position: relative; }
    #button { padding: .5em 1em; text-decoration: none; }
    #effect { width: 240px; height: 170px; padding: 0.4em; position: relative; border: 1px solid;}
    #effect h3 { margin: 0; padding: 0.4em; text-align: center; }

  </style>
	
	<link href="js/jquery-ui.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
</head>
<body>
<h2>Radheshyam</h2>
<div class="toggler">
  <div id="effect" class="ui-corner-all">
      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede.
  </div>
</div>
<select name="effects" id="effectTypes">
  <option value="blind">Blind</option>
  <option value="bounce">Bounce</option>
  <option value="clip">Clip</option>
  <option value="drop">Drop</option>
  <option value="explode">Explode</option>
  <option value="fade">Fade</option>
  <option value="fold">Fold</option>
  <option value="highlight">Highlight</option>
  <option value="puff">Puff</option>
  <option value="pulsate">Pulsate</option>
  <option value="scale">Scale</option>
  <option value="shake">Shake</option>
  <option value="size">Size</option>
  <option value="slide">Slide</option>
  <option value="transfer">Transfer</option>
</select>
<button id="button" class="ui-state-default ui-corner-all">Run Effect</button>


</body>
</html>


<script type="text/javascript">
$(function(){

  function runEffect() {
    var selectedEffect = $('#effectTypes').val();
    var options = {};
    $('#effect').hide(selectedEffect, options, 500 ,callbacks);
  }
  function callbacks(){
    setTimeout(function(){
      $("#effect").removeAttr("style").hide().fadeIn();
    },1000);
  }

  $("#button").on('click',function(){
    runEffect();
    return false;
  });


  /*$('#button').on('click',function(){
    $('#effect').addClass('yes',2000, callback2);
  });	
  function callback2(){
    setTimeout(function(){
      $('#effect').removeClass('yes',2000, callback3);
    }, 1500 );
  }

  function callback3(){
    $('#effect').addClass('green');
  }*/

});	

</script>
