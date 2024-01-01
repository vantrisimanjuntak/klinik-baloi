<?php class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function checkLogin($no_hp, $password)
    {
        $this->db->where('no_hp', $no_hp);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        return $query;

        // if ($query->num_rows() > 0) {
        //     foreach ($query->result_array() as $row) {
        //         if ($row['status'] == 'Aktif') {

        //             return TRUE;
        //         } else {

        //             return FALSE;
        //         }
        //     }
        // } else {
        //     redirect('user/login');
        //     return FALSE;
        // }
    }
}
