<?php class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        $data['title'] = 'Login - Klinik Baloi';
        $this->load->view('v_login', $data);
    }
    function checklogin()
    {
        $no_hp = $this->input->post('no_hp');
        $password = $this->input->post('password');

        $queryCheckLogin = $this->Main_model->checkLogin($no_hp, $password);
    }
}
