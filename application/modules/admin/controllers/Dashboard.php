<?php class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Dashboard Admin';
            $this->load->view('v_dashboard', $data);
        } else {
            redirect('admin/login');
        }
    }
}
