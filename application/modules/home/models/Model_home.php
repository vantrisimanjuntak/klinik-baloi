<?php class Model_home extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function registrasi($nama, $no_ktp, $no_hp, $alamat, $password)
    {
        $data =  array(
            'nama' => $nama,
            'no_ktp' => $no_ktp,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'password' => $password,
            'status' => 'Pending'
        );
        if ($data) {
            $this->db->insert('pendaftar', $data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
