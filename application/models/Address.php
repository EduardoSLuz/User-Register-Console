<?php
class Address extends CI_Model {

    private $table_name = "address";

    public function __construct()
    {
        $this->load->database();
    }

    public function listAll() {
        $query = $this->db->query("SELECT * FROM $this->table_name");
        return $query->result_array();
    }

    public function listByParams($data) {

        $fields = array_keys($data);
        $where = implode("=? AND ", $fields);
        $where = count($data) > 0 ? $where."=?" : $where;

        if(strlen($where) > 0) {
            $where = "WHERE $where"; 
        }

        $query = $this->db->query("SELECT * FROM $this->table_name $where", array_values($data));
        return $query->result_array();
    }

}