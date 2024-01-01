<?php class Registrasi_pemeriksaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        $data['title'] = 'Registrasi Pemeriksaan';
        $this->load->view('v_registrasi_pemeriksaan', $data);
    }
}
