<?php
if(!isset($error)){
  $check = 0;
}else if(isset($error)){
  $check = $error;
} ?>

<div id="testword">noss</div>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="Boostap2/img/trumpet.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url('Boostap2/img/trumpet.png');?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url('Boostap2/css/bootstrap.css');?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('Boostap2/css/responsive.css');?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('Boostap2/css/camera.css');?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('Boostap2/css/style.css');?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('Boostap2/css/pop-up.css');?>" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/jquery.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/jquery.easing.1.3.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/camera.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/superfish.js');?>"></script>
    <script src="<?php echo base_url('Boostap2/js/jquery.ui.totop.js');?>" type="text/javascript"></script>
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
            $('#testrecaptcha').click(function() {
               $.ajax({
                 url:"index.php/startweb/refreshcaptchaimage",
                 type: "POST",
                 dataType: 'json',
                success:function(res){
                  alert(res.a);
                  alert(res.b);
                  // document.getElementById("captcha").innerHTML = res;
                }
               });
            });
        });
    </script>
    <!--[if lt IE 8]>
    <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
    <![endif]-->

    <!--[if (gt IE 9)|!(IE)]><!-->
    <script type="text/javascript" src="<?php echo base_url('Boostap2/js/jquery.mobile.customized.min.js');?>"></script>
    <!--<![endif]-->
    <!--[if lt IE 9]>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?font-family=Roboto' rel='stylesheet' type='text/css'>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="Boostap2/css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="Boostap2/css/ie.css" type="text/css" media="screen">
    <![endif]-->
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
                  <?php
                  $attributes = array("method" => "POST", "autocomplete" => "on");
                  echo form_open("checklogin", $attributes);?>
                    <div class="modal-body">
                        <div id="div-login-msg">
                            <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <div style="text-align: center;">
                                <span id="text-login-msg">
                                    Type your username and password.
                                </span>
                            </div>
                        </div><center>
                        Username : <input id="username" class="form-control" type="text" placeholder="Username" name="username"><br>
                        Password : <input id="password" class="form-control" type="password" placeholder="Password" name="password"><br>
                        <span id="showerror" class="showerror"></span>

                        <?php echo '<br><span id="captcha" style="color:#ff0000;text-align:center;">'  . $image . '</span>'; ?>
                        <button type="button" id="testrecaptcha">test</button>
                        <br> Passcode : <input class="form-control" id="ccha" type="text" name="ccha" multiple><br>
                        <input type="checkbox" > Remember me
                        </center>
                    </div>
                    <div class="modal-footer">

                        <center>
                        <div>
                           <button type="button" class="btn btn_" id="submitregister" disabled=>Login</button>
                        </center>
                        </div>
                        <div>
                            <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            <button type="button" class="btn btn-link">Register</button>
                        </div>


                        </center>
                    </div>
                <?php echo form_close(); ?></center>
                <!-- End # Login Form -->

                <!-- Begin | Lost Password Form -->
                <form id="lost-form" style="display:none;">
                    <div class="modal-body">
                        <div id="div-lost-msg">
                            <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-lost-msg">Type your e-mail.</span>
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

            </div>
            <!-- End # DIV Form -->

        </div>

</div>
<!-- END # MODAL LOGIN -->
<!--==============================header Home=================================-->
<header class="p0">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="header-block clearfix">
                    <div class="clearfix header-block-pad">
                        <h1 class="brand"><a href="#"><img src="<?php echo base_url('Boostap2/img/logo1.png');?>" alt=""></a><span><strong>Brand of musical instruments donation </strong></span></h1>

                        <span class="contacts">
                            <h5>เข้าสู่ระบบ</h5>
                            <!--เรียกใช้ popup logint -->
                            <a href="#" class="btn btn_" role="button" data-toggle="modal" data-target="#login-modal" id="loginmodal"><span style="color:#FFFFFF;text-align:center;">Login</span></a>
                            <br><br>สมัครสมาชิก : <a href="#" data-toggle="modal" data-target="#register-modal">register</a>
                        </span>
                    </div>
                    <div class="navbar navbar_ clearfix">
                        <div class="navbar-inner navbar-inner_">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <ul class="nav sf-menu">
                                        <li class="active li-first"><a href="#"><em class="hidden-phone"></em>&nbsp;Home</a></li>
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

    <div class="slider">
        <div class="camera_wrap">
            <div data-src="<?php echo base_url('Boostap2/img/guitarSlide1.jpg');?>"></div>
            <div data-src="<?php echo base_url('Boostap2/img/pianoSlide2.jpg');?>"></div>
            <div data-src="<?php echo base_url('Boostap2/img/violinSlide1.jpg');?>"></div>
            <div data-src="<?php echo base_url('Boostap2/img/gujerngSlide1.jpg');?>"></div>
        </div>
    </div>
</header>

