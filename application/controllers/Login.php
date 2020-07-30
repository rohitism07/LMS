<?php
class Login extends MY_Controller
{

	public function index()
	{
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
	//	$this->load->view('Users/User_Login_Signup');
        

        $this->form_validation->set_rules(
                'uname', 'Username',
        'trim|required|min_length[5]|max_length[12]',
        array(
                'required'      => 'You have not provided %s.')
);
   //     $this->form_validation->set_rules('uname', 'Username', 'required');
        $this->form_validation->set_rules('passwd', 'Password', 'trim|required|min_length[8]|callback_valid_password');
        

                if ($this->form_validation->run() == FALSE)
                {
                    //echo "HI";
                        $this->load->view('Users/login_view');
                }
                else
                {
                 //       echo "Successfull";
                    $this->load->model('Login_model');
                    $result=$this->Login_model->login_check($this->input->post('uname'),$this->input->post('passwd'));
                    if($result == '')
                    {
                        redirect('Private_area');
                    }
                    else
                    {
                        $this->session->set_flashdata('message',$result);
                        redirect('login_view');
                    }

                }        


         
	}

    //Create strong password 
    
}

?> 
