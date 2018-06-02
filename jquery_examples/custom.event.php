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
	$(".switch, .clapper").click(function(e){
		var light = $(this).closest(".room").find(".lightbulb");
		console.log(light.is(".on"));
	});
});


</script>