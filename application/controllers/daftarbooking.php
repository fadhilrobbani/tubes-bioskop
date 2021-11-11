<?php 
/**
* 
*/
class daftarbooking extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('daftarbooking_model');
		$this->load->model('studio_model');
		$this->load->model('film_model');
		$this->load->model('daftarpemesan_model');
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		 $data['daftarbooking']=$this->daftarbooking_model->ambil_data();//mengirimkan array dengan isinya prodi tadi
		 $this->load->view('Daftarbooking/daftarbooking_list',$data);
		}
		
		function tambah()
		{
			$data=array(
			'aksi'    								=> site_url('daftarbooking/tambah_aksi'),//Di arahkan kemana
			'id_booking'							=> set_value('id_booking'),
			'judul_film'							=> $this->film_model->get_option(),
			'nama_studio'							=> $this->studio_model->get_option(),
			'username' 								=> $this->daftarpemesan_model->get_option(),
			'no_kursi'								=> set_value('no_kursi'),
			'hari_booking'							=> set_value('hari_booking'),
			'tanggal_booking'						=> set_value('tanggal_booking'),
			'jam'									=> set_value('jam'),
			'harga'									=> set_value('harga'),
			'button' 								=> 'Tambah'
		);
			$this->load->view('Mbooking/mbooking',$data);
		}
		function tambah_aksi()
		{

			$data=array(
				
				'judul_film' 					=> $this -> input -> post('judul_film'),
				'nama_studio' 					=> $this -> input -> post('nama_studio'),
				'no_kursi' 						=> $this -> input -> post('no_kursi'),
				'hari_booking' 					=> $this -> input -> post('hari_booking'),	
				'tanggal_booking' 				=> $this -> input -> post('tanggal_booking'),
				'jam' 							=> $this -> input -> post('jam'),	
				'harga' 						=> $this -> input -> post('harga'),
				'username' 						=> $this -> input -> post('username')	
				
				
			);
			
			$cek_kursi = $this->daftarbooking_model->cek($this->input->post('no_kursi'));

			if(empty($cek_kursi)){

				$this->daftarbooking_model->tambah_data($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Selamat Anda telah berhasil booking.</div>');
				redirect(site_url('daftarbooking/tambah'));
			}
			else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Maaf nomor kursi sudah di pesan,silahkan pilih nomor yang lain </div>');
				redirect(site_url('daftarbooking/tambah'));
			}
		}

		function delete($id)
		{
			$this -> daftarbooking_model ->hapus_data($id);
			redirect(site_url('daftarbooking'));
		}

		function update($id)
		{
			$daftarbooking=$this->daftarbooking_model ->ambil_data_id($id);
			$data=array(
			'aksi'    								=> site_url('daftarbooking/update_aksi'),//Di arahkan kemana
			'id_booking'							=> set_value('id_booking',$daftarbooking ->id_booking),
			'judul_film'							=> $this->film_model->get_option(),
			'nama_studio'							=> $this->studio_model->get_option(),
			'username' 								=> $this->daftarpemesan_model->get_option(),
			'no_kursi'								=> set_value('no_kursi',$daftarbooking ->no_kursi),
			'hari_booking'							=> set_value('hari_booking',$daftarbooking ->hari_booking),
			'tanggal_booking'						=> set_value('tanggal_booking',$daftarbooking ->tanggal_booking),
			'jam'									=> set_value('jam',$daftarbooking ->jam),
			'harga'									=> set_value('harga',$daftarbooking ->harga),
			'button' 								=> 'Edit'
		);
			$this->load->view('Daftarbooking/daftarbooking_form',$data);
		}
		
		function update_aksi()
		{
			$data=array(

				'judul_film' 					=> $this -> input -> post('judul_film'),
				'nama_studio' 					=> $this -> input -> post('nama_studio'),		
				'no_kursi' 						=> $this -> input -> post('no_kursi'),
				'hari_booking' 					=> $this -> input -> post('hari_booking'),	
				'tanggal_booking' 				=> $this -> input -> post('tanggal_booking'),
				'jam' 							=> $this -> input -> post('jam'),	
				'harga' 						=> $this -> input -> post('harga'),
				'username' 						=> $this -> input -> post('username')	

				
			);
			$id_booking=$this->input->post('id_booking');
			$this->daftarbooking_model->edit_data($id_booking,$data);
			redirect(site_url('daftarbooking'));
		}

		  
	}
?>