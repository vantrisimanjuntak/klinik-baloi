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
    function checklogin()
    {
        $username = sha1($this->input->post('username'));
        $password = sha1($this->input->post('password'));

        if ($username == "" && $password == "") {
            echo "Username dan password Kosong";
        } else {
            echo $username . " " . $password;
        }
    }
}
