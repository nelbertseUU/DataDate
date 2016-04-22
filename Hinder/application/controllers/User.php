<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class User extends MY_Controller {
    public function index(){
        $UserID = $_SESSION['UserID'];
        $data['nick'] = '';
        $data['voornaam'] = '';
        $data['achternaam'] = '';
        $data['email'] = '';
        $data['geslacht'] = '';
        $data['geboortedatum'] = '';
        $data['beschrijving'] = '';
        $data['ptype'] = '';
        $data['merkvk'] = '';
        $data['persw'] ='';

        foreach($this->User_model->getUserById($UserID) as $row){
            $data['nick'] = $row['Nickname'];
            $data['voornaam'] = $row['Voornaam'];
            $data['achternaam'] = $row['Achternaam'];
            $data['email'] = $row['Email'];
            $data['geslacht'] = $row['Geslacht'];
            $data['geboortedatum'] = $row['Geboortedatum'];
            $data['beschrijving'] = $row['Beschrijving'];
        }
                
        foreach($this->User_model->getTypeByID($UserID) as $row){
            $data['ptype'] = $row['TYPE'];
        }
       
          foreach($this->User_model->getAllPers($UserID) as $row){
           $waardeI = $row['I'];
            $waardeE = $row['E'];
            $waardeJ = $row['J'];
            $waardeP = $row['P'];
            $waardeN = $row['N'];
            $waardeS = $row['S'];
            $waardeT = $row['T'];
            $waardeF = $row['F'];
          }
              
              if($waardeI > $waardeE){
           $seg1 = "I[".$waardeI."]";
           $letter1 = "I";
       }else{$seg1 = "E[".$waardeE."]";
            $letter1= "E";}
       
       if($waardeN > $waardeS){
           $seg2 = "N[".$waardeN."]";
           $letter2 = "N";
       }else{$seg2 = "S[".$waardeS."]";
            $letter2 = "S";}
       
       if($waardeT > $waardeF){
           $seg3 = "T[".$waardeT."]";
           $letter3 = "T";
       }else{$seg3 = "F[".$waardeF."]";
            $letter3 = "F";}
       
        if($waardeJ > $waardeP){
           $seg4 = "J[".$waardeJ."]";
            $letter4 = "J";
       }else{$seg4 = "P[".$waardeP."]";
            $letter4 = "P";}
        
        
        
        
         $data['persw'] = "<p>Je bent een: ".$seg1.$seg2.$seg3.$seg4." </p>";
        
        
    
        foreach($this->User_model->getVoorkeuren($UserID) as $row){
            $data['valtop'] = $row['Vk_geslacht'];
            $data['age_min'] = $row['Vk_age_min'];
            $data['age_max'] = $row['Vk_age_max'];
            $data['merkvk'] = $row['Vk_merk'];
        }
        
        $data['title'] = "Account";
        $this->load->view('header.php', $data);
        $this->load->view('menubalk.php');
        $this->load->view('account.php', $data);
        $this->load->view('footer.php');
    }
    
    public function anderAccount($id){
        $OtherUserID = $id;   
        $UserID = $_SESSION['UserID'];
        $data['nick'] = '';
        $data['OtherID'] = $id;
        $data['voornaam'] = '';
        $data['achternaam'] = '';
        $data['email'] = '';
        $data['geslacht'] = '';
        $data['geboortedatum'] = '';
        $data['beschrijving'] = '';
        $data['ptype'] = '';
        $data['valtop'] = '';
        $data['age_min'] = '';
        $data['age_max'] = '';
        $data['merkvk'] = '';
        
        foreach($this->User_model->getUserById($OtherUserID) as $row){
            $data['nick'] = $row['Nickname'];
            $data['voornaam'] = $row['Voornaam'];
            $data['achternaam'] = $row['Achternaam'];
            $data['email'] = $row['Email'];
            $data['geslacht'] = $row['Geslacht'];
            $data['geboortedatum'] = $row['Geboortedatum'];
            $data['beschrijving'] = $row['Beschrijving'];
        }
        
        foreach($this->User_model->getTypeByID($OtherUserID) as $row){
            $data['ptype'] = $row['TYPE'];
        }
        
        foreach($this->User_model->getVoorkeuren($OtherUserID) as $row){
            $data['valtop'] = $row['Vk_geslacht'];
            $data['age_min'] = $row['Vk_age_min'];
            $data['age_max'] = $row['Vk_age_max'];
            $data['merkVk'] = $row['Vk_merk'];
        }
       
        $data['title'] = "Gebruiker";
        $this->load->view('header', $data);
        $this->load->view('menubalk');
        $this->load->view('andere_gebruiker', $data);
        $this->load->view('footer');
    }
    /*
    public function like($id){
        $OtherUserID = $id;//$this->input->post('');  
        $UserID = $_SESSION['UserID'];
        $data['nick'] = '';
         $data['OtherID'] = $id;
        $data['voornaam'] = '';
        $data['achternaam'] = '';
        $data['email'] = '';
        $data['geslacht'] = '';
        $data['geboortedatum'] = '';
        $data['beschrijving'] = '';
        $data['ptype'] = '';
        $data['valtop'] = '';
        $data['age_min'] = '';
        $data['age_max'] = '';
        $data['merkvk'] = '';
        
        foreach($this->User_model->getUserById($OtherUserID) as $row){
            $data['nick'] = $row['Nickname'];
            $data['voornaam'] = $row['Voornaam'];
            $data['achternaam'] = $row['Achternaam'];
            $data['email'] = $row['Email'];
            $data['geslacht'] = $row['Geslacht']; 
            $data['geboortedatum'] = $row['Geboortedatum'];
            $data['beschrijving'] = $row['Beschrijving'];
        }
        
        foreach($this->User_model->getTypeByID($OtherUserID) as $row){
            $data['ptype'] = $row['TYPE'];
        }
        
        foreach($this->User_model->getVoorkeuren($OtherUserID) as $row){
            $data['valtop'] = $row['Vk_geslacht'];
            $data['age_min'] = $row['Vk_age_min'];
            $data['age_max'] = $row['Vk_age_max'];
            $data['merkVk'] = $row['Vk_merk'];
        }
        
        $this->User_model->insertLike($UserID, $OtherUserID);
        
        $data['title'] = "Gebruiker";
        $this->load->view('header', $data);
        $this->load->view('menubalk');
        $this->load->view('andere_gebruiker', $data);
        $this->load->view('footer');
    }
    */
    public function checklike($id){
        $yesorno = '';
         $UserID = $_SESSION['UserID'];
      
            foreach($this->User_model->getLike($UserID, $id) as $row){
        if($row['OtherUserID']){
           $yesorno = 'yes';
        }
        }
        if($yesorno == 'yes'){echo 1;}else{echo 2;}
    }
    
     public function like($id){
        $OtherUserID = $id;  
        $UserID = $_SESSION['UserID'];
          $this->User_model->insertLike($UserID, $OtherUserID);
         
         
         
         
         
         
     }
    public function wijzigAccount(){
        $UserID = $_SESSION['UserID'];
        $data['nick'] = '';
        $data['voornaam'] = '';
        $data['achternaam'] = '';
        $data['email'] = '';
        $data['geslacht'] = '';
        $data['geboortedatum'] = '';

        foreach($this->User_model->getUserById($UserID) as $row){
            $data['nick'] = $row['Nickname'];
            $data['voornaam'] = $row['Voornaam'];
            $data['achternaam'] = $row['Achternaam'];
            $data['email'] = $row['Email'];
            $data['geslacht'] = $row['Geslacht'];
            $data['geboortedatum'] = $row['Geboortedatum'];
        }
        
        $data['title'] = "Account wijzigen";
        $this->load->view('header.php', $data);
        $this->load->view('menubalk.php');
        $this->load->view('wijzig_account.php', $data);
        $this->load->view('footer.php');
    }
    
    public function wijzigAccountForm(){
        $this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

        $UserID = $_SESSION['UserID'];
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');//uniek maken
        $this->form_validation->set_rules('nick', 'Nickname','required|min_length[4]|max_length[15]');//uniek maken
		$this->form_validation->set_rules('geboortedatum', 'Geboortedatum', 'required|callback_geboortedatum_achttien|callback_datum_regex');
		$this->form_validation->set_rules('voornaam', 'Voornaam', 'required');
        $this->form_validation->set_rules('achternaam', 'Achternaam', 'required');
        $this->form_validation->set_rules('geslacht', 'Geslacht', 'required');
        $this->form_validation->set_message('required', 'Het %s veld is verplicht');
        $this->form_validation->set_message('is_unique', 'De ingevoerde %s bestaat al');
        $this->form_validation->set_message('datum_regex', 'De %s die je ingevoerd hebt, bestaat niet of klopt niet volgens (dd-mm-jjjj)');  
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
           
		if ($this->form_validation->run() == FALSE)
		{
            $data['title'] = "Account wijzigen";
            $this->load->view('header.php', $data);
            $this->load->view('menubalk.php');
            $this->load->view('wijzig_account.php');
            $this->load->view('footer.php');
		}
		else
		{
            $email = $this->input->post('email');
            $geboortedatum = $this->input->post('geboortedatum');
            $voornaam = $this->input->post('voornaam');
            $achternaam = $this->input->post('achternaam');
            $geslacht = $this->input->post('geslacht');
            $nick = $this->input->post('nick');
            $this->User_model->updateUser($email,  $geboortedatum, $voornaam, $achternaam, $geslacht, $nick, $UserID);            
            redirect('User'); 
		}
    }
    
    public function wijzigImg(){
        $UserID = $_SESSION['UserID'];
        
    }
    
    public function wijzigMerkVk(){
        $UserID = $_SESSION['UserID'];
        $merkVk = '';

        foreach($this->User_model->getVoorkeuren($UserID) as $row){
            $merkVk = $row['Vk_merk'];
            $merkVoorkeuren = explode(', ', $merkVk);
            $data['merkVoorkeuren'] = $merkVoorkeuren;
        }
        
        $data['attributes'] = array('class' => 'merkform');
        $data['title'] = "Merkvoorkeuren wijzigen";
        $this->load->view('header.php', $data);
        $this->load->view('menubalk.php');
        $this->load->view('wijzig_merkvoorkeuren.php', $data);
        $this->load->view('footer.php');
    }
    
    public function wijzigMerkForm(){
        $this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

        $UserID = $_SESSION['UserID'];
        
        $this->form_validation->set_rules('merkcheck[]', 'Merkvoorkeuren', 'required');        
        $this->form_validation->set_message('required', 'Het %s veld is verplicht');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
           
		if ($this->form_validation->run() == FALSE)
		{
            $data['attributes'] = array('class' => 'merkform');
            $data['title'] = "Merkvoorkeuren wijzigen";
            $this->load->view('header.php', $data);
            $this->load->view('menubalk.php');
            $this->load->view('wijzig_merkvoorkeuren.php', $data);
            $this->load->view('footer.php');
		}
        else
        {
            $merk_data = $this->input->post('merkcheck');
            $merk_data_split = implode(', ', $merk_data);
                        
            $this->User_model->updateMerkvoorkeuren($merk_data_split, $UserID);
            
            redirect('User');
        }   
    }
    
    public function besUpdate(){
        $tekst = $this->input->post('beschrijving');
        $UserID = $_SESSION['UserID'];
        $this->User_model->updateBes($tekst, $UserID);
    }
    
    public function geaUpdate(){
        $tekst = $this->input->post('geaardheid');
        $UserID = $_SESSION['UserID'];
        $this->User_model->updateGea($tekst, $UserID);
    }
    
    public function ageUpdate(){
        $minage = $this->input->post('min');
        $maxage = $this->input->post('max');
        $UserID = $_SESSION['UserID'];
        $this->User_model->updateAge($minage, $maxage, $UserID);
    }
    
    public function verwijderGebruiker(){
        $UserID = $_SESSION['UserID'];
        $this->User_model->deleteUserFromUsers($UserID);
        $this->User_model->deleteUserFromPersoonlijkheidstype($UserID);
        $this->User_model->deleteUserFromVoorkeuren($UserID);
        
        // Remove all session variables
        session_unset(); 

        // Destroy the session 
        session_destroy();
        
        echo "<script>window.close();</script>";
    }
    
    public function verwijderGebruikerPopup(){
        $data['title'] = "Verwijder gebruikers";
        $this->load->view('header.php', $data);
        $this->load->view('verwijder_gebruiker_popup.php', $data);
    }
    
    function datum_regex($geboortedatum)
    {
       /* $regexp = '(^(((0[1-9]|1[0-9]|2[0-8])-(0[1-9]|1[012]))|((29|30|31)-(0[13578]|1[02]))|((29|30)-(0[4,6,9]|11)))-(19|[2-9][0-9])\d\d$)|(^29-02-(19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)'; 
        // Deze regex kijkt in één keer of de ingevoerde datum geldig is voor dd-mm-jjjj, inclusief schrikkeljaar.
        
        if(!preg_match($regexp,$geboortedatum))
        {
            //geen geldige datum
            return false;
        }*/
        return true;
    }
    
    function geboortedatum_achttien($geboortedatum)
    {
        $age = 18;
        if(is_string($geboortedatum))
        {
            $geboortedatum = strtotime($geboortedatum);
        }
        if(time() - $geboortedatum < $age * 31536000)
        {
            return false;
        }
        return true;  
    }
    
    
}?>