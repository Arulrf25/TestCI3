<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_jobdesc extends CI_Model
{
    function getDataMahasiswa()
    {
        $query = $this->db->get('com_jobdesc');
        return $query->result();
    }

    function insertDataMahasiswa($data)
    {
        $this->db->insert('com_jobdesc', $data);
    }

    function getDataMahasiswaDetail($id)
    {
        $this->db->where('id_pegawai', $id);
        $query = $this->db->get('com_jobdesc');
        return $query->row();
    }

    function updateDataMahasiswa($id, $data)
    {
        $this->db->where('id_pegawai', $id);
        $this->db->update('com_jobdesc', $data);
    }

    function hapusDataMahasiswa($id)
    {
        $this->db->where('id_pegawai', $id);
        $this->db->delete('com_jobdesc');
    }
}
