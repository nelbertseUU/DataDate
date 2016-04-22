<?php

class MY_Controller extends CI_Controller 
{
     public function __construct()
	  {
		parent::__construct();

		if (isset($_SESSION["ingelogd"]))
		{
			if ($_SESSION["ingelogd"] != TRUE )
			{
                 $this->load->helper('url');
                $_SESSION['last_page'] = current_url();
                 //$this->session->set_userdata('last_page', current_url());
				redirect('Login');
			}
		} else{redirect('Login');}
         
  	}
    

	/*public function __construct()
	{
		parent::__construct();

		if ($this->input->cookie('Remember') != 0 AND $this->input->cookie('UID') != 0)
		{
			$remember = $this->input->cookie('Remember');
			$UserID = $this->input->cookie('UID');
			$ip = md5($this->input->ip_address());
			if ($remember === 'TRUE')
			{
				foreach ($this->database_model->getUserIPHash($UserID) as $row)
				{
					if ($ip == $row['IPHash'])
					{
						$_SESSION["ingelogd"] = TRUE;
						$_SESSION["UserID"] = "$UserID";
					}
					else
					{
						$_SESSION["ingelogd"] = FALSE;
					}
				}
			}
		}
	}*/
}
/*
class MY_AUTH extends MY_Controller
{

	  public function __construct()
	  {
		parent::__construct();

		if (isset($_SESSION["ingelogd"]))
		{
			if (!$_SESSION["ingelogd"])
			{
				redirect('Login');
			}
		}
  	}
}*/ ?>