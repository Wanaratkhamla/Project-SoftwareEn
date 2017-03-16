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

    $username = htmlentities($_POST["username"]);
    $password = htmlentities(hash('sha256', $_POST["password"]));

    $result = $this->user->listname($username, $password);
    if($result == 0){


      if($username == null && $_POST["password"] == null){
        $check = 2;
        echo $check;
      }else if($username == null){
        $check = 3;
        echo $check;
      }else if($_POST["password"] == null){
        $check = 4;
        echo $check;
      }else{
        $check = 1;
        echo $check;
      }
    }else{
      $check = 5;
      echo $check;
    }
  }

  public function showlist()
  {
    $username = htmlentities($_POST["username"]);
    $password = htmlentities(hash('sha256', $_POST["password"]));
    $result = $this->user->listname($username, $password);
    foreach ($result as $row) {
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
?>
