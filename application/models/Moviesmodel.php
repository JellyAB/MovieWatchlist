<?php
    class Moviesmodel extends CI_Model{
        /*
        | -------------------------------------------------------------------------
        | Model for getting data from the table
        | -------------------------------------------------------------------------
        */
        public function getRecords(){
            $query = $this->db->query('select * from watchlist' );  // Produces: SELECT * FROM mytable
            //if($query->num_rows()>0){
            return $query->result();
            
        }
        /*
        | -------------------------------------------------------------------------
        | Model for creating a new movie record in the database
        | -------------------------------------------------------------------------
        */
        public function setRecords($data){
            return $this->db->insert('watchlist',$data);  // Produces: SELECT * FROM mytable
        }
        /*
        | -------------------------------------------------------------------------
        | Model for updating the status of the movie to watched
        | -------------------------------------------------------------------------
        */
        public function updateToWatched($id){
            return $this->db->query("update watchlist set STATUS='Watched' where id='".$id."'");
        }
        /*
        | -------------------------------------------------------------------------
        | Model for deleting a movie the user prefers to remove
        | -------------------------------------------------------------------------
        */
        public function deleteMovie($id){
            return $this->db->query("delete from watchlist where id='".$id."'");
        }
        /*
        | -------------------------------------------------------------------------
        | Model for filtering the records where the user watched in the current month
        | -------------------------------------------------------------------------
        */
        public function getReport(){
            $query = $this->db->query('select * from watchlist where status="Watched" AND MONTH(WATCHED_DATE) = MONTH(CURDATE())' );  //Produces the movies watched in the current month
            return $query->result();
            
        }

    }



?>