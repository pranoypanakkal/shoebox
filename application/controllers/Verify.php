<?php
  class Verify extends CI_Controller
  {
    function __construct() {
    parent::__construct();
    $this->load->model('Users');
  }

  function index()
  {
    $this->load->library('form_validation');
  // field name, error message, validation rules
    $this->form_validation->set_rules('name', 'User Name', 'trim|required|min_length[4]|xss_clean');
    $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
    $this->form_validation->set_rules('number', 'Number', 'trim|required');
    $this->form_validation->set_rules('sex', 'Sex', 'trim|required');
    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('signup');
    }
    else
    {
      $this->Users->add($name,$email,$password,$number,$sex);
      $this->view('signup');
    }
  }
  public function login() {
        //|callback_check_database
$username = $this->input->post('email');
    $password=md5($this->input->post('password'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == FALSE)
        {
          echo $username;
           //Field validation failed.  User redirected to login page
            //$this->load->view('signin');
          echo 'fail';
        }
    else
    {
        echo $password;
      //Go to private area
      echo("Loading.....");
      //redirect('pages', 'refresh');
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
        $sess_array = array('Name' => $row->Name,'Email' => $row->Email
  //'Name'=>$row->Name
        );
        $this->session->set_userdata('logged_in', $sess_array);
      }
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_database', "The email and password you entered don't match.");
      return false;
    }
  }
  }
?>
