<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
            $this->load->model('member');
            $this->member->setCookie("chit","xxx");
            echo '<br/>'.$this->member->setPass("5");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */