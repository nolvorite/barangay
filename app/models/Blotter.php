<?php

class Blotter {
    
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function findAllRecords() {
        $this->db->query('SELECT * FROM blotter ORDER BY date_created DESC');

        $results = $this->db->resultSet();

        return $results;
    }


    public function findBlotterById($data) {
        $this->db->query('SELECT * FROM blotter WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        
        $row = $this->db->single();
        return $row;
    }

    public function addBlotter($data) {
        $this->db->query('INSERT INTO blotter (complainant, accusation, date, document, status) VALUES (:complainant, :accusation, :date_time, :document, :status)');
    
        $this->db->bind(':complainant', $data['complainant']);
        $this->db->bind(':accusation', $data['accusation']);
        $this->db->bind(':document', $data['document']);
        $this->db->bind(':date_time', $data['date_time']);
        $this->db->bind(':status', $data['status']);


        if($this->db->execute()) {
            return true;
        }else {
            return false;
        }

    }

    public function editBlotter($data) {

        $this->db->query('UPDATE blotter SET complainant = :complainant, accusation = :accusation, document = :document, date = :date_time, status = :status WHERE id = :id');
    
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':complainant', $data['complainant']);
        $this->db->bind(':accusation', $data['accusation']);
        $this->db->bind(':document', $data['document']);
        $this->db->bind(':date_time', $data['date_time']);
        $this->db->bind(':status', $data['status']);


        if($this->db->execute()) {
            return true;
        }else {
            return false;
        }

    }

}


?>