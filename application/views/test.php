<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
  <script src="<?php echo base_url('Boostap/js/jQuery v3.1.1.js');?>"></script>
	<script>
	.$(document).ready(function() {
			$("#Refresh").click(function() {
				$.ajax({
					url:"linkregister/Refresh",
					success:function(res) {

					}
				});
			});
		});</script>
</head>
<body>
	<img src="" width="110" height="30" class="captcha-img" style="border:0;" alt=" ">
	<button type="button" id="Refresh"><img src="<?php echo base_url('Refresh.svg');?>" width="25" height="20"></button>
</body>
</html>
