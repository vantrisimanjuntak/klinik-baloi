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
    function deletePendaftar($id_shadow)
    {
        $this->db->where('id_shadow', $id_shadow);
        $queryDeletePendaftar = $this->db->get('pendaftar');
        if ($queryDeletePendaftar->num_rows() > 0) {
            $this->db->where('id_shadow', $id_shadow);
            $this->db->delete('pendaftar');
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function confirmPendaftar($id_shadow)
    {
        $this->db->where('id_shadow', $id_shadow);
        $queryConfirmPendaftar = $this->db->get('pendaftar');
        if ($queryConfirmPendaftar->num_rows() > 0) {

            foreach ($queryConfirmPendaftar->result_array() as $row) {
                $moveData = array(
                    'nama' => $row['nama'],
                    'no_ktp' => $row['no_ktp'],
                    'alamat' => $row['alamat'],
                    'jenis_kelamin' => $row['jenis_kelamin'],
                    'no_hp' => $row['no_hp'],
                    'password' => $row['password'],
                    'status' => 'Aktif'
                );
            }
            $this->db->insert('user', $moveData);

            $this->db->set('status', 'Aktif');
            $this->db->where('id_shadow', $id_shadow);
            $this->db->update('pendaftar');
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
