<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo base_url('Boostap2/img/favicon.ico');?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url('Boostap2/img/favicon.ico');?>" type="image/x-icon" />
    <link rel="icon" href="<?php echo base_url('Boostap2/img/trumpet.png');?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('Boostap2/css/bootstrap.css');?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('Boostap2/css/responsive.css');?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('Boostap2/css/style.css');?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('Boostap2/css/pop-up.css');?>" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/jquery.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/jquery.easing.1.3.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/jquery.ui.totop.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/forms.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/camera.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/function.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/superfish.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/pop-up.js');?>"></script>

    <script>
          function openFile() {
          var input = event.target;
          var reader = new FileReader();
          reader.onload = function(){
          var dataURL = reader.result;
          var output = document.getElementById('output');
          output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
      };
    </script>

</head>

<body>
<!--==============================header=================================-->
<header>
    <div class="container">
    	<div class="row">
        	<div class="span12">
            	<div class="header-block clearfix">
                    <div class="clearfix header-block-pad">
                        <h1 class="brand"><a href="index.html"><img src="<?php echo base_url('Boostap2/img/logo.png');?>" alt=""></a><span>Fashion brand</span></h1>
                        <span class="contacts">

                            <button class="btn btn_" role="button" id="loginmodal"><span style="color:#FFFFFF;text-align:center;">Logout</span></button>
                        </span>
                    </div>

                    <div class="navbar navbar_ clearfix">
                        <div class="navbar-inner navbar-inner_">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <ul class="nav sf-menu">
                                      <li class="li-first"><a href="index.html"><em class="hidden-phone"></em><span class="visible-phone">Home</span></a></li>
                                      <li class="sub-menu"><a href="index-1.html">about</a>
                                        <ul>
                                          <li><a href="#">Welcome Message</a></li>
                                          <li class="sub-menu"><a href="#">Company Profile</a>
                                            <ul>
                                              <li><a href="#">Our Capabilities</a></li>
                                              <li><a href="#">Advantages</a></li>
                                              <li><a href="#">Work Team</a></li>
                                              <li><a href="#">Partnership</a></li>
                                              <li><a href="#">Support</a></li>
                                            </ul>
                                          </li>
                                          <li><a href="#">Our History</a></li>
                                          <li><a href="#">Testimonials</a></li>
                                        </ul>
                                      </li>
                                      <li><a href="index-2.html">services</a></li>
                                      <li><a href="index-3.html">collections</a></li>
                                      <li><a href="index-4.html">styles</a></li>
                                      <li class="active"><a href="index-5.html">contacts</a></li>
                                    </ul>
                                </div>
                                <ul class="social-icons">
                                  <li><a href="#"><img src="<?php echo base_url('Boostap2/img/icon-1.png');?>" alt=""></a></li>
                                  <li><a href="#"><img src="<?php echo base_url('Boostap2/img/icon-2.png');?>" alt=""></a></li>
                                  <li><a href="#"><img src="<?php echo base_url('Boostap2/img/icon-3.png');?>" alt=""></a></li>
                                  <li><a href="#"><img src="<?php echo base_url('Boostap2/img/icon-4.png');?>" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
       </div>
    </div>
</header>
<!-- Register -->
<h3 class="registext" align="center">สมัครเข้าใช้งานเว็บไซต์</h3>
<table width="1150" height="400" border="1" align="center">
        <td>
<div class="container-resub" align="center">

      <!-- ส่วนอัพรูป -->
        <div class="confirmId">
        <h5 class="textHeader">เลือกรูปบัตรประจำตัวประชาชนเพื่อยืนยันตัวตน</h5><br>
                     <table width="300" height="400" border="5">

                                <td>
                        <img id='output' height=500 width=400 />
                                </td>

                            </table><br>
                        อัพโหลดรูป : <input type="file" name="donatePathIMG" size="30" onchange='openFile()'/><br><br>
        </div>
      <!--  -->
    </td>
    <td align="center">
      <section class="register-left">
      <span id="Errorregister"></span>
      <h5 class="textHeader">สมัครเพื่อใช้งานฟังก์ชันของเว็บไซต์</h5>
      <form method="post" action="index.html">
<!--      <div class="reg_section password">-->
      <input type="text" name="email" value="" placeholder="ที่อยู่อีเมล์"><br><span id="Emailerror">กรุณากรอกEmailของท่าน</span><br>
      <input type="password" name="password" value="" placeholder="รหัสผ่าน"><br>
      <input type="password" name="confirm" value="" placeholder="ยืนยันรหัสผ่าน">
      <br><i>รหัสผ่านอย่างน้อย 8 ตัว ประกอบด้วยตัวอักษรพิมพ์ใหญ่ พิมพ์เล็ก ตัวเลข อย่างน้อย 1 ตัว</i><br>
<!--      </div>-->
<!--      <section class="register-right-2">-->
        <h5 class="textHeader">ข้อมูลส่วนตัว</h5>
        <input type="text" name="fname" value="" placeholder="ชื่อ"><br>
        <input type="text" name="lname" value="" placeholder="สกุล"><br>
<!--      </section>-->
<!--      <div class="reg_section-password-next">-->
        <input type="text" name="idCard" value="" placeholder="เลขบัตรประจำตัวประชาชน"><br><span id="checkerrorID">กรุณาระบุเลขบัตรประชนของท่าน</span><br><br>
        <textarea name="textarea" id="address" placeholder="ที่อยู่"></textarea><br>
        <input type="text" name="distric" value="" placeholder="อำเภอ"><br>
      <select>
        <option value="">จังหวัด</option>
        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
        <option value="กระบี่">กระบี่</option>
        <option value="กาญจนบุรี">กาญจนบุรี</option>
        <option value="กาฬสินธุ์">กาฬสินธุ์</option>
        <option value="กำแพงเพชร">กำแพงเพชร</option>
        <option value="ขอนแก่น">ขอนแก่น</option>
        <option value="จันทบุรี">จันทบุรี</option>
        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
        <option value="ชลบุรี">ชลบุรี</option>
        <option value="ชัยนาท">ชัยนาท</option>
        <option value="ชัยภูมิ">ชัยภูมิ</option>
        <option value="ชุมพร">ชุมพร</option>
        <option value="เชียงราย">เชียงราย</option>
        <option value="เชียงใหม่">เชียงใหม่</option>
        <option value="ตรัง">ตรัง</option>
        <option value="ตราด">ตราด</option>
        <option value="ตาก">ตาก</option>
        <option value="นครนายก">นครนายก</option>
        <option value="นครปฐม">นครปฐม</option>
        <option value="นครพนม">นครพนม</option>
        <option value="นครราชสีมา">นครราชสีมา</option>
        <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
        <option value="นครสวรรค์">นครสวรรค์</option>
        <option value="นนทบุรี">นนทบุรี</option>
        <option value="นราธิวาส">นราธิวาส</option>
        <option value="น่าน">น่าน</option>
        <option value="บึงกาฬ">บึงกาฬ</option>
        <option value="บุรีรัมย์">บุรีรัมย์</option>
        <option value="ปทุมธานี">ปทุมธานี</option>
        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
        <option value="ปราจีนบุรี">ปราจีนบุรี</option>
        <option value="ปัตตานี">ปัตตานี</option>
        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
        <option value="พังงา">พังงา</option>
        <option value="พัทลุง">พัทลุง</option>
        <option value="พิจิตร">พิจิตร</option>
        <option value="พิษณุโลก">พิษณุโลก</option>
        <option value="เพชรบุรี">เพชรบุรี</option>
        <option value="เพชรบูรณ์">เพชรบูรณ์</option>
        <option value="แพร่">แพร่</option>
        <option value="พะเยา">พะเยา</option>
        <option value="ภูเก็ต">ภูเก็ต</option>
        <option value="มหาสารคาม">มหาสารคาม</option>
        <option value="มุกดาหาร">มุกดาหาร</option>
        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
        <option value="ยะลา">ยะลา</option>
        <option value="ยโสธร">ยโสธร</option>
        <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
        <option value="ระนอง">ระนอง</option>
        <option value="ระยอง">ระยอง</option>
        <option value="ราชบุรี">ราชบุรี</option>
        <option value="ลพบุรี ">ลพบุรี</option>
        <option value="ลำปาง">ลำปาง</option>
        <option value="ลำพูน">ลำพูน</option>
        <option value="เลย">เลย</option>
        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
        <option value="สกลนคร">สกลนคร</option>
        <option value="สงขลา">สงขลา</option>
        <option value="สตูล">สตูล</option>
        <option value="สมุทรปราการ">สมุทรปราการ</option>
        <option value="สมุทรสงคราม">สมุทรสงคราม</option>
        <option value="สมุทรสาคร">สมุทรสาคร</option>
        <option value="สระแก้ว">สระแก้ว</option>
        <option value="สระบุรี">สระบุรี</option>
        <option value="สิงห์บุรี">สิงห์บุรี</option>
        <option value="สุโขทัย">สุโขทัย</option>
        <option value="สุพรรณบุรี">สุพรรณบุรี</option>
        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
        <option value="สุรินทร์">สุรินทร์</option>
        <option value="หนองคาย">หนองคาย</option>
        <option value="หนองบัวลำภู">หนองบัวลำภู</option>
        <option value="อ่างทอง">อ่างทอง</option>
        <option value="อุดรธานี">อุดรธานี</option>
        <option value="อุทัยธานี">อุทัยธานี</option>
        <option value="อุตรดิตถ์">อุตรดิตถ์</option>
        <option value="อุบลราชธานี">อุบลราชธานี</option>
        <option value="อำนาจเจริญ">อำนาจเจริญ</option>
      </select><br>
      <input type="text" name="postcode" value="" placeholder="รหัสไปรษณีย์"><br>
      <input type="text" name="telephone" value="" placeholder="หมายเลขโทรศัพท์"><br>
   <!-- วาง Captcha -->
   <button type="submit" class="btn btn_" id="submitlogin">สมัครสมาชิก</button>
          </form>
          </section>
          </td>
 </div>
 </table>
<!--  </div>-->
<!-- Register -->
<footer>
   <div class="container">
    <div class="row">
      <div class="span4 float2">
    </div>
    <div class="span8 float">
      	<ul class="footer-menu">
        	  <li><a href="index.html">Home Page</a>|</li>
            <li><a href="index-1.html">about</a>|</li>
            <li><a href="index-2.html">Services</a>|</li>
            <li><a href="index-3.html">collections</a>|</li>
            <li><a href="index-4.html">styles</a>|</li>
            <li><a href="index-5.html" class="current">Contacts</a></li>
        </ul>
          WeShar   &copy;  2017  |   Email : <a rel="nofollow" href="http://www.weshar@kku.com" target="_blank">weshar@kku.com</a>
      </div>
    </div>
   </div>
</footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
