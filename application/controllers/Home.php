<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_jobdesc');
    }

    public function index()
    {
        $queryAllMahasiswa = $this->M_jobdesc->getDataMahasiswa();
        $data = array('queryAllMahasiswa' => $queryAllMahasiswa);
        $this->load->view('jobdesc', $data);
        // echo "hello world!";
    }

    public function halaman_tambah()
    {
        $this->load->view('halaman_tambah');
    }

    public function halaman_edit($nim)
    {
        $queryMahasiswaDetail = $this->M_jobdesc->getDataMahasiswaDetail($nim);
        $data = array('queryMahasiswaDetail' => $queryMahasiswaDetail);
        $this->load->view('halaman_edit', $data);
    }

    public function postTambah()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $nama = $this->input->post('nama');
        $posisi = $this->input->post('posisi');
        $jobdesc = $this->input->post('jobdesc');

        $insert = array(
            'id_pegawai' => $id_pegawai,
            'nama' => $nama,
            'posisi' => $posisi,
            'jobdesc' => $jobdesc
        );

        // echo "<pre>";
        // print_r($insert);
        // echo "</pre>";

        $this->M_jobdesc->insertDataMahasiswa($insert);
        redirect(base_url(''));
    }

    public function postEdit()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $nama = $this->input->post('nama');
        $posisi = $this->input->post('posisi');
        $jobdesc = $this->input->post('jobdesc');

        $update = array(
            'id_pegawai' => $id_pegawai,
            'nama' => $nama,
            'posisi' => $posisi,
            'jobdesc' => $jobdesc
        );

        $this->M_jobdesc->updateDataMahasiswa($id_pegawai, $update);
        redirect(base_url(''));
    }

    public function fungsiHapus($id_pegawai)
    {
        $this->M_jobdesc->hapusDataMahasiswa($id_pegawai);
        redirect(base_url(''));
    }
}
