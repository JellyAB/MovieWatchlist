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

        public function createMovie(){
            $this->load->view('addMovie');  
        }

        public function viewReport(){
            $records['data'] = $this->Moviesmodel->getReport();
            $this->load->view('report',$records);  
        }

        public function save(){
            $this->form_validation->set_rules('TITLE', 'Movie Title', 'required');
            $this->form_validation->set_rules('GENRE', 'Genre', 'required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            if ($this->form_validation->run() == FALSE){
                //echo validation_errors(); -> error displays in new page
                $this->load->view('addMovie');  
            }else{
                $data = $this->input->post();
                $title = $data['TITLE'];
                $genre = $data['GENRE'];
                $status = 'Unwatched';
                
                $record = array(
                    'TITLE' => $title,
                    'GENRE' => $genre,
                    'STATUS' => $status,
                );

                if($this->Moviesmodel->setRecords($record)){
                    $this->session->set_flashdata('response','New movie added successfully.');
                }else{
                    $this->session->set_flashdata('response','Something went wrong! :(');
                }
                return redirect('home');
            }
        }

        public function updateStatus(){
            $id = $this->input->get('id');
            if($this->Moviesmodel->updateToWatched($id)){
                $this->session->set_flashdata('response1','Cool! You watched that movie, finally :P');
            }else{
                $this->session->set_flashdata('response1','Something went wrong! :(');
            }
            return redirect('home');

    
        }

        public function deleteMovie(){
            $id = $this->input->get('id');
            if($this->Moviesmodel->deleteMovie($id)){
                $this->session->set_flashdata('response2','That movie is off your list now!');
            }else{
                $this->session->set_flashdata('response2','Something went wrong! :(');
            }
            return redirect('home');
        }

        
         
    }
?>