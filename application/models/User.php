<?php
class User extends CI_Model {
    private $table_name = "user";

    public function __construct()
    {
        $this->load->database();
    }

    public function listAll() {
        $query = $this->db->query("SELECT * FROM $this->table_name");
        return $query->result_array();
    }

    public function listById($id) {
        $query = $this->db->query("SELECT * FROM $this->table_name WHERE id = ?", [$id]);
        return $query->row_array();
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

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }

    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }
}