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
        $query = $this->db->get('pendaftar');
        return $query;
    }
}
