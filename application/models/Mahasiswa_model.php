<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    function getDataMahasiswa()
    {
        $query = $this->db->get('tb_mhs');
        return $query->result();
    }

    function insertDataMahasiswa($data)
    {
        $this->db->insert('tb_mhs', $data);
    }

    function getDataMahasiswaDetail($nim)
    {
        $this->db->where('nim', $nim);
        $query = $this->db->get('tb_mhs');
        return $query->row();
    }

    function updateDataMahasiswa($nim, $data)
    {
        $this->db->where('nim', $nim);
        $this->db->update('tb_mhs', $data);
    }

    function hapusDataMahasiswa($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('tb_mhs');
    }
}
