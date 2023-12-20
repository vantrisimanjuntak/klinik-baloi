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
                    'username' => $row['username']
                );
            }
            $this->session->set_userdata($sess);

            return TRUE;
        } else {
            return FALSE;
        }
    }
}
