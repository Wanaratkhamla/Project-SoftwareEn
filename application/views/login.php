<?php
if(!isset($error)){
  $check = 0;
}else{
  $check = 1;
} ?>
<html>
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
            <div id="templatemo_site_title">Music Happy  <br><br> Share</div>
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
    <div id="ct"></div>

    <div id="templatemo_content">

        <div id="banner_header_01"><center>Login</center></div>
        <div id="banner_header_02"><center>เข้าสู่ระบบ</center></div>
        <div id="banner_text">
            <center>
								<?php
								    $attributes = array("method" => "POST", "autocomplete" => "on");
								    echo form_open("checklogin", $attributes);?>
              <div id="search_section">
                <label for="inputUsername" class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    Username : <input class="form-control" type="text" id="id" name="username" pattern="\w{4,}" placeholder="Enter username" required autofocus>
                     </div>
                     <div><p></p></div>
              </div>
              <div id="search_section">
                <label for="inputPassword" class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    Password : <input class="form-control" type="password" id="pass" name="password" pattern="\w{8,16}" placeholder="Enter password" required>
                     </div>
              </div>
              <br>

              <?php
              if ($check == 1) {
              echo '<span style="color:#ff0000;text-align:center;">Invalid Username</span>';
              }
               ?>

              <div class="form-group">
              <label class="col-sm-2 control-label"></label>
              <div class="col-sm-8">
              <label class="checkbox-inline">
                <p></p><input type="checkbox" name="remember"> จำการเข้าสู่ระบบที่เครื่องนี้ <br><a type="text/css" href="<?php echo base_url() ?>index.php/linkregister">สมัครสมาชิกสำหรับลูกค้าใหม่</a><p>
                </label>
                </div>
               </div>
               <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                 <div class="col-sm-8">
                <button type="submit" class="btn btn-primary" id="searchbutton">login</button><br><br><br><br>
                </div>
               </div>
            <?php echo form_close(); ?>

                    </div>
                </div>	<!-- end of banner -->

                <div id="cb"></div>
                </center>
                <div id="templatemo_footer">
                    รอยยิ้มที่ยิ่งใหญ่ | เริ่มด้วยที่การแบ่งปัน
                </div> <!-- end of footer -->
            <!--  Free Web Templates @ TemplateMo.com  -->
            </div> <!-- end of container -->
            </html>
