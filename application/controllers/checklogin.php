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
    // $this->load->view('login');
    $username = htmlentities($_POST["username"]);
    $password = htmlentities($_POST["password"]);

    $result = $this->user->listname($username, $password);
    if($result == 0){
      if($username == null && $password == null){
        $check["error"] = 2;
        $this->load->helper(array('form'));
        $this->load->view('login' , $check);
      }else if($username == null){
        $check["error"] = 3;
        $this->load->helper(array('form'));
        $this->load->view('login' , $check);
      }else if($password == null){
        $check["error"] = 4;
        $this->load->helper(array('form'));
        $this->load->view('login' , $check);
      }else {
        $check["error"] = 1;
        $this->load->helper(array('form'));
        $this->load->view('login' , $check);
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
