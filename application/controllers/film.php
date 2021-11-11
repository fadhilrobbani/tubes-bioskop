<?php 
/**
* 
*/
class film extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('film_model');
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		 $data['film']=$this->film_model->ambil_data();//mengirimkan array dengan isinya prodi tadi
		 $this->load->view('Film/film_list',$data);
		}
		function tambah()
		{
			$data=array(
			'aksi'    					=> site_url('film/tambah_aksi'),//Di arahkan kemana
			'judul_film'    			=> set_value('judul_film'),
			'genre_film' 				=> set_value('genre_film'),
			'kategori_film' 			=> set_value('kategori_film'),
			'button' 					=> 'Tambah'
		);
			$this->load->view('Film/film_form',$data);
		}
		function tambah_aksi()
		{
			$data=array(
				
				'judul_film'    				=> $this -> input -> post('judul_film'),
				'genre_film' 					=> $this -> input -> post('genre_film'),
				'kategori_film' 				=> $this -> input -> post('kategori_film')
				
				
			);

			$this->film_model->tambah_data($data);
			redirect(site_url('film'));
		}
		function delete($id)
		{
			$this -> film_model ->hapus_data($id);
			redirect(site_url('film'));
		}
		function update($id)
		{
			$film=$this->film_model ->ambil_data_id($id);
			$data=array(
			'aksi'    					=> site_url('film/update_aksi'),//Di arahkan kemana
			'judul_film'    			=> set_value('judul_film',$film ->judul_film),
			'genre_film' 				=> set_value('genre_film',$film ->genre_film),
			'kategori_film' 			=> set_value('kategori_film',$film ->kategori_film),
			'button' 					=> 'Edit'
		);

			$this->load->view('Film/film_form',$data);
		}
		
		function update_aksi($id)
		{
			$data=array(

				'judul_film'    			=> $this -> input -> post('judul_film'),
				'genre_film' 				=> $this -> input -> post('genre_film'),
				'kategori_film' 			=> $this -> input -> post('kategori_film'),
			);
			$judul_film=$this->input->post('judul_film');
			
			$this->film_model->edit_data($judul_film,$data);
			redirect(site_url('film'));
		}
	}
	?>