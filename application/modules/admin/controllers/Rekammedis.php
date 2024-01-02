<?php class Rekammedis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        if ($this->session->userdata('nama')) {
            $data['allDaftarPemeriksaan'] = $this->Main_model->getAllDaftarPemeriksaan();
            $data['allRekamMedis'] = $this->Main_model->getAllRekamMedis();
            $data['title'] = 'Rekam Medis - Panel Admin Klinik Baloi';
            $this->load->view('v_rekammedis', $data);
        } else {
            redirect('admin/login');
        }
    }
}
