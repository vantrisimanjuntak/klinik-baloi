<?php class Pendaftar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        $data['title'] = 'Pendaftar - Panel Admin Klinik Baloi';
        $data['allPendaftar'] = $this->Main_model->getAllPendaftar();
        $this->load->view('v_pendaftar', $data);
    }
    function deletePendaftar($id)
    {
        $queryDeletePendaftar = $this->Main_model->deletePendaftar($id);
        if ($queryDeletePendaftar) {
            redirect('admin/pendaftar');
        } else {
            redirect('admin/pendaftar');
        }
    }
}
