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
        $password = md5($this->input->post('password'));

        $queryCheckLogin = $this->Main_model->checkLogin($no_hp, $password);
        if ($queryCheckLogin->num_rows() > 0) {
            foreach ($queryCheckLogin->result_array() as $row) {
                if ($row['status'] = 'Aktif') {
                } else {
                    $this->session->set_flashdata('flash', 'divalidasi');
                }
            }
        } else {
            echo "Login Gagal";
        }
    }
}
