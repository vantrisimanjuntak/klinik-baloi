<?php class Registrasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_home');
    }
    function index()
    {
        $data['title'] = 'Form Pendaftaran - Klinik Baloi';
        $this->load->view('v_pendaftaran', $data);
    }
    function submit()
    {
        $nama = $this->input->post('nama');
        $no_ktp = $this->input->post('no_ktp');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $password = md5($this->input->post('password'));
        $queryRegistrasi = $this->Model_home->registrasi($nama, $no_ktp, $no_hp, $alamat, $password);
        if ($queryRegistrasi) {
            $this->session->set_flashdata('flash', 'berhasil');
            redirect('registrasi');
        } else {
            echo "Ada yang error";
        }
    }
}
