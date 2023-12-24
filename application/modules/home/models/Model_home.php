<?php class Model_home extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function registrasi($nama, $no_ktp, $alamat, $jk, $jenis_layanan, $tanggal_kontrol)
    {
        $data =  array(
            'nama' => $nama,
            'no_ktp' => $no_ktp,
            'alamat' => $alamat,
            'jenis_kelamin' => $jk,
            'layanan' => $jenis_layanan,
            'tgl_kontrol' => $tanggal_kontrol,
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
