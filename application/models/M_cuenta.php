<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_cuenta extends CI_Model
{
    public function auth($user_id)
    {
        return $this->session->set_userdata('user_id', $user_id);
    }
}
