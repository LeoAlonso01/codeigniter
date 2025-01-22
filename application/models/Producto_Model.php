<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {
    private $table = 'users';

    // funcions constructor
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Carga la base de datos
    }

    // get all data
    public function get_all() {
        return $this->db->get($this->table)->result_array();
    }

    // insert data
    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    // get data by id
    public function get($id_user) {
        return $this->db->get_where($this->table, ['id_user' => $id_user])->row_array();
    }

    // update data
    public function update($id_user, $data) {
        return $this->db->where('id_user', $id_user)->update($this->table, $data);
    }

    // delete data
    public function delete($id_user) {
        return $this->db->where('id_user', $id_user)->delete($this->table);
    }
}
