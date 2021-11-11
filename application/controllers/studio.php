<?php 
/**
* 
*/
class studio extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('studio_model');
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		 $data['studio']=$this->studio_model->ambil_data();//mengirimkan array dengan isinya prodi tadi
		 $this->load->view('Studio/studio_list',$data);
		}
		function tambah()
		{
			$data=array(
			'aksi'    				=> site_url('studio/tambah_aksi'),//Di arahkan kemana
			'nama_studio' 			=> set_value('nama_studio'),
			'kapasitas'				=> set_value('kapasitas'),
			'button' 				=> 'Tambah'
		);
			$this->load->view('Studio/studio_form',$data);
		}
		function tambah_aksi()
		{
			$data=array(
				
				'nama_studio' 				=> $this -> input -> post('nama_studio'),
				'kapasitas' 				=> $this -> input -> post('kapasitas')
				
				
			);

			$this->studio_model->tambah_data($data);
			redirect(site_url('studio'));
		}
		function delete($id)
		{
			$this -> studio_model ->hapus_data($id);
			redirect(site_url('studio'));
		}
		function update($id)
		{
			$studio=$this->studio_model ->ambil_data_id($id);
			$data=array(
			'aksi'    				=> site_url('studio/update_aksi'),//Di arahkan kemana
			'nama_studio' 			=> set_value('nama_studio',$studio ->nama_studio),
			'kapasitas'				=> set_value('kapasitas',$studio ->kapasitas),
			'button' 				=> 'Edit'
		);
			$this->load->view('Studio/studio_form',$data);
		}
		
		function update_aksi()
		{
			$data=array(

				'nama_studio' 				=> $this -> input -> post('nama_studio'),
				'kapasitas' 				=> $this -> input -> post('kapasitas')	

				
			);
			$nama_studio=$this->input->post('nama_studio');
			$this->studio_model->edit_data($nama_studio,$data);
			redirect(site_url('studio'));
		}
	}
	?>