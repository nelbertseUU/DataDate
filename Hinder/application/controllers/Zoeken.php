<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Zoeken extends CI_Controller {
    public function index(){
        $data['attributes'] = array('class' => 'width_80');
        $data['title'] = "Zoeken";
        
        $this->load->view('header', $data);
        $this->load->view('menubalk');
        $this->load->view('zoeken', $data);
	    $this->load->view('footer');
    }
    
    public function zoekform(){
        
        $this->load->model('Match_model');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $dingetje = array();
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
            $data['attributes'] = array('class' => 'width_80');
            $data['title'] = "Zoeken";

            $this->load->view('header', $data);
            $this->load->view('menubalk');
            $this->load->view('zoeken', $data);
            $this->load->view('footer');
		}
        else
        {
            $geslachtVk = $this->input->post('geslachtsvoorkeur');
            $IE = $this->input->post('I/E');
            $IS = $this->input->post('I/S');
            $TF = $this->input->post('T/F');
            $JP = $this->input->post('J/P');
            $merkcheck = $this->input->post('merkcheck[]');
            $ptypeVk = $IE . $IS . $TF . $JP;
            $merkVk = implode(', ', $merkcheck);
            $leeftijdVk = $this->input->post('AgeVk');
            
            //geeft leeftijd door vanuit de slider
            if(empty($leeftijdVk)){
                $minVk = '18';
                $maxVk = '99';
            }
            else{
                $AgeVk = explode(', ', $leeftijdVk);
                $minVk = $AgeVk[0];
                $maxVk = $AgeVk[1];
            }            
            
            //haalt alle UserID's op uit de database
            foreach($this->User_model->getID() as $row){
                $id = $row['UserID'];
                $alleID[] =  $id;
            }

            //filtert UserID's op ingevoerde geslacht
            $alleIDGeslacht = array();
            foreach($alleID as $key => $id){

                if($geslachtVk !== 'B'){
                    foreach($this->User_model->getUserById($id) as $row1){
                        if($geslachtVk == $row1['Geslacht']){
                             $alleIDGeslacht[] = $id;
                        }
                    }  
                }
                else{
                    $alleIDGeslacht[] = $id;
                }
            }

            //filtert resterende UserID's op ingevoerde leeftijd
            $alleIDLeeftijd = array();
            foreach($alleIDGeslacht as $key => $id){
                foreach($this->User_model->getUserById($id) as $row){
                    $birthDate = $row['Geboortedatum'];
                    $age = $this->getAge($birthDate); 
                    if(($age > $minVk) and ($age < $maxVk)){
                        $alleIDLeeftijd[] = $id;
                    }
                }
            }
            
            //filtert resterende UserID's op Persoonlijkheidstype
            $alleIDpType = array();
            foreach($alleIDLeeftijd as $id){
                foreach($this->Match_model->getUserByPersVk() as $row){
                    $ptype_m = $row['TYPE'];
                    $matchID = $row['UserID'];
                    
                    if($ptype_m == $ptypeVk && $matchID == $id){
                        $alleIDpType[] = $id;
                    }
                }
            }
            
            //Haalt gegevens op van de overgebleven UserID's en stopt deze gegevens in een array, die dmv json_encode doorgegeven wordt aan de pagina.
            foreach($alleIDpType as $id){

                foreach($this->User_model->getVoorkeuren($id) as $row){

                    if( $row['Vk_merk'] != NULL){
                        $merkVk_m = $row['Vk_merk'];
                        list($merk1, $merk2, $merk3) = explode(", ", $merkVk_m);
                        $driemerkenarray = array($merk1, $merk2, $merk3);
                    }
                        if(isset($merkVk_m)){
                        $driemerken = implode(', ', $driemerkenarray);
                    }
                    else{
                        $driemerken = $merkVk_m;
                    }
                }

                foreach($this->User_model->getTypeByID($id) as $row){
                    $ptype = $row['TYPE'];
                }

                foreach($this->Match_model->getRandom($id) as $row){
                    $nick = $row['Nickname'];
                    $geb = $row['Geboortedatum'];
                    $geslacht = $row['Geslacht'];
                    $beschrijving = $row['Beschrijving'];
                    $id = $row['UserID'];
                }   
                 $rel = $this->relatietype($id);
                //merken enzo erin gooien CHECK THEORIE IN OPDRACHT
                $dingetje[] = array( 'gebruiker' => $nick, 'gebdatum' => $geb, 'geslacht' => $geslacht, 'beschrijving' => $beschrijving, 'persType' => $ptype, 'merkVk' => $driemerken, 'id' => $id, 'relatie' => $rel);
            }
            
            $dingetje = json_encode($dingetje);
            $data['title'] = "Zoeken";
            $data['dingetje'] = $dingetje;
            
            $this->load->view('header', $data);
            $this->load->view('menubalk');
            $this->load->view('zoekresultaten', $data);
            $this->load->view('footer');
        }
    }
     public function relatietype($gekregenID){
        $x = 0;
        $id = $gekregenID;
        if (isset($_SESSION["UserID"]))  
		{ $UserID = $_SESSION["UserID"];
         
			foreach($this->User_model->getLike($UserID, $id) as $row){
                if($row['OtherUserID']){ 
                    $x = 1;
                    foreach($this->User_model->getLike($id, $UserID) as $row2){
                    if($row2['OtherUserID']){
                        $x = 3;
                    }
                    }
                }else{
                    foreach($this->User_model->getLike($id, $UserID) as $row3){
                    if($row3['OtherUserID']){
                        $x = 2;
                    }
                    }
                }
           }
		}
     return $x;   
  	}
    public function getAge($birthDate){ 
        $birthDate = explode("-", $birthDate);
        
        return (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
        ? ((date("Y") - $birthDate[2]) - 1)
        : (date("Y") - $birthDate[2]));
    }
}
?>