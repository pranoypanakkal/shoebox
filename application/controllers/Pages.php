<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('Users');
    $this->load->library('form_validation');
  }

  function index()
   {
		$this->load->helper('form');
   		$this->load->view('landing');
	}
	function selection()
	{

		$this->load->view('selection');
	}
	function signup()
	{
		$this->load->view('signup');
	}
	function verify()
  {
    $this->load->library('form_validation');
  // field name, error message, validation rules
    $this->form_validation->set_rules('name', 'User Name', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('signup');
    }
    else
    {
      $name=$_POST["name"];
		  $email=$_POST["email"];
 		 $password=$_POST["password"];
 		 $number=$_POST["number"];
 		 $sex=$_POST["sex"];
      $this->Users->add($name,$email,$password,$number,$sex);
      redirect('Pages');    }
  }

  function login()
  {
    $this->load->view('signin');
  }
  function product()
  {

    $this->load->view('product');
  }

}

?>
