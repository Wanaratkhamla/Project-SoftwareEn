<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Metallic Website Template, free css template, free website template</title>
<meta name="keywords" content="Metallic Website Template, free css template, free website template, CSS, XHTML" />
<meta name="description" content="Metallic Website - free xhtml/css website template by templatemo.com" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('Boostap/templatemo_style.css');?>" media="all"/>


</head>
<body>
<div id="templatemo_container">
	<div id="templatemo_top_panel">
		<!--  Free CSS Templates @ www.TemplateMo.com  -->
    	<div id="top_panel_ls">
            <div id="templatemo_site_title">Metallic Website</div>
        </div>

      <div id="top_panel_rs">
            <div id="search_section">
                <form action="#" method="get">
                    <input type="text" name="q" size="10" id="searchfield" title="searchfield" />
                  <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
                </form>
            	<div class="cleaner"></div>
            </div>

            <div id="templatemo_menu">
                <ul>
                    <li><a href="#" class="current"><span></span>Home</a></li>
                    <li><a href="#"><span></span>Products</a></li>
                    <li><a href="#"><span></span>Services</a></li>
                    <li><a href="#"><span></span>Company</a></li>
                    <li><a href="#"><span></span>Contact</a></li>
                </ul>
                <div class="cleaner"></div>
            </div> <!-- end of menu -->

            <div class="cleaner"></div>
	  </div>
    </div> <!-- end of top _panel -->
    <center><div id = "ct"></div>
			<?php
					echo form_open("usercontroller");?>
    <div id="templatemo_content">
        <div id="banner_header_01">Register</div>
        <div id="banner_header_02">สมัครเพื่อใช้งานฟังก์ชันของเว็บไซต์</div>
        <div id="banner_text">
            <div id="search_section">

     <div class="col-sm-8">
     Username : <input  id="username" type="text" name="username" pattern="\w{2,}" placeholder="Enter username" required autofocus>
     </div><br>
  </div>
  <div class="search_section">
     <div class="col-sm-8">
      Password : <input class="form-control" id="searchfielddd"  type="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
			 placeholder="Enter password" title="Invalid Format" required>
			<p>รหัสผ่านอย่างน้อย 8 ตัว ประกอบด้วย ตัวอักษรพิมพ์ใหญ่ พิมพ์เล็ก ตัวเลข อย่างน้อย 1 ตัว</p>
     </div>
  </div>
  <div class="search_section">
     <div class="col-sm-8">
			  <label for="conpassword">Confirm Password:</label>
      Re-Password : <input class="form-control" id="searchfieldd"  type="password" name="conpassword" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
			placeholder="Confirm password" title="Invalid Format" onkeyup="checkPass(); return false;" required><br>
			<span id="confirmMessage" class="confirmMessage"></span>
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
		 </script>

  </div>
	  </div>
  <div class="search_section">
    <div class="col-sm-8">
      ชื่อ : <input class="form-control" id="fname" type="text" name="fname" placeholder="Enter name" required>
    </div><br>
  </div>
   <div class="search_section">
    <div class="col-sm-8">
      สกุล : <input class="form-control" id="lname" type="text" name="lname" placeholder="Enter surname" required>
    </div><br>
  </div>


   <div class="search_section">
    <div class="col-sm-8">
      เลขบัตรประจำตัวประชาชน : <input class="form-control" id="idcade" type="text" name="idcard" pattern="[0-9]{13}" placeholder="Enter your ID number"
			onkeyup="checkid()" required>
			<br>
    </div><br>

  </div>

	<script>
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
  </script>


      <div class="search_section">
        <div class="col-sm-8">
         ที่อยู่ : <textarea id="Address" class="form-control" rows="4" cols="32" name="Address" required></textarea>
        </div>
      </div><br>

   <div class="search_section">
       <div class="col-sm-8">
         อำเภอ : <input class="form-control" id="Province" type="text" name="Province" placeholder="Enter District Residents" required>
       </div><br>
    </div>

   <div class="search_section">
       <div class="col-sm-8">
       จังหวัด : <input class="form-control" id="Didtrict" list="จังหวัด" name="Didtrict" required>
        <datalist id="จังหวัด">
          <option value="กรุงเทพมหานคร">
          <option value="กระบี่">
          <option value="กาญจนบุรี">
          <option value="กาฬสินธุ์">
          <option value="กำแพงเพชร">
          <option value="ขอนแก่น">
          <option value="จันทบุรี">
          <option value="ฉะเชิงเทรา">
          <option value="ชลบุรี">
          <option value="ชัยนาท">
          <option value="ชัยภูมิ">
          <option value="ชุมพร">
          <option value="เชียงราย">
          <option value="เชียงใหม่">
          <option value="ตรัง">
          <option value="ตราด">
          <option value="ตาก">
          <option value="นครนายก">
          <option value="นครปฐม">
          <option value="นครพนม">
          <option value="นครราชสีมา">
          <option value="นครศรีธรรมราช">
          <option value="นครสวรรค์">
          <option value="นนทบุรี">
          <option value="นราธิวาส">
          <option value="น่าน">
          <option value="บึงกาฬ">
          <option value="บุรีรัมย์">
          <option value="ปทุมธานี">
          <option value="ประจวบคีรีขันธ์">
          <option value="ปราจีนบุรี">
          <option value="ปัตตานี">
          <option value="พระนครศรีอยุธยา">
          <option value="พังงา">
          <option value="พัทลุง">
          <option value="พิจิตร">
          <option value="พิษณุโลก">
          <option value="เพชรบุรี">
          <option value="เพชรบูรณ์">
          <option value="แพร่">
          <option value="พะเยา">
          <option value="ภูเก็ต">
          <option value="มหาสารคาม">
          <option value="มุกดาหาร">
          <option value="แม่ฮ่องสอน">
          <option value="ยะลา">
          <option value="ยโสธร">
          <option value="ร้อยเอ็ด">
          <option value="ระนอง">
          <option value="ระยอง">
          <option value="ราชบุรี">
          <option value="ลพบุรี ">
          <option value="ลำปาง">
          <option value="ลำพูน">
          <option value="เลย">
          <option value="ศรีสะเกษ">
          <option value="สกลนคร">
          <option value="สงขลา">
          <option value="สตูล">
          <option value="สมุทรปราการ">
          <option value="สมุทรสงคราม">
          <option value="สมุทรสาคร">
          <option value="สระแก้ว">
          <option value="สระบุรี">
          <option value="สิงห์บุรี">
          <option value="สุโขทัย">
          <option value="สุพรรณบุรี">
          <option value="สุราษฎร์ธานี">
          <option value="สุรินทร์">
          <option value="หนองคาย">
          <option value="หนองบัวลำภู">
          <option value="อ่างทอง">
          <option value="อุดรธานี">
          <option value="อุทัยธานี">
          <option value="อุตรดิตถ์">
          <option value="อุบลราชธานี">
          <option value="อำนาจเจริญ">
        </datalist>
       </div>
      </div><br>

    <div class="search_section">
       <div class="col-sm-8">
         รหัสไปรษณีย์ : <input class="form-control" id="Postcode" type="text" name="Postcode" pattern="[0-9]{5}" placeholder="Enter postcode">
          </div>
      </div><br>

    <div class="search_section">
       <div class="col-sm-8">
        โทรศัพท์ : <input class="form-control" id="Tel" type="text" name="Tel" pattern="\d\d-\d\d\d\d-\d\d\d\d" title="08-6371-8551" placeholder="Pattern:08-9584-8910" required>
          </div>
      </div><br>

    <div class="search_section">
       <div class="col-sm-8">
        E-mail : <input class="form-control" id="Email" type="text" name="Email" placeholder="Enter your email address" multiple>
          </div>
      </div><br>
    </fieldset>
   <div class="search_section">
    <label class="col-sm-2 control-label"></label>
     <div class="col-sm-8">
        <button type="submit" class="btn btn-default">สมัครสมาชิก</button><br><br>
				<br><br>
     </div>
   </div>
        </div>
    </div>
		<?php echo form_close(); ?><!-- end of banner -->
    <div id = "cb"></div>
</center>

    <div id="templatemo_footer">
        Copyright © 2048 <a href="#">Your Company Name</a> |
		<a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by
        <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    </div> <!-- end of footer -->
<!--  Free Web Templates @ TemplateMo.com  -->
</div> <!-- end of container -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>


</body>
</html>
