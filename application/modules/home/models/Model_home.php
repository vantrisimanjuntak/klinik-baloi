<?php class Model_home extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function registrasi($nama, $no_ktp, $id_shadow, $no_hp, $alamat, $password)
    {
        $data =  array(

            'id_shadow' => $id_shadow,
            'nama' => $nama,
            'no_ktp' => $no_ktp,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
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
