<?php
if(!isset($error)){
  $check = 0;
}else if(isset($error)){
  $check = $error;
} ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Musical Happy Share</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('Boostap/templatemo_style.css');?>" media="all"/>
</head>
<body>

  
  <?php
  $attributes = array("method" => "POST");
  echo form_open("startweb/test", $attributes);?>
  <button type="submit">noss</button>
  <?php echo form_close(); ?>



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
        Username : <input class="form-control" type="text" id="searchfield" name="username" pattern="\w{4,}" placeholder="Enter username" autofocus>
         </div>
         <div><p></p></div>
  </div>
  <div id="search_section">
    <label for="inputPassword" class="col-sm-2 control-label"></label>
      <div class="col-sm-8">
        Password : <input class="form-control" type="password" id="searchfield" name="password" placeholder="Enter password">
         </div>
  </div>

  <?php
  if ($check == 1) {
  echo '<br><span style="color:#ff0000;text-align:center;">Invalid Username.</span>';
}elseif ($check == 2) {
  echo '<br><span style="color:#ff0000;text-align:center;">Please Enter Username and Password.</span>';
}elseif ($check == 3) {
  echo '<br><span style="color:#ff0000;text-align:center;">Please Enter Username.</span>';
}elseif ($check == 4) {
  echo '<br><span style="color:#ff0000;text-align:center;">Please Enter Password.</span>';
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
<?php echo form_close(); ?></center>

        </div>
    </div>	<!-- end of banner -->

    <div id="cb"></div>
    <div id="templatemo_footer">
        Copyright © 2048 <a href="#">Your Company Name</a> |
		<a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by
        <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    </div> <!-- end of footer -->
<!--  Free Web Templates @ TemplateMo.com  -->
</div> <!-- end of container -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
