<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <script src="Boostap/js/jQuery v3.1.1.js"></script>
  <script>
  	$(document).ready(function(){
  		$("#noss").click(function(){
  			$("#nossss").css("color", "yellow");
  			 $.ajax({
  			 	url:"index.php/usercontroller/checkid",
  			 	data:"name=<?php echo "admin123" ?>",
  			 	type:"POST",
  			 	success:function(res){
  			 		if (res == 1) {
  			 			alert(res);
              $("#nosss").prop('disabled', false);
  			 		}

  			 	}
  			 });
  	});


    $("#nos").keyup(function() {
        var bla = $('#nos').val();
        var bb = "name=" + bla ;
        if (bla == "noon") {
          $("#nosss").prop('disabled', false);
        }
        $.ajax({
         url:"index.php/usercontroller/checkid",
         data:bb,
         type:"POST",
         success:function(res){
           if (res == 1) {
             alert(res);
             $("#nosss").prop('disabled', false);
           }

         }
        });
    });

    $("#username").keyup(function() {
        var getusername = $('#username').val();
        var checkoverlap = "name=" + getusername ;
        $.ajax({
         url:"index.php/usercontroller/checkidd",
         data:checkoverlap,
         type:"POST",
         success:function(res){
           if (res == 1) {
             alert(res);
           }

         }
        });
    });
  	});
  </script>

</head>
<body>

Test : <input type="text" id="nos">
<button type="button" id="noss">Test</button>
<!-- <button type="button" id="nosss">Test2</button> -->
<p id="nossss">nosss</p>

<?php
    echo form_open("Testcontroller2");?>

    <button type="submit" id="nosss" disabled>Test2</button>

    <div id="search_section">
  <div class="col-sm-8">
  Username : <input  id="username" type="text" name="username" pattern="\w{6,}" placeholder="Enter username" required autofocus>
  </div><br>
  </div>
    <?php echo form_close(); ?>



</body>
</html>
