<?php 
/**
* 
*/
class tayang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('tayang_model');
		$this->load->model('studio_model');
		$this->load->model('film_model');
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		 $data['tayang']=$this->tayang_model->ambil_data();//mengirimkan array dengan isinya prodi tadi
		 $this->load->view('Tayang/tayang_list',$data);
		}
		function tambah()
		{
			
			$data=array(
			'aksi'    							=> site_url('tayang/tambah_aksi'),//Di arahkan kemana
			'id_tayang' 						=> set_value('id_tayang'),
			'nama_studio'						=> $this->studio_model->get_option(),
			'judul_film'						=> $this->film_model->get_option(),
			'tanggal_tayang'					=> set_value('tanggal_tayang'),
			'hari_tayang'						=> set_value('hari_tayang'),
			'jam_tayang'						=> set_value('jam_tayang'),
			'button' 							=> 'Tambah'
		);
			$this->load->view('Tayang/tayang_form',$data);
		}
		function tambah_aksi()
		{

			$data=array(
				
				'nama_studio' 					=> $this -> input -> post('nama_studio'),
				'judul_film' 					=> $this -> input -> post('judul_film'),
				'tanggal_tayang' 				=> $this -> input -> post('tanggal_tayang'),
				'hari_tayang' 					=> $this -> input -> post('hari_tayang'),
				'jam_tayang' 					=> $this -> input -> post('jam_tayang')
				
				
				
			);

			$this->tayang_model->tambah_data($data);
			redirect(site_url('tayang'));
		}
		function delete($id)
		{
			$this -> tayang_model ->hapus_data($id);
			redirect(site_url('tayang'));
		}
		function update($id)
		{
			$tayang=$this->tayang_model ->ambil_data_id($id);
			$tayang=array(
			'aksi'    							=> site_url('tayang/update_aksi'),//Di arahkan kemana
			'id_tayang' 						=> set_value('id_tayang',$tayang ->id_tayang),
			'nama_studio'						=> $this->studio_model->get_option(),
			'judul_film'						=> $this->film_model->get_option(),
			'tanggal_tayang'					=> set_value('tanggal_tayang',$tayang ->tanggal_tayang),
			'hari_tayang'						=> set_value('kapasitas',$tayang ->hari_tayang),
			'jam_tayang'						=> set_value('kapasitas',$tayang ->jam_tayang),
			'button' 							=> 'Edit'
		);
			$this->load->view('Tayang/tayang_form',$tayang);
		}
		
		function update_aksi()
		{
			$data=array(

				'nama_studio' 					=> $this -> input -> post('nama_studio'),
				'judul_film' 					=> $this -> input -> post('judul_film'),
				'tanggal_tayang' 				=> $this -> input -> post('tanggal_tayang'),
				'hari_tayang' 					=> $this -> input -> post('hari_tayang'),
				'jam_tayang' 					=> $this -> input -> post('jam_tayang')

				
			);
			$id_tayang=$this->input->post('id_tayang');
			$this->tayang_model->edit_data($id_tayang,$data);
			redirect(site_url('tayang'));
		}

		
		
	}
	?>
