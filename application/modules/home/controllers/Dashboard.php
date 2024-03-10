<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $title = 'Home';
        $this->load->view('home/v_main', $title);
    }
}
