<?php
if(!isset($error)){
  $check = -1;
}else if(isset($error)){
  $check = $error;
} ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>สมัครสมาชิก</title>
    <meta charset="utf-8">
    <link rel="icon" href="Boostap2/img/trumpet.png" type="image/x-icon">
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
    <?php if (isset($word)) {
     $words = $word;
    } ?>
    var getcode2 = '<?php echo $words;?>';
        $(document).ready(function(){
            jQuery('.camera_wrap').camera();
            $("#ccha").keyup(function() {
        			var getcode = $('#ccha').val();
        			if (getcode == getcode2) {
        					$("#submitlogin").prop('disabled', false);
        			}else{
        					$("#submitlogin").prop('disabled', true);
        			}
        		});


            $('#Refreshcaptcha').click(function() {
               refreshcaptcha();
            });
            $('#logout').click(function () {
              Logout();
            });
        });
    </script>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/jquery.mobile.customized.min.js');?>"></script>

</head>

<body>
  <!--=====================================================popup===================================================-->
  <!-- BEGIN # MODAL LOGIN -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-content">
              <div class="modal-header" align="center">
                  <img class="img-circle" id="img_logo" src="<?php echo base_url('Boostap2/img/login.png');?>">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                  </button>
              </div>

              <!-- Begin # DIV Form -->
              <div id="div-forms">
                  <!-- Begin # Login Form -->
                    <form id="login-form">
                      <div class="modal-body">
                          <div id="div-login-msg">
                              <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                              <div style="text-align: center;">
                                  <span id="text-login-msg">
                                      Type your Email and password.
                                  </span>
                              </div>
                          </div><center>
                          Email : <input id="email" class="form-control" type="text" placeholder="E-Mail"><br>
                          Password : <input id="password" class="form-control" type="password" placeholder="Password"><br>
                          <span id="showerror" class="showerror"></span>

                          <?php if (isset($image)) {
                            $images = $image;
                            echo '<br><span id="captcha" style="color:#ff0000;text-align:center;">'  . $images . '</span>';
                          }else {
                          } ?>

                          <button type="button" id="Refreshcaptcha"><img src="<?php echo base_url('recaptcha.png');?>" style="max-height: 20px; max-width: 20px;"/></button>
                          <br> Passcode : <input class="form-control" id="ccha" type="text" name="ccha" ><br>
                          <input type="checkbox" > Remember me
                          </center>
                      </div>
                      <div class="modal-footer">

                          <center>
                          <div>
                             <button type="submit" class="btn btn_" id="submitlogin" disabled>Login</button>
                               </div>
                          </center>
                          <div>
                            <button id="login_lost_btn" type="button" class="btn btn-link"><a href="<?php echo base_url('index.php/forgetpasswordCTRL');?>" style="color:black;">Forget Password?</a></button>
                            <button type="button" class="btn btn-link"><a href="<?php echo base_url('index.php/linkregister');?>" style="color:black;">Register</a></button>
                          </div>
                      </div>
                    </form>

                  <!-- End # Login Form -->

                  <!-- Begin | Lost Password Form -->
                  <form id="lost-form" style="display:none;">
                      <div class="modal-body">
                          <div id="div-lost-msg">
                              <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                              <div style="text-align: center;">
                              <span id="text-lost-msg">Type your e-mail.</span>
                            </div>
                          </div>
                          <input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
                      </div>
                      <div class="modal-footer">
                          <center>
                          <div>
                              <button type="submit" class="btn btn_">Send</button>
                          </div>
                          <div>
                              <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                              <button type="button" class="btn btn-link">Register</button>
                          </div>
                              </center>
                      </div>
                  </form>
                  <!-- End | Lost Password Form -->

                  <!-- Begin | การ์ด 14 เลือกรับ กับ บริจาก -->
                  <form id="14-form" style="display:none;">
                      <div class="modal-body">
                        <center><span><h5>สวัสดีคุณ : <span id="showname"></span></h5></span></center>
                        <center><span><h5>ยินดีต้อนรับสู่ We shared 4 you</h5></span></center>
                          <div id="div-14-msg">
                            <div id="icon-14-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <div style="text-align: center;">
                                <span id="text-14-msg">เลือกรายการ</span>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <center>
                          <button  type="submit" class="btn btn_" id='donate'><a href="<?php echo base_url('index.php/linkdonate');?>">ฉันต้องการจะบริจาคสิ่งของ</a></button>&nbsp;&nbsp;&nbsp;
                          <button  type="submit" class="btn btn_" id='receive'><a href="<?php echo base_url('index.php/linkquery');?>">ฉันต้องการรับบริจาคสิ่งของ</a></button>
                          </center>
                      </div>
                  </form>
                  <!-- End | การ์ด 14 เลือกรับ กับ บริจาก -->

              </div>
              <!-- End # DIV Form -->

          </div>

  </div>
  <!-- END # MODAL LOGIN -->
