<!-- https://learn.jquery.com/events/ -->
<!-- https://api.jquery.com/category/events/ -->
<!DOCTYPE html>
<html>
<head>
	<title>rkJquery</title>
	<style type="text/css"> .yes {color:red; font-weight: bold; } .green {color:green; } </style></strong>
</head>
<body>
	<a id="jq" href="http://learn.jquery.com">Learn jQuery</a>
	<form method="post" action="test">
		<input type="text" id="name" name="name"><br>
		<input type="text" id="lname" name="lname"><br>
		<input type="radio" name="hobby" value="music">Music
		<input type="radio" name="hobby" value="dance">Dance<br>
		<select id="myselect">
		    <option value="1">Mr</option>
		    <option value="2">Mrs</option>
		    <option value="3">Ms</option>
		    <option value="4">Dr</option>
		    <option value="5">Prof</option>
		</select>
		<input id="send" type="submit" name="submit" value="submit">
	</form>
	<button>Click</button>
	<a href="evil">Click</a>
	<ul class="fbb">
	    <li id="foo1">foo</li>
	    <li id="bar1">bar</li>
	    <li id="baz1">baz</li>
	</ul>
	<ul id="list">
        <li><a href="http://domain1.com">Item #1</a></li>
        <li><a href="/local/path/1">Item #2</a></li>
        <li><a href="/local/path/2">Item #3</a></li>
        <li><a href="http://domain4.com">Item #4</a></li>
    </ul>
	<button id="onclicks" >On Click</button>
	<p id="msg"></p>
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

$(function(){

	/*$(".fbb li").bind('click',function(e){
		var elm = $(e.target);
		console.log(elm.text());
		$('#msg').text(elm.text());
	});*/

	//$("#jq").trigger("click");
	//$( "a" ).trigger( "click" );

	/*$('#list').on("click", "a[href^='http']", function(e){
			$( this ).attr("target","_blank");
	});*/
	/*$('#list a').on('click',function(e){
		var elem = $( this );
		if(elem.is("[href^='http']")){
			elem.attr("target","_blank");
		}
	});*/

	//$( "#list" ).append( "<li><a href='http://newdomain.com'>Item #5</a></li>" );
	/*$("#list a").on('click',function(e){
		e.preventDefault();
		console.log( $(this).text() );
	});*/

	/*$( "ul li" ).one( "click", function() {
	    console.log( "You just clicked this for the first time!" );
	    $( this ).click(function() {
	        console.log( "You have clicked this before!" );
	    });
	});
	$( "ul li" ).on( "click" );*/
	//$( "ul li" ).off( "click" );

	/*$( "ul" ).on( "click", "li", function() {
	    console.log($(this).text() + "Something in a <ul> was clicked, and we detected that it was an <li> element." );
	});*/

	/*$('#onclicks').on('click',{foo: "bar"}, function(e){
		console.log(e.data.foo)
		$('#msg').html(e.data.foo);
	});*/
	/*$('#onclicks').on("click",function(e){
		console.dir('event obj');
		console.dir(e);
	});*/
	/*$('#name').on({mouseenter: function(){
			console.log('mouseenter');
		}, mouseleave: function(){
			console.log('mouseleave');
		}, click: function() {
			console.log('alert');
		}
	})*/
	/*$('#name').on("mouseenter mouseleave", function(){
		alert('mouse');
	})*/
	/*$('#send').click(function(e){
		if($('#name').val() == '' || $('#lname').val() == ''){
			e.preventDefault();
			alert('empty name');
		}
	});*/
	/*$('#onclicks').on('click',MyClick);
	function MyClick() {
		alert("MyClick");
	}*/
	/*$( "body" ).on({
	    click: function( event ) {
	        alert( "Hello." );
	    }
	},"button");*/
	/*$('body').on('click',"#onclicks", function(e){
		alert('body');
	});*/
	/*$('#onclicks').bind('click',function(e){
		//alert('YO YO');
		//console.log('yy');
		alert($.type(2));
	});*/
	/*$('.fbb li').hover(function(){
		$(this).toggleClass('yes');
	})*/

	/*$('input[name]').one("focus mouseover keydown", firstEvent);
	function firstEvent() {
		$('a').toggleClass('yes');	
	}*/

	/*$('button').one('click',firstClick);
	function firstClick() {
		$('a').toggleClass('yes');
		$(this).click(function(){
			alert('click next');
		});
	}*/

	/*$('input').on({
		"click": function() {
			console.log('clicked');
		},
		"mouseover": function() {
			console.log('mouseover');
		}
	});*/

	/*$('input').on('click change', function() {
		console.log('click and changes');
	});*/

	/*$('a').click(function(e){
		var elem = $(this);
		if(elem.attr("href").match(/evil/)) {
			e.preventDefault();
			elem.toggleClass('yes');			
		}
	});*/
	/*$('input').on('change',function(){
		console.log('change on');	
	});*/

	/*$("button").on("click",function(){
		console.log('click on');
	});*/
	/*$('li').click(function(){
		console.log('click');
	})*/

});


</script>