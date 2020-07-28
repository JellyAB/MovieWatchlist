<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Home extends CI_Controller{
        public function __construct(){
            parent::__construct();
            //$this->load->helper('url');// its in config now
            $this->load->model('Moviesmodel');
        }

        public function displayRecords(){
            $records['data'] = $this->Moviesmodel->getRecords();
            $this->load->view('home',$records);
        }

        public function updateStatus(){

        }

        public function deleteMovie(){
            
        }
         
    }
?>