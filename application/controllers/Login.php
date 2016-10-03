<?php
  class Login extends CI_Controller
  {
    function __construct() {
    parent::__construct();
    $this->load->model('Users');
  		}

  	public function index() {
        //
$username = $this->input->post('email');
    $password=md5($this->input->post('password'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');
        if($this->form_validation->run() == FALSE)
        {
           //Field validation failed.  User redirected to login page
          $this->load->view('signin');
          
        }
    else
    {
        
      //Go to private area
      echo("Loading.....");
      //echo $this->session->userdata('Name');
      redirect('pages', 'refresh');
    }
  }


  function check_database($password)
  {
    //Field validation succeeded.  Validate against database
    $username = $this->input->post('email');
    $password=md5($this->input->post('password'));
    //query the database
    $result = $this->Users->login($username, $password);
    
    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array('Name' => $row->Name,'Email' => $row->Email);
        $name=$sess_array['Name'];
        $this->session->set_userdata('Name', $name);
        $this->session->set_userdata('logged_in', $sess_array);
      }
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_database', "The email and password you entered doesm't match.");
      return false;
    }
  }
  }
?>