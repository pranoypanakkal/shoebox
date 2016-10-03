<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navbar extends CI_Controller {

  function __construct()
  {
    parent::__construct();
   //$this->load->model('user','',TRUE);
  }

  function home()
  {
  	redirect('Pages');
    
  }
  function selection()
  {
    redirect('Pages/selection');
  }
  
  function signup()
  {
    redirect('Pages/signup');
    
  }

  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('pages', 'refresh');
  }
  
  function cart()
  {
    $this->load->view('cart');
    
  }


}

?>
