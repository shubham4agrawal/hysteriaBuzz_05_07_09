<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/node_modules/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<h1 class="text-center">Welcome to CodeIgniter MOD!</h1>
	<div class="col-lg-3">
	</div>
	<div class="jumbotron col-lg-6">
		<form id="form-submit">
			<p class="text-center">Login Into The System</p>
			<div class="form-group">
				<p>Firstname:</p><input type="text" name="firstname" id="firstname" class="form-control">
			</div>
			<div class="form-group">
				<p>Lastname:</p><input type="text" name="lastname" id="lastname" class="form-control">
			</div>
			<div class="form-group">
				<br><input type="submit" name="login" id="login" value="Login"  class="btn btn-info form-control">
			</div>
		</form>
	</div>
	<div class="col-lg-3">
	</div>
	<footer class="col-lg-12 text-center">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></footer>
</div>
<script>
	$(document).ready(function(){
		$('#login').on('click',function(){
			$.ajax({
				url:"<?php echo base_url();?>Welcome/checkLogin",
				type: "POST",
				async: false,
				data: $('#form-submit').serialize(),
				dataType: "json",
				success: function(data){
					if(data.status){
						window.location.href="<?php echo base_url();?>Welcome/details";
						alert("login Successful");
					}
				},
				error: function(){
					alert('Cannot get Data From the Database');
				}
			});			
		});
	});
</script>
</body>
</html>