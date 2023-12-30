<?php class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $sess = array(
                    'username' => $row['username'],
                    'nama' => $row['nama']
                );
            }
            $this->session->set_userdata($sess);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // Model For Dokter

    // Add Dokter
    function addDokter($nama, $hari_pelayanan, $jam_pelayanan, $jabatan)
    {
        $data = array(
            'nama' => $nama,
            'tgl_pelayanan' => $hari_pelayanan,
            'jam_pelayanan' => $jam_pelayanan,
            'jabatan' => $jabatan
        );
        if ($data) {
            $this->db->insert('dokter', $data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
    // End Add Dokter

    function getAllDokter()
    {
        $queryGetAllDokter = $this->db->get('dokter');
        return $queryGetAllDokter->result_array();
    }

    function getAllPendaftar()
    {
        $queryGetAllPendaftar = $this->db->get('pendaftar');
        return $queryGetAllPendaftar->result_array();
    }
}
