<?php
    class Moviesmodel extends CI_Model{
        public function getRecords(){
            $query = $this->db->query('select * from watchlist' );  // Produces: SELECT * FROM mytable
            //if($query->num_rows()>0){
            return $query->result();
            
        }

        public function setRecords($data){
            return $this->db->insert('watchlist',$data);  // Produces: SELECT * FROM mytable
        }
    }



?>