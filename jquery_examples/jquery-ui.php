<!DOCTYPE html>
<html>
<head>
	<title>rkJquery</title>
	<style type="text/css"> .yes {color:red; font-weight: bold; } .green {background: green; } 
	#draggable { width: 150px; height: 150px; padding: 0.5em; border: 1px solid;}
	#resizable { width: 150px; height: 150px; padding: 0.5em; }
  	#resizable h3 { text-align: center; margin: 0; }
  	#feedback { font-size: 1.4em; }
	  #selectable .ui-selecting { background: #FECA40; }
	  #selectable .ui-selected { background: #F39814; color: white; }
	  #selectable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
	  #selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
	  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  .ui-menu { width: 150px; }
  </style>
	
	<link href="js/jquery-ui.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
</head>
<body>
<h2>Radheshyam</h2>
	<!-- <input type="text" name="date" id="datePicker">
	<div id="slider"></div>
	<div id="progressbar"></div>
	<div id="draggable"><p>Drag me around</p></div>
	<div id="resizable" class="ui-widget-content"><p>Drag me around</p></div> -->
	<!-- <ol id="selectable">
	  <li class="ui-widget-content">Item 1</li>
	  <li class="ui-widget-content">Item 2</li>
	  <li class="ui-widget-content">Item 3</li>
	  <li class="ui-widget-content">Item 4</li>
	  <li class="ui-widget-content">Item 5</li>
	  <li class="ui-widget-content">Item 6</li>
	  <li class="ui-widget-content">Item 7</li>
	</ol> -->
	<!-- <ul id="sortable">
	  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
	  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
	  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
	  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
	  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
	  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
	  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 7</li>
	</ul> -->
<!-- <div id="accordion">
  <h3>Section 1</h3>
  <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3>Section 3</h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div> -->
  <!-- <input id="tags"> -->
  	
<!-- <div class="widget">
  <h1>Checkbox and radio button widgets</h1>
 
  <h2>Radio Group</h2>
  <fieldset>
    <legend>Select a Location: </legend>
    <label for="radio-1">New York</label>
    <input type="radio" name="radio-1" id="radio-1">
    <label for="radio-2">Paris</label>
    <input type="radio" name="radio-1" id="radio-2">
    <label for="radio-3">London</label>
    <input type="radio" name="radio-1" id="radio-3">
  </fieldset>
 
  <h2>Checkbox</h2>
  <fieldset>
    <legend>Hotel Ratings: </legend>
    <label for="checkbox-1">2 Star</label>
    <input type="checkbox" name="checkbox-1" id="checkbox-1">
    <label for="checkbox-2">3 Star</label>
    <input type="checkbox" name="checkbox-2" id="checkbox-2">
    <label for="checkbox-3">4 Star</label>
    <input type="checkbox" name="checkbox-3" id="checkbox-3">
    <label for="checkbox-4">5 Star</label>
    <input type="checkbox" name="checkbox-4" id="checkbox-4">
  </fieldset>
 
  <h2>Checkbox nested in label</h2>
  <fieldset>
    <legend>Bed Type: </legend>
    <label for="checkbox-nested-1">2 Double
      <input type="checkbox" name="checkbox-nested-1" id="checkbox-nested-1">
    </label>
    <label for="checkbox-nested-2">2 Queen
      <input type="checkbox" name="checkbox-nested-2" id="checkbox-nested-2">
    </label>
    <label for="checkbox-nested-3">1 Queen
      <input type="checkbox" name="checkbox-nested-3" id="checkbox-nested-3">
    </label>
    <label for="checkbox-nested-4">1 King
      <input type="checkbox" name="checkbox-nested-4" id="checkbox-nested-4">
    </label>
  </fieldset>
</div> -->

<!-- <ul id="menu">
  <li class="ui-state-disabled"><div>Toys (n/a)</div></li>
  <li><div>Books</div></li>
  <li><div>Clothing</div></li>
  <li><div>Electronics</div>
    <ul>
      <li class="ui-state-disabled"><div>Home Entertainment</div></li>
      <li><div>Car Hifi</div></li>
      <li><div>Utilities</div></li>
    </ul>
  </li>
  <li><div>Movies</div></li>
  <li><div>Music</div>
    <ul>
      <li><div>Rock</div>
        <ul>
          <li><div>Alternative</div></li>
          <li><div>Classic</div></li>
        </ul>
      </li>
      <li><div>Jazz</div>
        <ul>
          <li><div>Freejazz</div></li>
          <li><div>Big Band</div></li>
          <li><div>Modern</div></li>
        </ul>
      </li>
      <li><div>Pop</div></li>
    </ul>
  </li>
  <li class="ui-state-disabled"><div>Specials (n/a)</div></li>
</ul> -->

<!-- <form action="#">
 
  <fieldset>
    <label for="speed">Select a speed</label>
    <select name="speed" id="speed">
      <option>Slower</option>
      <option>Slow</option>
      <option selected="selected">Medium</option>
      <option>Fast</option>
      <option>Faster</option>
    </select>
 
    <label for="files">Select a file</label>
    <select name="files" id="files">
      <optgroup label="Scripts">
        <option value="jquery">jQuery.js</option>
        <option value="jqueryui">ui.jQuery.js</option>
      </optgroup>
      <optgroup label="Other files">
        <option value="somefile">Some unknown file</option>
        <option value="someotherfile">Some other file with a very long option text</option>
      </optgroup>
    </select>
 
    <label for="number">Select a number</label>
    <select name="number" id="number">
      <option>1</option>
      <option selected="selected">2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
    </select>
 
    <label for="salutation">Select a title</label>
    <select name="salutation" id="salutation">
      <option disabled selected>Please pick one</option>
      <option>Mr.</option>
      <option>Mrs.</option>
      <option>Dr.</option>
      <option>Prof.</option>
      <option>Other</option>
    </select>
  </fieldset>
 
</form> -->

<!-- <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Nunc tincidunt</a></li>
    <li><a href="#tabs-2">Proin dolor</a></li>
    <li><a href="#tabs-3">Aenean lacinia</a></li>
  </ul>
  <div id="tabs-1">
    <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
  </div>
  <div id="tabs-2">
    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
  </div>
  <div id="tabs-3">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
</div>-->

</body>
</html>
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->

<script type="text/javascript">
$(function(){
	$('#datePicker').datepicker();
	$('#slider').slider({
		orientation: "vertical",
		min: 0,
		max: 100,
		value: 50
	});
	$('#progressbar').progressbar({value:20}).addClass( "almost-done" );
	$('#draggable').draggable();
	$('#resizable').resizable();
	$('#selectable').selectable()
	$( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
    $( "#accordion" ).accordion();
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });

     $( "input" ).checkboxradio();
     $( "#menu" ).menu();

     $( "#speed" ).selectmenu();
     $( "#files" ).selectmenu();
     $( "#number" )
      .selectmenu()
      .selectmenu( "menuWidget" )
        .addClass( "overflow" );
     $( "#salutation" ).selectmenu();

     $( "#tabs" ).tabs();
});	

</script>
