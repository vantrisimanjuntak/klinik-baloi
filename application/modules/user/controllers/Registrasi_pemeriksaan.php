<?php class Registrasi_pemeriksaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('home/Model_home');
    }
    function index()
    {
        if ($this->session->userdata('nama')) {
            $data['allLayanan'] = $this->Model_home->allLayanan();
            $data['title'] = 'Registrasi Pemeriksaan';
            $this->load->view('v_registrasi_pemeriksaan', $data);
        } else {
            redirect('user/login');
        }
    }
}