<section id="content" class="main-content">
    <div class="container">
        <div class="row">
            <div class="span8">
                <div class="clearfix cols-1">
                    <h2 class="indent-2">News</h2>
                    <div class="span4 left-0">
                        <h4 class="indent-2">ขิม 1000 ปี</h4>
                        <p class="lead">ขิม 1000 ปี จากราชวงศ์ภาคคอม มหาวิทยาลัยขอนแก่น สร้างปี 1017.</p>
                        <figure class="img-indent"><img src="<?php echo base_url('Boostap2/img/News/kim1000pee.jpg');?>" alt="" class="img-radius"></figure>
                        แม้ว่าขิมหรือพิณผีเสื้อตัวนี้จะมีต้นกำเนิดอยู่ห่างไกลถึงมหาอาณาจักรเปอร์เซียนโบราณแต่ก็ได้โบยบินผ่านกาลเวลาและเส้นทางสายไหมอันยาวไกลเรื่อยมาจนถึงลุ่มแม่น้ำเจ้าพระยา จนผีเสื้อตัวนี้ได้กลายมาเป็นผีเสื้อไทยโดยสมบูรณ์ได้ทำหน้าที่ขับลำนำเพลงไทยอันอ่อนหวานไพเราะน่าฟังให้ปรากฏประจักษ์แก่ชาวโลกมาจนถึงปัจจุบันนับเป็นเครื่องดนตรีที่น่าสนใจและน่าอัศจรรย์มากชิ้นหนึ่งทีเดียว
                         <br>
                        <h4 class="indent-2">ปี่ พระอภัยมณี</h4>
                        <p class="lead">ปี่ ที่ใช้ฆ่าผีเสื้อสมุด ผีเสื้อหนังสือ ผีเสื้อวิจัย ผีเสื้อรูปเล่มสัมนา</p>
                        <figure class="img-indent"><img src="<?php echo base_url('Boostap2/img/News/peeApai.jpg');?>" alt="" class="img-radius"></figure>
                        <?php echo base_url('Boostap2/img/News/peeApai.jpg');?>
                        เป็นปี่พื้นเมืองที่มีพัฒนาการขึ้นเองในภูมิภาคอุษาคเนย์ นิยมใช้อยู่ในราชสำนักไทย ลาวและเขมร รวมถึงใช้ในวงโนราห์ชาตรีด้วย แต่เอามาบริจาก แบบงงๆ
                        <br>

                        <h4 class="indent-2">ระฆังวัด</h4>
                        <p class="lead">ระฆังวัด จากวัดบ้านโนนม่วง</p>
                        <figure class="img-indent"><img src="<?php echo base_url('Boostap2/img/News/rakungnonmoung.jpg');?>" alt="" class="img-radius"></figure>

                        ผู้ใหญบ้าน บ้านโนนหลีหูห่าวได้ลงพื้นที่มาสำรวจวัดบ้านโนนม่วง มหาวิทยาลัยขอนแก่น แล้วได้ไปเคาะระฆังเล่น จนมันหล่นลงแล้วเด้งลงไปจากศาลา ระยะทางไกล 135 เมตร จึงทำให้ชาวบ้านพากันไปซื้อเลข 135 3ตัวตรงไม่กลับ แล้วถูกยกหมู่บ้าน เลยได้ซื้อระฆังใหม่.

                    </div>
                    <div class="span4 ">
                        <h4 class="indent-2">Harp Magic</h4>
                        <p class="lead">Harp ของแม่มดน้อยโดเรมี ที่มียังพลังหลงเหลืออยู่</p>
                        <figure class="img-indent"><img src="<?php echo base_url('Boostap2/img/News/harpMagic.jpg');?>" alt="" class="img-radius"></figure>
                        <?php echo base_url('Boostap2/img/News/harpMagic.jpg');?>
                        ผู้ครอบครองทั้งหมดจะกลายเป็น "นายแห่งความตาย" หรือ "นายแห่งยมทูต" มี 3 สิ่ง ได้แก่ ผ้าคลุมล่องหน หินชุบวิญญาณ และไม้กายสิทธิ์เอลเดอร์ ไม่เกียวกับ Harp เลยแม้แต่นิด 5555 สนุกจัง.
                        <br>
                        <h4 class="indent-2">Hell Violin</h4>
                        <p class="lead">Violin นารก ที่ไม่ได้ถางหญ้า</p>
                        <figure class="img-indent"><img src="<?php echo base_url('Boostap2/img/News/violinHell.jpg');?>" alt="" class="img-radius"></figure>

                        จากที่นายตั้งคนเดิม เพิ่มเติมไข่เยี่ยมม้า ได้ไปถางหญ้าอยู่ที่นาของตัวเอง เพราะนามีหญ้าขึ้นรกไปหมด จึงทำให้ได้ไปพบเจอกับเครื่องดนตรีโบราญอันนี้ เลยได้เอามาบริจากกับทางเว็บของเรา แล้วนายตั้งก็ได้ตายไปเพราะงูใน violin ออกมาตอดตาย.
                        <br>
                    </div>
                </div>


            </div>
            <div class="span4">
                <h4 class="indent-2">Latest News:</h4>
                <ul class="list-news">
                    <li>
                        <a href="#" class="btn btn_">March 17, 2017</a>
                        <p class="text-info">ขิม 1000 ปี จากราชวงศ์ภาคคอม มหาวิทยาลัยขอนแก่น.</p>
                        แม้ว่าขิมหรือพิณผีเสื้อตัวนี้จะมีต้นกำเนิดอยู่ห่างไกลถึงมหาอาณาจักรเปอร์เซียนโบราณแต่ก็ได้โบยบินผ่านกาลเวลาและเส้นทางสายไหมอันยาวไกลเรื่อยมาจน.. <a href="#" class="underline">>></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn_">March 15, 2017</a>
                        <p class="text-info">Harp ของแม่มดน้อยโดเรมี ที่มียังพลังหลงเหลืออยู่.</p>
                        ผู้ครอบครองทั้งหมดจะกลายเป็น "นายแห่งความตาย" หรือ "นายแห่งยมทูต" มี 3 สิ่ง ได้แก่..  <a href="#" class="underline">>></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn_">March 12, 2017</a>
                        <p class="text-info">ปี่ ที่ใช้ฆ่าผีเสื้อสมุด ผีเสื้อหนังสือ ผีเสื้อวิจัย ผีเสื้อรูปเล่มสัมนา.</p>
                        เป็นปี่พื้นเมืองที่มีพัฒนาการขึ้นเองในภูมิภาคอุษาคเนย์ นิยมใช้อยู่ในราชสำนักไทย ลาวและเขมร..  <a href="#" class="underline">>></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn_">March 5, 2017</a>
                        <p class="text-info">Violin นารก ที่ไม่ได้ถางหญ้า.</p>
                        จากที่นายตั้งคนเดิม เพิ่มเติมไข่เยี่ยมม้า ได้ไปถางหญ้าอยู่ที่นาของตัวเอง เพราะนามีหญ้าขึ้นรกไปหมด..  <a href="#" class="underline">>></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn_">March 9, 2017</a>
                        <p class="text-info">ระฆังวัด จากวัดบ้านโนนม่วง.</p>
                        ผู้ใหญบ้าน บ้านโนนหลีหูห่าวได้ลงพื้นที่มาสำรวจวัดบ้านโนนม่วง มหาวิทยาลัยขอนแก่น..  <a href="#" class="underline">>></a>
                    </li>
                </ul>
                <h4 class="indent-1">testimonials:</h4>
                <p class="p1">ทดสอบเล่นๆ ไม่เห็นเป็นไร โปรดอ่านแล้วเข้าใจ พร้อมกับหัวเราะไปกับมัน อย่าได้ซี ไม่มีอะไร อิอิ อุอิอุอะ ขรุขริขรุขนิ.”</p>
                <span class="clr"><strong>Polla Onpreeya</strong>, <a href="#" class="link-2">Polla.org</a></span>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <ul class="thumbnails">
                    <h3 class="indent-2">Music Instruments</h3>
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="<?php echo base_url('Boostap2/img/ShowDrum.png');?>" alt="">
                                <?php echo base_url('Boostap2/img/ShowDrum.png');?>
                                <h3>&nbsp;&nbsp;&nbsp;Percussion</h3>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;เครื่องกระทบ</h5>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Praesent vestibulum molestie lacus. Aenean noy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. </p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="<?php echo base_url('Boostap2/img/ShowElectric-guitar.png');?>" alt="">

                                <h3>&nbsp;&nbsp;&nbsp;String</h3>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;เครื่องสาย</h5>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Praesent vestibulum molestie lacus. Aenean my hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. </p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="<?php echo base_url('Boostap2/img/ShowFrench-horn.png');?>" alt="">

                                <h3>&nbsp;&nbsp;&nbsp;Brass</h3>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;เครื่องลมทองเหลือง</h5>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suipit varius mi. Cum sociis natoque penatibus et.</p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="<?php echo base_url('Boostap2/img/ShowPiccolo.png');?>" alt="">

                                <h3>&nbsp;&nbsp;&nbsp;Woodwind</h3>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;เครื่องลมไม้</h5>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suipit varius mi. Cum sociis natoque penatibus et.</p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="<?php echo base_url('Boostap2/img/ShowPiano.png');?>" alt="">

                                <h3>&nbsp;&nbsp;&nbsp;Keyboard</h3>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;เครื่องลิ่มนิ้ว</h5>
                            </div>
                            <div class="thumbnail-pad">
                                <p>Nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
                                <a href="#" class="btn btn_">more info</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="span4 float2">
                <form id="newsletter" method="post" >
                    <label>Newsletter</label>
                    <div class="clearfix">
                        <input type="text" onFocus="if(this.value =='Enter e-mail here' ) this.value=''" onBlur="if(this.value=='') this.value='Enter e-mail here'" value="Enter e-mail here" >
                        <a href="#" onClick="document.getElementById('newsletter').submit()" class="btn btn_">subscribe</a>
                    </div>
                </form>
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
