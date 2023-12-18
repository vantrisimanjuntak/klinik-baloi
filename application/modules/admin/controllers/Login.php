<?php class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['title'] = 'Login Admin';
        $this->load->view('v_login', $data);
    }
}
