<?php class Pasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        if ($this->session->userdata('username')) {
            $data['allPasien'] = $this->Main_model->getAllPasien();
            $data['title'] = 'Pasien - Panel Admin Klinik Baloi';
            $this->load->view('v_pasien', $data);
        } else {
            redirect('admin/login');
        }
    }
}
