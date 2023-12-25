<?php class Registrasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_home');
    }
    function index()
    {
        $data['title'] = 'Form Pendaftaran';
        $this->load->view('v_pendaftaran', $data);
    }
    function submit()
    {
        $nama = $this->input->post('nama');
        $no_ktp = $this->input->post('no_ktp');
        $alamat = $this->input->post('alamat');
        $jk = $this->input->post('jenis_kelamin');
        $jenis_layanan = $this->input->post('jenis_layanan');
        $tanggal_kontrol = date('y-m-d', strtotime($this->input->post('tgl_kontrol')));

        $queryRegistrasi = $this->Model_home->registrasi($nama, $no_ktp, $alamat, $jk, $jenis_layanan, $tanggal_kontrol);
        if ($queryRegistrasi) {
            $this->session->set_flashdata('flash', 'berhasil');
            redirect('registrasi');
        } else {
            echo "Ada yang error";
        }
    }
}
