<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('username','username','required'); 
		if($this->form_validation->run())     
        { 
        		$username=$this->input->post('username');
        		$password=$this->input->post('password');
				if($username!="username@gmail.com" && $password!="admin123")
        		{ 
					$this->session->set_flashdata('alertDmessage','Invalid Username or password'); 
					  $this->session->set_flashdata('login_msg', '<div class="alert alert-danger text-center">Login Failed!! Please try again.</div>');
					redirect('admin');
        		}
        		else
        		{
 					redirect('Dashboard/index');
        		}
		}
        else
        { 
 			$data['logintype'] = 'admin';
			$this->load->view('admin_login',$data);
        }
		 
	}
}
