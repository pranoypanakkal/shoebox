<?php
class Users extends CI_Model{


function __construct() {
parent::__construct();
}
function add()
{
	$data=array(
    'Name' => $this->input->post('name'),
    'Email'=>$this->input->post('email'),
    'Password'=>md5($this->input->post('password')),
    'Number'=>$this->input->post('number'),
    'Sex'=>$this->input->post('sex')

  );
  $this->db->insert('users',$data);
}

function login($username, $password)
	{
		
		$this -> db -> select('Name,Email,Password,Number,Sex');
		$this -> db -> from('users');
		$this -> db -> where('Email = ' . "'" . $username . "'"); 
		$this -> db -> where('Password = ' . "'" . $password. "'"); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();
		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
}
?>
