<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class usercontroller extends CI_Controller
{

  function __construct()
  {
    # code...
    parent::__construct();
    $this->load->model('user','',TRUE);
    $this->load->model('captcha','',TRUE);
  }

  public function index()
  {
    # code...
     $idcade = $_POST["idcard"];
     $fname = $_POST["fname"];
     $lname = $_POST["lname"];
     $address = $_POST["Address"];
     $tel = $_POST["Tel"];
     $email = $_POST["Email"];
     $username = $_POST["username"];
     $password = $_POST["password"];
     $conpassword = $_POST["conpassword"];
     $Province = $_POST["Province"];
     $Didtrict = $_POST["Didtrict"];
     $Postcode = $_POST["Postcode"];

     $Cuser = $this->user->checkuser($username);
     $Cid = $this->user->checkssid($idcade);
     $Overlapid =$this->user->checkoverlapssid($idcade);

     if ($Cuser == 0) { //เช็ค username ซ้ำกันหรือไม่
       if ($Overlapid == 0) { //เช็คว่า ID ซ้ำหรือไม่หรือไม่
          if ($Cid == 1) {  //เช็คว่า ID ถูกหรือไม่
            if ($password == $conpassword) { //เช็คว่า พาสเวิด ตรงกันหรือไม่
                  $this->user->insertuser($idcade,$fname,$lname,$address,$tel,$email,$username,$password,$Province,$Didtrict,$Postcode);
                  echo '<script language="javascript">';
                  echo 'alert("registry Complete!!!!")';
                  echo '</script>';
                  $this->load->helper(array('form'));
                  $this->load->view('login');
            }else{
              $captcha = $this->captcha->CreateCaptcha();
              echo '<script language="javascript">';
              echo 'alert("Password incorrect!!!")';
              echo '</script>';
              $this->load->helper(array('form'));
              $this->load->view('register' , $captcha);
            }
          }else {
            $captcha = $this->captcha->CreateCaptcha();
            echo '<script language="javascript">';
            echo 'alert("บัตรประชาชนไม่ถูกต้อง !!!")';
            echo '</script>';
            $this->load->helper(array('form'));
            $this->load->view('register' , $captcha);
          }
        }else {
          $captcha = $this->captcha->CreateCaptcha();
          echo '<script language="javascript">';
          echo 'alert("บัตรประชาชนนี้ถูกใช้แล้ว!!!")';
          echo '</script>';
          $this->load->helper(array('form'));
         $this->load->view('register' , $captcha);
       }
     }else {
       $captcha = $this->captcha->CreateCaptcha();
       echo '<script language="javascript">';
       echo 'alert("Userนี้ถูกใช้งานแล้ว!!!")';
       echo '</script>';
      $this->load->helper(array('form'));
      $this->load->view('register' , $captcha);
     }
     // $this->user->insertuser($idcade,$fname,$lname,$address,$tel,$email,$username,$password,$Province,$Didtrict,$Postcode);
    // $this->user->insertuser('2561200748184','Wanart','khamla','119','0827505687','nos@kkumail.com','admin123','admin12345','ขอนแก่น','เมือง','40000');
  }

  public function checkuser(){
    $inputpage = $this->input->post("name");
    $ccc = $this->user->checkuser($inputpage);
    echo $ccc;
  }
  public function checkid()
  {
    $inputid = $this->input->post("id");
    $check1 = $this->user->checkoverlapssid($inputid);
    echo $check1;
  }
  public function checkidusenot()  //เช็คว่า ID ถูกต้องตามหลักหรือไม่
  {
    $inputid2 = $this->input->post("id");
    $check2 = $this->user->checkssid($inputid2);
    echo $check2;
  }
}

 ?>
