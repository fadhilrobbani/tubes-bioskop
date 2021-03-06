<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('daftarpemesan_model');
	}

	public function index()
	{
		if($this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{
			redirect('home');
		}
		
		if(!$this->input->post())
		{
			$this->load->view('login');
		}
		else
		{
			$cek_login=$this->admin_model->cek_login(
				$this->input->post('username'),
				$this->input->post('password')
			);
			$cek_login2=$this->daftarpemesan_model->cek_login(
				$this->input->post('username'),
				$this->input->post('password')
			);
			if(!empty($cek_login))
			{
				$this->session->set_userdata('username',$cek_login->username);
				$this->session->set_userdata('logined', true);
				
				redirect("home");//diarahkan
			}
			elseif (!empty($cek_login2)) {
				$this->session->set_userdata('username',$cek_login->username);
				$this->session->set_userdata('logined', true);
				
				redirect("mhome/home");
			}
			else 
			{
				redirect("/Login");
			}
		}
		
	} 
	
	public function logout()
	{
		$this->session->unset_userdata('logined');
		redirect("/");
	} 
}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */
