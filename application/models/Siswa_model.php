<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Siswa_model extends CI_Model {
    public function get_data($table) {
        return $this->db->get($table); // = select * from tbl_siswa
    }

    public function insert_data($data, $table) {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table) {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);

    }
}