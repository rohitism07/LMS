<?php
class Login_model extends CI_Model
{
	public function login_check($username,$password)
	{
		$this->db->where('username',$username);
		$query = $this->db->get('user');
		if($query->num_rows() > 0)
		{
             foreach ($query->result() as $row) {
             	# code...
             	if($row->password==$password)
             		{
             			$this->session->set_userdata('id',$row->id);
             			//return "Welcome to LMS";
             		}
             		else
             		{
             			return 'Invalid Password';
             		}
             }
		}
		else 
		{
			return 'Invalid Username';
		}
	}
}


?>