<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class startweb extends CI_Controller
{

  public function index()
  {
    # code...

    $captcha = $this->captcha->CreateCaptcha();
    $this->load->view('home' , $captcha);
  }
  public function test()
  {
    # code...
    echo "nos";
  }
}
 ?>
