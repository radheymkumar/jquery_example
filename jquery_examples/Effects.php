<!-- https://learn.jquery.com/events/ -->
<!-- https://api.jquery.com/category/events/ -->
<!-- https://learn.jquery.com/events/introduction-to-custom-events/ -->
<!DOCTYPE html>
<html>
<head>
	<title>rkJquery</title>
	<style type="text/css"> .yes {color:red; font-weight: bold; } .green {color:green; } </style></strong>
</head>
<body>
<h2>Radheshyam</h2>
<div class="room" id="kitchen">
    <div class="lightbulb on">lightbulb on</div>
    <div class="switch">switch</div>
    <div class="switch">switch</div>
    <div class="clapper">clapper</div>
</div>

</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(function(){

	$( ".room" )
    .animate( {
        height: 20
    }, "slow", function() {
        $( ".clapper" ).html( "We're in the callback, baby!" );
    } );

	/*$('h2').hide(500).delay(500).show(300,function(){
		$('h2').delay(500,function(){
			$('h2').addClass('yes');
		});
	});*/

	/*$(".room").fadeOut(2000).fadeIn(2000,function(){
		$('.room .switch').addClass('yes');
	});*/

	//$(".room").fadeOut(5000).fadeIn(2000).addClass('yes');
	//$(".room").slideToggle('slow');	
	//$(".room").toggle('slow');
	//$(".room").fadeOut(2000).fadeIn(2000);
	//$(".room").slideUp(2000).slideDown(1000);

	//$('#kitchen').hide();
	//$('#kitchen .switch').show(2000);
});


</script>