<?php
class Register extends MY_Controller
{

	public function index()
	{
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
	//	$this->load->view('Users/User_Login_Signup');
        
        $this->form_validation->set_rules(
                'fname', 'First Name',
        'trim|required|max_length[15]');
        
        $this->form_validation->set_rules(
                'lname', 'Last Name',
        'trim|required|max_length[15]');

        $this->form_validation->set_rules(
                'suname', 'Username',
        'trim|required|min_length[5]|max_length[12]|is_unique[user.username]',
        array(
                'required'      => 'You have not provided %s.'  ,
                'is_unique'  => '%s is already exist'      )
);
   //     $this->form_validation->set_rules('uname', 'Username', 'required');
        $this->form_validation->set_rules('spasswd', 'Password', 'trim|required|min_length[8]|callback_valid_password');

        $this->form_validation->set_rules(
                'emailid', 'Email Id',
        'trim|required|valid_email|is_unique[user.email]',
    array(
                'required'      => 'You have not provided %s.'  ,
                'is_unique'  => '%s is already exist'      )
);
        

                if ($this->form_validation->run() == FALSE)
                {
                    //echo "HI";
                        $this->load->view('Users/signup_view');
                }
                else
                {
                       // echo "Successfull";

                    $data = array('firstname' =>$this->input->post('fname') ,
                                   'lastname' =>$this->input->post('lname'),
                                   'username' =>$this->input->post('suname'),
                                   'email'    =>$this->input->post('emailid'),
                                   'password' =>$this->input->post('spasswd'));

                    $this->load->model('Register_model');
                    $id=$this->Register_model->insert($data);

                    if($id > 0)
                    {
                        echo "Successfull";
                    }

                }        


         
	}
    
}

?> 
