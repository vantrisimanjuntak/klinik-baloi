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
        $query = $this->db->get('user');

        if ($query->num_rows() > 0) {
            # code...

            return TRUE;
        } else {
            return FALSE;
        }
    }
}
