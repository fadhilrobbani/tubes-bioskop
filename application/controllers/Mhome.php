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