<!--==============================header=================================-->
<header>
    <div class="container">
    	<div class="row">
        	<div class="span12">
            	<div class="header-block clearfix">
                    <div class="clearfix header-block-pad">
                        <h1 class="brand"><a href="<?php echo base_url('index.php/startweb');?>"><img src="<?php echo base_url('Boostap2/img/logo1.png');?>" alt=""></a><span><strong>Brand of musical instruments donation </strong></span></h1>
                       <span class="contacts" align="right">
                         <span class="contacts">
                             <h5>เข้าสู่ระบบ</h5>
                             <a href="#" class="btn btn_" role="button" data-toggle="modal" data-target="#login-modal" id="loginmodal"><span style="color:#FFFFFF;text-align:center;">Login</span></a>
                             <br><br>สมัครสมาชิก : <a href="#" data-toggle="modal" data-target="#register-modal">register</a>
                         </span>
                        </span>
                    </div>

                    <div class="navbar navbar_ clearfix">
                        <div class="navbar-inner navbar-inner_">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <ul class="nav sf-menu">
                                        <li class="active li-first"><a href="<?php echo base_url('index.php/startweb');?>"><em class="hidden-phone"></em>&nbsp;Home</a></li>
                                        <li><a href="#">Statistic</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li class="sub-menu"><a href="#">about</a>
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
<!--=============================================================================================-->
<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span4">

                    <br><br><br><br><br>
                   <div class="contact-form">
                    <form action="<?= base_url() ?>index.php/linkdonate/donateControl" method="post" enctype="multipart/form-data">
                        <table width="300" height="400" border="5">

                                <td>
                        <img id='output' height=500 width=400 />
                                </td>

                            </table>
                        อัพโหลดรูป : <br><input type="file" name="donatePathIMG" size="30" onchange='openFile()'/><br>


                </div>
                </div>
                <div class="span6">
                    <div class="contact-form">
                    <?php
                    if ($check == 0) {
                        echo '<br><span style="color:#ff0000;text-align:center;">คุณยังไม่ได้เลือกรูปภาพหรือรูปภาพมีขนาดใหญ่ไป</span>';
                    }elseif ($check == 1) {
                        echo '<br><span style="color:#ff0000;text-align:center;">กรุณากรอกให้ครบทุกช่อง</span>';
                    }
                    ?>

                    <h4>กรอกข้อมูลเครื่องดนตรี</h4>
                            <div class="success">Contact form submitted!<strong><br>We will be in touch soon.</strong> </div>
                            <fieldset>

                                    ชื่อเครื่องดนตรี :<input type="text" name="donateName" id='donateName' >

                                <br>

                                    ขนาดความกว้าง (cm.) : <input type="text" class="form-control" name="donateLength" id="donateLength" >
                                <br>

                                    ขนาดความยาว (cm.) : <input type="text" class="form-control" name="donatewidth" id="donatewidth" >
                                <br>


                                    น้ำหนัก(kg.) : <input type="text" class="form-control" name="donateweight" id="donateweight" >
                                <br>


                                    จำนวนชิ้น : <input type="text" class="form-control" name="donateEA" id="donateEA" >
                                <br>

                                    สภาพโดยรวมเฉลี่ย (%) : <br><input type="number"  min="1" max="100" name="donatecondition" id="donatecondition">

                                <br> <br><br>


                                    สี : <input type="text" class="form-control" name="donatecolor" id="donatecolor">
                                    <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span>
                                <br><br><br><br><br>

                                <label class="Type">
                                    ประเภท : <select id="music" name="donateType" id='donateType'  style="color: #000000;">
                                        <option value="เครื่องสาย">เครื่องสาย</option>
                                        <option value="เครื่องตี">เครื่องตี</option>
                                        <option value="เครื่องดีด">เครื่องดีด</option>
                                        <option value="เครื่องสี">เครื่องสี</option>
                                        <option value="เครื่องเป่า">เครื่องเป่า</option>
                                    </select>
                                </label>

                                <label class="Type">
                                    รายละเอียด :
                                    <textarea id="donateDetail" rows="4" cols="32" name="donateDetail" ></textarea>
                                </label>
                                <h4>เลือกการส่ง :</h4>
                                <label class="Typesend">
                                    <h5>ส่งไปรษณีย์<input name="donateTypesend" type="radio" class="donatesend" id="donatesend1" value="1" onClick="uninput();" checked/></h5>
                                    </label>
                                <label class="Typesend">
                                    <h5>รับที่องค์กร<input name="donateTypesend" type="radio" class="donatesend" id="donatesend2" value="2" onClick="uninput();" /></h5>
                                </label>
                                <label class="Typesend">
                                    <h5>นัดรับที่<input name="donateTypesend" type="radio" class="donatesend" id="donatesend3" value="3" onClick="showinput();" /></h5>
                                </label>

                                <div id="frm_txt" style="display:none;">
                                    สถานที่นัดรับ : <input type="text" name="donatesendDetail" id="txtnum" /><br/>
                                </div>

                            </fieldset>
                        <div class="pull-right">
                            <button type='submit' class="btn btn_ btn-small_" id="submitdonate">บริจาค</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="span4 float2">
            </div>
            <div class="span8 float">
                <ul class="footer-menu">
                    <li><a href="#" class="current">Home Page</a>|</li>
                    <li><a href="#">Statistic</a>|</li>
                    <li><a href="#">FAQ</a>|</li>
                    <li><a href="#">about</a>|</li>
                </ul>
                WeShar   &copy;  2017  |   Email : <a rel="nofollow" href="http://www.weshar@kku.com" target="_blank">weshar@kku.com</a>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="<?php echo base_url('Boostap2/js/bootstrap.js');?>"></script>
</body>
</html>
