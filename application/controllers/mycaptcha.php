<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class mycaptcha extends CI_Controller
{

  public  function __construct()
  {
    parent::__construct();
    # code...
    $this->load->helper(array('captcha' ,'url'));
    $this->load->library('session');
    $this->load->model('captcha','',TRUE);
  }

  public function index()
  {
    # code...
    // $this->load->helper(array('form'));
    // $this->load->view('register')
    // $attr = array(
    //   'word' => '1435mL',
    //   'img_path' => 'captcha/',
    //   'img_url' => base_url() . 'captcha/',
    //   'imt_width' => 150,
    //   'img_height' => 30,
    //   'expiration' => 7200
    // );
    // $captcha = create_captcha($attr);
    // echo $captcha['image'];
    // $this->load->helper(array('form'));
    // $this->load->view('register' , $captcha);

//     $vals = array(
//         'img_path'      => 'captcha/',
//         'img_url'       =>  base_url() . 'captcha/',
//         'font_path'     => 'captcha/times_new_yorker.ttf',
//         'img_width'     => 250,
//         'img_height'    => 30,
//         'expiration'    => 7200,
//         'word_length'   => 8,
//         'font_size'     => 16,
//         'img_id'        => 'Imageid',
//         'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
//
//         // White background and border, black text and red grid
//         'colors'        => array(
//                 'background' => array(255, 255, 255),
//                 'border' => array(255, 255, 255),
//                 'text' => array(0, 0, 0),
//                 'grid' => array(255, 40, 40)
//         )
// );
//
// $cap = create_captcha($vals);
$Cuser = $this->captcha->CreateCaptcha();
 $this->load->view('nos' , $Cuser);
// echo $cap['image'];
// echo $cap['word'];
  }
}
 ?>
