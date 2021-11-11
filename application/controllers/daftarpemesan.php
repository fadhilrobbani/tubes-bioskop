<?php 
/**
* 
*/
class daftarpemesan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('daftarpemesan_model');
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		 $data['daftarpemesan']=$this->daftarpemesan_model->ambil_data();//mengirimkan array dengan isinya prodi tadi
		 $this->load->view('daftarpemesan/daftarpemesan_list',$data);
		}
		function tambah()
		{
			$data=array(
			'aksi'    					=> site_url('daftarpemesan/tambah_aksi'),//Di arahkan kemana
			'username' 					=> set_value('username'),
			'nama_pemesan' 				=> set_value('nama_pemesan'),
			'password' 					=> set_value('password'),
			'button' 					=> 'Tambah'
		);
			$this->load->view('daftarpemesan/daftarpemesan_form',$data);
		}
		function tambah_aksi()
		{
			$data=array(
				
				'username' 						=> $this -> input -> post('username'),
				'nama_pemesan' 					=> $this -> input -> post('nama_pemesan'),
				'password' 					=> $this -> input -> post('password'),
				
				
			);

			$this->daftarpemesan_model->tambah_data($data);
			redirect(site_url('daftarpemesan'));
		}

		function register()
		{
			$data=array(
			'aksi'    					=> site_url('daftarpemesan/tambah_aksi_register'),//Di arahkan kemana
			'username' 					=> set_value('username'),
			'nama_pemesan' 				=> set_value('nama_pemesan'),
			'password' 					=> set_value('password'),
			'button' 					=> 'Tambah'
		);
			$this->load->view('templates/form_register',$data);
		}
		function tambah_aksi_register()
		{
			$data=array(
				
				'username' 						=> $this -> input -> post('username'),
				'nama_pemesan' 					=> $this -> input -> post('nama_pemesan'),
				'password' 					=> $this -> input -> post('password'),
				
				
			);

			$this->daftarpemesan_model->tambah_data($data);
			redirect(site_url('mhome'));
		}
		
		function delete($id)
		{
			$this -> daftarpemesan_model ->hapus_data($id);
			redirect(site_url('daftarpemesan'));
		}
		function update($id)
		{
			$daftarpemesan=$this->daftarpemesan_model ->ambil_data_id($id);
			$data=array(
			'aksi'    					=> site_url('daftarpemesan/update_aksi'),//Di arahkan kemana
			'username' 					=> set_value('username',$daftarpemesan ->username),
			'nama_pemesan' 				=> set_value('nama_pemesan',$daftarpemesan ->nama_pemesan),
			'button' 					=> 'Edit'
		);
			$this->load->view('Daftarpemesan/daftarpemesan_form',$data);
		}
		
		function update_aksi()
		{
			$data=array(

				'username' 						=> $this -> input -> post('username'),
				'nama_pemesan' 					=> $this -> input -> post('nama_pemesan')
				
			);
			$username=$this->input->post('username');
			$this->daftarpemesan_model->edit_data($username,$data);
			redirect(site_url('daftarpemesan'));
		}
	}
	?>