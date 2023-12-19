<?php class Registrasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['title'] = 'Form Pendaftaran';
        $this->load->view('v_pendaftaran', $data);
    }
    function submit()
    {
        $nama = $this->input->post('nama');
        echo $nama;
    }
}
