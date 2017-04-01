<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class testCtrl extends CI_Controller
{

  public function index()
  {
    $this->load->view('test2');

  }

  public function refreshcaptchaimage()
  {
    # code...
    $this->output->set_content_type('application/json');
    $captcha = $this->captcha->CreateCaptcha();
    $data = array("image" => $captcha['image'],
                  "word" => $captcha['word']
                  );
    echo json_encode($data);
    // echo $captcha;
  }
}
 ?>
