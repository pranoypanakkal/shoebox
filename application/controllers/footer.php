<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Footer extends CI_Controller {

  function __construct()
  {
    parent::__construct();
   //$this->load->model('user','',TRUE);
  }

  function faq()
  {
  	$this->load->view('faq');
    
  }
  function contactus()
  {
    $this->load->view('contactus');
  }
  
  function aboutus()
  {
    $this->load->view('aboutus');
    
  }

  
  
  


}

?>
