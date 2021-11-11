<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mhome extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('tayang_model');
        $this->load->model('daftarbooking_model');
        $this->load->model('studio_model');
        $this->load->model('film_model');
        $this->load->model('daftarpemesan_model');
    }

    public function index()
    {
		
        $this->load->view('Mhome2');
        
    }

    public function home()
    {
        
        $this->load->view('Mhome');
        
    } 
    public function register(){
        $this->load->view('templates/form_register');
    }

    public function homedeskfilm1(){
        $this->load->view('templates/mhomedeskfilm1');
    }

    public function homedeskfilm2(){
        $this->load->view('templates/mhomedeskfilm2');
    }
    public function homedeskfilm3(){
        $this->load->view('templates/mhomedeskfilm3');
    }
    public function homedeskfilm4(){
        $this->load->view('templates/mhomedeskfilm4');
    }
    public function homedeskfilm5(){
        $this->load->view('templates/mhomedeskfilm5');
    }
     public function homedeskfilm6(){
        $this->load->view('templates/mhomedeskfilm6');
    }

     public function film()
    {
        $data['tayang']=$this->tayang_model->ambil_data();   
        $this->load->view('Mfilm/mfilm',$data);
        
    } 
     public function booking()
    {
        $data['daftarpemesan']=$this->daftarpemesan_model->ambil_data();
        $data['film']=$this->film_model->ambil_data();
        $data['studio']=$this->studio_model->ambil_data();
        $data['daftarbooking']=$this->daftarbooking_model->ambil_data();
        $this->load->view('Mbooking/mbooking',$data);
        
    } 
     public function admin()
    {
        
        $this->load->view('Madmin/madmin');
        
    }   
     
}
