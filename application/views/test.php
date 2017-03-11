<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <title>Welcome to CodeIgniter</title>

   <style type="text/css">

 	::selection { background-color: #E13300; color: white; }
 	::-moz-selection { background-color: #E13300; color: white; }

 	body {
 		background-color: #fff;
 		margin: 40px;
 		font: 13px/20px normal Helvetica, Arial, sans-serif;
 		color: #4F5155;
 	}

 	a {
 		color: #003399;
 		background-color: transparent;
 		font-weight: normal;
 	}

 	h1 {
 		color: #444;
 		background-color: transparent;
 		border-bottom: 1px solid #D0D0D0;
 		font-size: 19px;
 		font-weight: normal;
 		margin: 0 0 14px 0;
 		padding: 14px 15px 10px 15px;
 	}

 	code {
 		font-family: Consolas, Monaco, Courier New, Courier, monospace;
 		font-size: 12px;
 		background-color: #f9f9f9;
 		border: 1px solid #D0D0D0;
 		color: #002166;
 		display: block;
 		margin: 14px 0 14px 0;
 		padding: 12px 10px 12px 10px;
 	}

 	#body {
 		margin: 0 15px 0 15px;
 	}

 	p.footer {
 		text-align: right;
 		font-size: 11px;
 		border-top: 1px solid #D0D0D0;
 		line-height: 32px;
 		padding: 0 10px 0 10px;
 		margin: 20px 0 0 0;
 	}

 	#container {
 		margin: 10px;
 		border: 1px solid #D0D0D0;
 		box-shadow: 0 0 8px #D0D0D0;
 	}
 	</style>
 </head>
 <body>

   <!-- <link rel="stylesheet" type="text/css" href="/code_examples/tutorial.css">
 <script type="text/javascript" src="/code_examples/passtest.js"></script>
 <div class="tutorialWrapper">
     <form>
         <div class="fieldWrapper">
             <label for="pass1">Password:</label>
             <input type="password" name="pass1" id="pass1">
         </div>
         <div class="fieldWrapper">
             <label for="pass2">Confirm Password:</label>
             <input type="password" name="pass2" id="pass2" onkeyup="checkPass(); return false;">
             <span id="confirmMessage" class="confirmMessage"></span>
         </div>
     </form>
 </div> -->

 <!-- <script>
function setColor(btn, color){
    var count=1;
    var property = document.getElementById(btn);
    if (count == 0){
        property.style.backgroundColor = "#FFFFFF"
        count=1;
    }
    else{
        property.style.backgroundColor = "#7FFF00"
        count=0;
    }

}</script>
<input type="button" id="button" value = "button" style= "color:white" onclick="setColor('button', '#101010')";/> -->
<!-- Password : <input class="form-control" id="searchfielddd"  type="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
 placeholder="Enter password" title="Invalid Format" required>
Re-Password : <input class="form-control" id="searchfieldd"  type="password" name="conpassword" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
placeholder="Confirm password" title="Invalid Format" onkeyup="checkPass(); return false;" required><br>
<button id="confirmMessage" class="confirmMessage">nos</button><br>
<input type="text" name="nos" id="nos">
</div><br>

<script>
function checkPass()
{
   //Store the password field objects into variables ...
   var pass1 = document.getElementById('searchfielddd');
   var pass2 = document.getElementById('searchfieldd');
   //Store the Confimation Message Object ...
   var message = document.getElementById('confirmMessage');
   //Set the colors we will be using ...
   var goodColor = "#66cc66";
   var badColor = "#ff6666";
   //Compare the values in the password field
   //and the confirmation field
   if(pass1.value == pass2.value){
       //The passwords match.
       //Set the color to the good color and inform
       //the user that they have entered the correct password
       pass2.style.backgroundColor = goodColor;
       message.style.color = goodColor;

   }else{
       //The passwords do not match.
       //Set the color to the bad color and
       //notify the user.
       pass2.style.backgroundColor = badColor;
       message.style.color = badColor;
   }
}
</script> -->
<?php
    echo form_open("linkregister");?>
เลขบัตรประจำตัวประชาชน : <input class="form-control" id="idcade" type="text" name="idcard" pattern="[0-9]{13}" placeholder="Enter your ID number"
onkeyup="checkid()" required><br><br>
<input type="text" id="ssid" name="ssid"><br><br>

