<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class testCtrl extends CI_Controller
{

  public function index()
  {
    $password = htmlentities(hash('sha256', 'Admin2538'));
    $result = $this->test->testquery('wanarat_k@kkumail.com', $password);
    foreach ($result as $row)
    {
            $nos = $row->memberType;
    }
    echo $nos;

  }

  public function test()
  {
    $test = $_POST['Email'];
    echo $test;
    // $new_name = time().rand();
    // $config['file_name'] = $new_name;
    // $config['upload_path']          = 'image/';
    // $config['allowed_types']        = 'gif|jpg|png';
    // $config['max_size']             = 1024;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;
    // $this->load->library('upload', $config);
    // if ($this->upload->do_upload('donatePathIMG')) //check upload image ?
    // {
    //   $imagepath = $new_name . $this->upload->data('file_ext');
    //   echo $imagepath;
    // }else{
    //     echo $this->upload->display_errors();
    // }
  }
}
 ?>
