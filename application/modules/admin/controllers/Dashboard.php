<?php class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['title'] = 'Dashboard Admin';
        $this->load->view('v_dashboard', $data);
    }
    function dokter()
    {
        $data['title'] = 'Dokter';
        $this->load->view('v_dokter', $data);
    }
}