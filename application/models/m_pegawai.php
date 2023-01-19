<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pegawai extends CI_Model {

    public function tampil_data()
    {
        return $this->db->get('pegawai');
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getData(){
        return $this->db->get('pegawai')->result_array();
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function data_detail($no=null){
        $query=$this->db->get_where('pegawai',array('no'=>$no))->row();
        return $query;
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->like('nip',$keyword);
        $this->db->or_like('nama',$keyword);
        $this->db->or_like('tgl_lahir',$keyword);
        $this->db->or_like('alamat',$keyword);
        $this->db->or_like('no_telp',$keyword);
        return $this->db->get()->result();
    }

    public function Jum_pegawai_perAlamat()
    {
        $this->db->group_by('alamat');
        $this->db->select('alamat');
        $this->db->select("count(*) as total");
        return $this->db->from('pegawai')->get()->result();
    }
}
