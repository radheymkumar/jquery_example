<!DOCTYPE html>
<html>
<head>
	<title>rkJquery</title>
	<style type="text/css"> .yes {color:red; font-weight: bold; } .green {background: green; } 

  </style>
	
	<link href="js/jquery-ui.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
</head>
<body>
<form class="form" method="post" action="#">
  <h2>Create Registration Form Using jQuery</h2>
  <label>Name :</label>
  <input type="text" name="dname" id="name" value="radhey">
  <label>Email :</label>
  <input type="text" name="demail" id="email" value="radhey@gmail.com">
  <label>Password :</label>
  <input type="password" name="password" id="password" value="1234567890">
  <label>Confirm Password :</label>
  <input type="password" name="cpassword" id="cpassword" value="1234567890">
  <input type="button" name="register" id="register" value="Register">
</form>

</body>
</html>


<script type="text/javascript">
$(function(){
  $('#register').on('click', function(){
    var name = $('#name').val();
    var email = $('#email').val();
    var pass = $('#password').val();
    var cpass = $('#cpassword').val();
      if(name == '' || email == '' || pass == '' || cpass == '') {
        alert('Please fill all fields');
      } else if((pass.length) < 8) {
        alert('Password should be enter 8');
      } else if(!(pass).match(cpass)) {
        alert('Confirm password not match');
      } else {
        $.post('formget_ajax.php', {
          name1: name,
          email1: email,
          pass1 : pass
        }, function(data) {
          $('h2').html(data);
        });
      }
  });

});	

</script>
