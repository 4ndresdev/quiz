<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_cuenta extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_cuenta');
    }

    public function auth()
    {

        if ($this->input->is_ajax_request()) {
            $this->M_cuenta->auth($this->input->post('user_id'));
        } else {
            show_404();
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
    }
}
