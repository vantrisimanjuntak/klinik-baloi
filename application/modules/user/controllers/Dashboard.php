<?php class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['title'] = 'Dashboard - Klinik Baloi';
        $this->load->view('v_dashboard', $data);
    }
}
