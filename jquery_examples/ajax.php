<!DOCTYPE html>
<html>
<head>
	<title>rkJquery</title>
	<style type="text/css"> .yes {color:red; font-weight: bold; } .green {color:green; } </style></strong>
</head>
<body>
<h2>Radheshyam</h2>
	<ul>
		<li>Apple</li>
		<li>Book</li>
		<li>Cat</li>
	</ul>
<div class="room" id="kitchen">
    <div class="lightbulb on">lightbulb on</div>
    <div class="switch">switch</div>
    <div class="switch">switch</div>
    <div class="clapper">clapper</div>
</div>
<form id="myForm">
    <input name="name" id="name" class="required" placeholder="Charcter" />
    <!-- <input name="mname" id="mname" class="required2" placeholder="Number" />
    <input name="lname" id="lname" class="required3" placeholder="Email" /> -->
    <button id="submitBtn" type="button">Submit</button>
</form>
<table id="ajax" border="2"></table>
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(function(){
		var arr = ['apple1','book1','cat1'];
		var arrLenght = arr.length;
			for(var i=0; i<arrLenght; i++) {
				$('ul').append('<li>' + arr[i] + '</li>');
				//alert(arr[i]);
			}
		/*$.each(arr,function(i, item){
			var item = "<li>"+ item +"</li>";
			$('ul').append(item);
			//console.log(v);
		})*/

	/*$('#submitBtn').on('click', function(){
		var id = $('#name').val();
		//console.log(id);
		$.ajax({
			type:'POST',
            url:'foo.php',
            //dataType: "json",
            data:{nid:id},
            success:function(data){
            	var data1 = JSON.parse(data);
				if(data1.status == 'OK') {
					$("#ajax").html(data1.result.title);
					//console.log(data1.result.title);
				}
			}
		});
	});*/

	/*$('#submitBtn').click(function(e){
		var Phone = $('.required2').val();
		var PhoneRegex = /^['0-9']$/;

		if($('.required').val().length === 0) {
			e.preventDefault();
			alert('Fill value');
		} 
		else if($('.required2').val().length === 0) {
		//else if(!PhoneRegex.test(Phone)) {	
			e.preventDefault();
			alert('Fill Mname');
		} else {
			//console.log($('#myForm').serialize);
			alert($('#myForm').serialize());
		}

		//var data_id2 = $('#myForm').serializeArray();
		//console.log(data_id2[0].value);
	});*/	

	/*$('#submitBtn').click(function(){
		var data_id = $('#myForm').serialize();
		$.get("foo.php", data_id, function(data){
			$('#ajax').html(data);	
			//console.log(data);
		})
	});*/

	/*$.get("foo.php",{nid:2}, function(data){
		console.log(data);
		$('#ajax').html(data);
	});*/

	/*$.ajax({
		url: "foo.php",
		//date: {id:123},
		type: "GET",
		//dataType: "json",
	}).done(function(json, status){
		$('#ajax').html(json + ' - ' + status);
		console.log(json);
		console.log(status);
	}).fail(function(xhr, status, errorThrown) {
		alert("Sorry , There was a problem");
		console.log( "Error: " + errorThrown );
	    console.log( "Status: " + status );
	    console.dir( xhr );
	}).always(function(xhr, status) {
		alert("This request is completed");
	});*/

	/*$.get('foo.php', function(r) {
		console.log(r);
		$('#kitchen .clapper').html(r);
	});*/
});

</script>