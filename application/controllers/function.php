
<script>
    $(document).ready(function(){
        jQuery('.camera_wrap').camera();
        $("#ccha").keyup(function() {
          var getcode = $('#ccha').val();
          var getcode2 = '<?php echo $word;?>';
          if (getcode == '0000') {
              $("#submitregister").prop('disabled', false);
          }else{
              $("#submitregister").prop('disabled', true);
          }
        });
        $("#submitregister").click(function() {
          $.ajax({
           url:"index.php/checklogin",
           data: "username=" + $('#username').val() + "&password=" + $('#password').val(),
           type:"POST",
           success:function(res){
             if (res == 2) {
               $("#showerror").text("Please Enter Username and Password.");
               $("#showerror").css("color", "ff6666");
             }else if (res == 3) {
               $("#showerror").text("Please Enter Username.");
               $("#showerror").css("color", "ff6666");
             }else if (res == 4) {
               $("#showerror").text("Please Enter Password.");
               $("#showerror").css("color", "ff6666");
             }else if(res == 1){
               $("#showerror").text("Invalid Username.");
               $("#showerror").css("color", "ff6666");
             }else{
                var url = 'index.php/checklogin/showlist';
                var username = $('#username').val();
                var password = $('#password').val()
                var form = $('<form action="' + url + '" method="post">' +
                  '<input type="text" name="username" value="' + username + '" />' +
                  '<input type="text" name="password" value="' + password + '" />' +
                  '</form>');
                $('body').append(form);
                form.submit();
             }
           }
          });
        });
    });
</script>
