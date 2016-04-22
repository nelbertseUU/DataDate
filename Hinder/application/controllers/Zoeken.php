<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Zoeken extends CI_Controller {
    public function index()
    {
        $data['attributes'] = array('class' => 'zoekform');
        $data['title'] = "Zoeken";
        
        $this->load->view('header', $data);
        $this->load->view('menubalk');
        $this->load->view('zoeken', $data);
	    $this->load->view('footer');
    }
    
    public function zoekform()
    {
		$this->load->model('Match_model');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        
        $this->form_validation->set_rules('geslachtsvoorkeur', 'Geslachtsvoorkeur', 'required');
        $this->form_validation->set_rules('leeftijdsvoorkeur', 'Leeftijdsvoorkeur', 'required');
        $this->form_validation->set_rules('I/E', 'Introvert/Extravert', 'required');
        $this->form_validation->set_rules('I/S', 'Intuitief/Observatief', 'required');
        $this->form_validation->set_rules('T/F', 'Denkend/Voelend', 'required');
        $this->form_validation->set_rules('J/P', 'Oordelend/Waarnemend', 'required');
        $this->form_validation->set_rules('merkcheck[]', 'Merkvoorkeuren', 'required');
        $this->form_validation->set_message('required', 'Het %s veld is verplicht');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    
		if ($this->form_validation->run() == FALSE)
		{
            $data['attributes'] = array('class' => 'zoekform');
            $data['title'] = "Zoeken";

            $this->load->view('header', $data);
            $this->load->view('menubalk');
            $this->load->view('zoeken', $data);
            $this->load->view('footer');
		}
        else
        {
            $geslachtVk = $this->input->post('geslachtsvoorkeur');
            $minage = $this->input->post('min');
            $maxage = $this->input->post('max');
            $IE = $this->input->post('I/E');
            $IS = $this->input->post('I/S');
            $TF = $this->input->post('T/F');
            $JP = $this->input->post('J/P');
            
            //$ptype = array($IE, $IS, $TF, $JP)
            //$ptypeVk = implode('', $ptype)
                
            
            $alleID = array('hallo');  
            
            
            if($geslachtVk == 'B'){
                foreach($this->Match_model->getUsersFromVkBeide($minage, $maxage) as $row){
                    $id = $row['UserID'];
                    $alleID[] =  $id;
                }
            }
            else{
                foreach($this->Match_model->getUsersFromVk($geslachtVk, $minage, $maxage) as $row){
                    $id = $row['UserID'];
                    $alleID[] =  $id;
                }
            }
            $alleIDstring = implode(', ', $alleID);
            
            //AJAX
                
            //merken enzo erin gooien CHECK THEORIE IN OPDRACHT
            $data['test'] = $alleIDstring;
            $data['attributes'] = array('class' => 'zoekform');
            $data['title'] = "Zoeken";

            $this->load->view('header', $data);
            $this->load->view('menubalk');
            $this->load->view('zoeken', $data);
            $this->load->view('footer');
        }
    }
}
?>