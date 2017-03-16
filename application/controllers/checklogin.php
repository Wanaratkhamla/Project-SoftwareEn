<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class checklogin extends CI_Controller
{

  public  function __construct()
  {
    parent::__construct();
    $this->load->model('user','',TRUE);
    # code...
  }

  public function index()
  {
    # code...
    // $this->load->helper(array('form'));
    // $this->load->view('home');
    $username = htmlentities($_POST["username"]);
    $password = htmlentities(hash('sha256', $_POST["password"]));

    $result = $this->user->listname($username, $password);
    if($result == 0){
      if($username == null && $password == null){
        $captcha = $this->captcha->CreateCaptcha();
        $data = array(
          'image' => $captcha['image'],
          'word' => $captcha['word'],
          'error' => 2
        );
        $this->load->view('home' , $data);
      }else if($username == null){
        $captcha = $this->captcha->CreateCaptcha();
        $data = array(
          'image' => $captcha['image'],
          'word' => $captcha['word'],
          'error' => 3
        );
        $this->load->view('home' , $data);
      }else if($password == null){
        $captcha = $this->captcha->CreateCaptcha();
        $data = array(
          'image' => $captcha['image'],
          'word' => $captcha['word'],
          'error' => 3
        );
        $this->load->view('home' , $data);
      }else {
        $captcha = $this->captcha->CreateCaptcha();
        $data = array(
          'image' => $captcha['image'],
          'word' => $captcha['word'],
          'error' => 1
        );
        $this->load->view('home' , $data);
      }

    }else{
      echo "Successful!!!! <br>";
      foreach ($result as $row) {
        # code...
        echo "บัตรประชาชน : " . $row->IDCard; echo '<br>';
        echo "ชื่อจริง : ". $row->Fname; echo '<br>';
        echo "นามสกุล" . $row->Lname; echo '<br>';
        echo "ที่อยู่" . $row->Address; echo '<br>';
        echo "เบอร์โทรศัพท์" . $row->Tel; echo '<br>';
        echo "Email : " . $row->Email; echo '<br>';
        echo "Username : " . $row->Username; echo '<br>';
        echo "จังหวัด : " . $row->Province; echo '<br>';
        echo "ตำบล : " . $row->Didtrict; echo '<br>';
        echo "รหัสไปรษณีย์ : " . $row->Postcode; echo '<br>';
      }
    }

  }
}
 ?>
