<!-- https://learn.jquery.com/using-jquery-core/selecting-elements/ -->
<!DOCTYPE html>
<html>
<head>
	<title>rkJquery</title>
	<style type="text/css"> .yes {color:red; font-weight: bold; } .green {color:green; } </style></strong>
</head>
<body>
	<h1>   radhey   </h1>
	<input type="text" name="name">
	<input type="radio" name="hobby" value="music">Music
	<input type="radio" name="hobby" value="dance">Dance
	<select id="myselect">
	    <option value="1">Mr</option>
	    <option value="2">Mrs</option>
	    <option value="3">Ms</option>
	    <option value="4">Dr</option>
	    <option value="5">Prof</option>
	</select>
	<ul class="fbb">
	    <div></div>
	    <li id="foo1">foo</li>
	    <li id="bar1">bar</li>
	    <li id="baz1">baz</li>
	    <div></div>
	</ul>
	<ul class="foods">
	  <li>Coffee</li>
	  <li>Milk</li>
	  <li>Soda</li>
	</ul>
	<ul class="foods1">
	  
	</ul>
	<a class="addClass" id="links" href="google.com" title="Googles">addClass</a>
	<button class="addClass"> addClass</button>
	<strong></strong>
	<div class="content">
		<p id="target"></p>	<p>How are <span>you 1</span>?</p>	<p>How are you 2?</p> <p>How are you 3?</p>
		<ul><li><a href="google.come">Apple</a></li><li>Book</li><li>Cat</li>  </ul>
	</div>	
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

$(function(){
	$('#myselect option:selected').text();
	//$('input[value="dance"]').prop('checked',true);
	//$('input[name="name"]').prop("disabled",false);

	/*$('.foods li').each(function(k,v){
		console.log($(v).addClass('yes'));
	});*/

	//alert($.type(new Date()));
	//alert($.type(/test/));
	//alert($.type(null));
	//alert($.type([]));

	//alert($.type(new Function()));
	//alert($.type(new String('test')));
	//alert($.type(new Number(5)));
	//alert($.type( new Boolean()));
	//alert($.type(function(){}));
	//alert($.type('test'));
	//alert($.type(5));
	//alert($.type(true));

	/*var myArr = [1,2,3,4,5];
	alert($.isArray(myArr));*/

	//alert($.isNumeric(3.5));

	/*var myArr = [1,2,3,4,5];
	var roles = ['radhey','kumar','drupal'];
	if($.inArray('drupal', roles) !== -1) {
		alert('found');
	} else {
		alert('not found');
	}*/
	/*$.each({foo:"bar",baz:"bim"}, function(k, v){
		console.log("elements" + k + " is " + v );
	});*/
	/*$.each(['foo','bar','baz'], function(i, v){
		console.log("elements" + i + " is " + v );
	});*/


	/*var arr = [ "one", "two", "three", "four", "five" ];
		$.each( arr, function( i, val ) {
			//alert(i + '=>' +val);
			$('.foods1').html($('.foods1').html() + '<li>' + val + '</li>');
		});*/
	/*$('.foods li').each(function(index, element){
		//var li = $(this);
		alert($(element).html());
		//alert($(this).text());
		//$('.foods li').addClass('yes');
	});*/

});

	//$('h1').position();
	/*$('h1').width();
	$('h1').height();*/
	/*$(function(){
		$('.addClass').click(function(){
			alert($('span').hasClass('subchild'));
		})
	});*/
	//$('span').toggleClass('yes');
	//$('span').css({fontSize:'20px',color:'green'});
	/*var target = document.getElementById('target');
	var elements = document.createElement('strong');
	//target.innerHTML = '<b>This is my first passage</b>';
	$(target).after(elements);*/
	/*$('ul a:first').attr('href', function(idx, href){
		return "/new/"+ href;
	});*/
	//$('ul').prepend('<li>Egg</li>');
	/*var element = $('<li>Duck</li>');
	element.appendTo('.content ul li:last');
	*/
	//$('.content li:first').remove();
	//$('.content li:first').clone().appendTo('.content p:eq(1)');
	
	//$('.content p:first').html('this is my first <b>pragraphp</b>');
	//$('.content').find('ul li').eq(2).html('my name is radhey');
	//$("h1").addClass("yes");
	//alert($("ul li").first());
	//alert($( "ul li" ).eq(2));
	/*var ps = $("div");
	ps.has('span').css('color','red');*/
	//$('a').attr({ href: "https://www.google.com", title: "Google" });
	/*$( "a" ).attr({
	    title: "all titles are the same too!",
	    href: "somethingNew.html"
	});*/
	/*jQuery(function($){
		alert("YYY");
	});*/
	/*jQuery(document).ready(function($){
		alert("YY");
	});*/
	/*jQuery.noConflict();
	(function($){
		alert("YES");
	})(jQuery);*/
	/*window.onload =function() {
		alert('hellos');
	}*/
	/*$(function(){
		alert('two');
	});*/
	/*function readyFn(){
		alert('readyFn');
	};
	function readyFn2(){
		alert('readyFn2');
	};
	$(document).ready(readyFn);
	$(window).on("load",readyFn2);*/
	/*jQuery(window).on('load',function(){
		//console.log('window load');
		//alert('window load');
		//$('p').removeClass('yes');
	});*/
	jQuery(document).ready(function($){
		//console.log('document load');
		//$('p').hide();
		//$('p').addClass('yes');


	/*	$('.callback').remove();
		$('.callback').click(function(){
			$.get('myhtmlpage.html',function(){
				alert('yesy');
			});
		});
		$('.addClass').click(function(e){
			//alert('yes');
			$('p').addClass('yes');
			e.preventDefault();
			$(this).hide('slow');
		})
		$('.removeClass').click(function(){
			$('p').removeClass('yes');
			$('p').addClass('green');
		});
		*/	
	});
</script>