Password : <input class="form-control" id="searchfielddd"  type="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
 placeholder="Enter password" title="Invalid Format" required><br><br>
<input type="text" id="ppassword" name="ppassword"><br><br>

 Re-Password : <input class="form-control" id="searchfieldd"  type="password" name="conpassword" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
 placeholder="Confirm password" title="Invalid Format" onkeyup="checkPass()" required><br><br>
 <input type="text" id="cpassword" name="cpassword"><br><br>


 <button type="submit" id="nossss" disabled>submit</button><br>
<?php echo form_close(); ?><br><br><br>

<!-- <input type="text" name="pass" id="pass">
 <button onclick="myFunction();plusone();">Click me</button><br>
 <input type="text" name="nos" id="mycom">
 <input type="text" name="noon" id="mycom2">
 <span id="checkidd" class="checkidd"><br></span> -->
 <input type="text" id="A1" name="A" value="" onkeyup="change()">
 <input type="text" id="B1" name="B" value="">
 <button type="submit" onclick="click()">nos</button>
 <span id='Logo' style="display:none">455555</span>

 <script>
 var a;
 function click(){
   var a = document.getElementById("Logo").innerHTML;
   alert(a);
 }

 function change(){
   $("#A1").change(function() {
    $("#B1").val($("#A1").val());
 }


 function myFunction2() {
    document.getElementById("nossss").disabled = false;
}

 function checkPass()
 {
     //Store the password field objects into variables ...
     var pass1 = document.getElementById('searchfielddd');
     var pass2 = document.getElementById('searchfieldd');
     var s1 = document.getElementById('ssid');
    //  var s2 = document.getElementById('ppassword');
    //  var s3 = document.getElementById('cpassword');
     //Store the Confimation Message Object ...
     var message = document.getElementById('confirmMessage');
     //Set the colors we will be using ...
     var goodColor = "#66cc66";
     var badColor = "#ff6666";
     //Compare the values in the password field
     //and the confirmation field
     if(pass1.value == pass2.value){
         //The passwords match.
         //Set the color to the good color and inform
         //the user that they have entered the correct password
         pass2.style.backgroundColor = goodColor;
         message.style.color = goodColor;
         message.innerHTML = "Passwords Match!"
         a = true;
         document.write(a);
     }else{
         //The passwords do not match.
         //Set the color to the bad color and
         //notify the user.
         pass2.style.backgroundColor = badColor;
         message.style.color = badColor;
         message.innerHTML = "Passwords Do Not Match!"
     }
 }

 function checkid() {

     var pass1 = document.getElementById('idcade').value;
     var sum = 0;
     var goodColor = "#66cc66";
     var badColor = "#ff6666";
     for(i = 0;i < pass1.length-1 ;i++){
       sum = sum + parseInt(pass1[i]) * (13-i);
     }
     sum = sum % 11;
     sum = 11 - sum;

     if(sum == pass1[12]){
       document.getElementById("idcade").style.backgroundColor = goodColor;
     }else{
       document.getElementById("idcade").style.backgroundColor = badColor;
     }
     }

 function myFunction() {

     var pass1 = document.getElementById('pass').value;
     var input = document.getElementById("mycom");
     var sum = 0;
     for(i = 0;i < pass1.length-1 ;i++){
       sum = sum + parseInt(pass1[i]) * (13-i);
     }
     sum = sum % 11;
     sum = 11 - sum;

     if(sum == pass1[12]){
      //
       input.value  = sum ;
       document.getElementById("checkidd").innerHTML = true;
     }else{
       document.getElementById("checkidd").innerHTML = false;
       document.getElementById("mycom").value = sum;
     }
 }

 function plusone(){
   var a = 5 + 3;
   document.getElementById("mycom2").value = a;
 }

 function disablebutton() {
   var confirmpass = document.getElementById('id')
 }
 </script>



<!-- <script>
function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}
</script> -->

   <!-- <script type="text/javascript">
      var i = 1;
      function sayHello() {
          document.write( "setInterval Call"+i );
          i++;
      }
      setInterval("sayHello()", 1000);
  </script> -->

 </body>
 </html>
