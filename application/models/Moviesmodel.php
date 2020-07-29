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

        public function updateToWatched($id){
            return $this->db->query("update watchlist set STATUS='Watched' where id='".$id."'");
        }
        
        public function deleteMovie($id){
            return $this->db->query("delete from watchlist where id='".$id."'");
        }

        public function getReport(){
            $query = $this->db->query('select * from watchlist where status="Watched" AND MONTH(WATCHED_DATE) = MONTH(CURDATE())' );  //Produces the movies watched in the current month
            return $query->result();
            
        }

    }



?>