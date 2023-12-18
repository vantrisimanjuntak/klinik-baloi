<?php class Dokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['title'] = 'Dokter';
        $this->load->view('v_dokter', $data);
    }
}
