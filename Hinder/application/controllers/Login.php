<?php 
session_start();
class Login extends CI_Controller {
    
    
     // Load de Login page
    public function index() 
    {
        $data['title'] = "Login";       
        $data['passerror'] = '';
        $this->load->view('header.php', $data);
        $this->load->view('menubalk.php');
        $this->load->view('login.php', $data);
        $this->load->view('footer.php');
    }
    
    public function logUit() 
    {
        // Remove all session variables
        session_unset(); 

        // Destroy the session 
        session_destroy();

        redirect('Main');
    }
    
    public function registratie() 
    {   
        $minage = 18;
        $maxage = 99;

        $data['age_min'] = $minage;
        $data['age_max'] = $maxage;
        $data['attributes'] = array('class' => 'checkform');
        $data['title'] = "Registratie";
        $this->load->view('header.php', $data);
        $this->load->view('menubalk.php');
        $this->load->view('registreer.php', $data);
        $this->load->view('footer.php');
    }
    
    public function veranderpass()
    {    
        $this->load->view('header.php', $data);
        $this->load->view('menubalk.php');
        $this->load->view('veranderpass.php', $data);
        $this->load->view('footer.php');
    }
    
    public function merkvoorkeuren()
    {
        $data['title'] = 'Merkvoorkeuren';
        $data['attributes'] = array('class' => 'merkform');
        $this->load->view('header.php', $data);
        $this->load->view('menubalk.php');
        $this->load->view('merkvoorkeuren.php', $data);
        $this->load->view('footer.php');
    }

    public function checkform()
    {
		$this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[Users.Email]|valid_email');
        $this->form_validation->set_rules('nick', 'Nickname','required|min_length[4]|max_length[15]|is_unique[Users.Nickname]');
		$this->form_validation->set_rules('password', 'Wachtwoord', 'required|min_length[5]|max_length[12]|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'Wachtwoord controleren', 'required');
		$this->form_validation->set_rules('geboortedatum', 'Geboortedatum', 'required|callback_geboortedatum_achttien|callback_datum_regex');
		$this->form_validation->set_rules('voornaam', 'Voornaam', 'required');
        $this->form_validation->set_rules('achternaam', 'Achternaam', 'required');
        $this->form_validation->set_rules('geslacht', 'Geslacht', 'required');
        $this->form_validation->set_rules('beschrijving', 'Beschrijving', 'required');
        $this->form_validation->set_rules('geaardheid', 'Geaardheid', 'required');
        $this->form_validation->set_rules('leeftijdsvoorkeur', 'Leeftijdsvoorkeur', 'required');
        $this->form_validation->set_message('required', 'Het %s veld is verplicht');
        $this->form_validation->set_message('is_unique', 'De ingevoerde %s bestaat al');
        $this->form_validation->set_message('datum_regex', 'De %s die je ingevoerd hebt, bestaat niet of klopt niet volgens (dd-mm-jjjj)');  
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
           
		if ($this->form_validation->run() == FALSE)
		{
            $minage = 18;
            $maxage = 99;
            
            $data['age_min'] = $minage;
            $data['age_max'] = $maxage;
            $data['attributes'] = array('class' => 'checkform');
            $data['title'] = "Registratie";
            $this->load->view('header.php', $data);
            $this->load->view('menubalk.php');
            $this->load->view('registreer.php', $data);
            $this->load->view('footer.php');
		}
		else
		{
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $geboortedatum = $this->input->post('geboortedatum');
            $voornaam = $this->input->post('voornaam');
            $achternaam = $this->input->post('achternaam');
            $geslacht = $this->input->post('geslacht');
            $nick = $this->input->post('nick');
            $beschrijving = $this->input->post('beschrijving');
            $this->User_model->insertUser($email, $password, $geboortedatum, $voornaam, $achternaam, $geslacht, $nick, $beschrijving);
            
            foreach($this->User_model->getIDbyNick($nick) as $row){
                $UserID = $row['UserID'];
                $geslachtVk = $this->input->post('geaardheid');
                
                $leeftijdVk = $this->input->post('AgeVk');
                if(empty($leeftijdVk)){
                    $minVk = '18';
                    $maxVk = '99';
                }
                else{
                    $AgeVk = explode(', ', $leeftijdVk);
                    $minVk = $AgeVk[0];
                    $maxVk = $AgeVk[1];
                }
                //maak een entry in de perstest tabel
                $this->User_model->createPerstestrow($UserID);
                
                $this->User_model->createVkrow($UserID, $geslachtVk, $minVk, $maxVk);
                $_SESSION['ingelogd'] = TRUE;
                $_SESSION['UserID'] = $UserID;
            }
            
             redirect('Perstest/tovragenformIE');
		}
	}
        
    //geef een minimum aan aantal merken
    public function merkform()
    {
        $UserID = $_SESSION['UserID'];
		$this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        
        $this->form_validation->set_rules('merkcheck[]', 'Merkvoorkeuren', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    
		if ($this->form_validation->run() == FALSE)
		{
            $data['attributes'] = array('class' => 'merkform');
            $data['title'] = "Merkvoorkeuren";
            $this->load->view('header.php', $data);
            $this->load->view('menubalk.php');
            $this->load->view('merkvoorkeuren.php', $data);
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
    
    
    public function checkloginform()
	{
		$this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
          
        $this->form_validation->set_rules('nick', 'Nickname','required|callback_nick_bestaat'); //moet clean
        $this->form_validation->set_rules('password', 'Password', 'required'); //moet clean
        $this->form_validation->set_message('required', 'Het %s veld is verplicht');      
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
          
        if ($this->form_validation->run() == FALSE)
		{
            $data['passerror'] = '';
            $data['title'] = "Login";
            $this->load->view('header.php', $data);
            $this->load->view('menubalk.php');
            $this->load->view('login.php', $data);
            $this->load->view('footer.php');
		}
		else
		{
            $password = md5($this->input->post('password'));
            $nick = $this->input->post('nick');
            
            //kijken of het wachtwoord overeen komt
            //eerst wachtwoord ophalen
            foreach($this->User_model->selectPass($nick) as $row){
                if($password == $row['PassHash'])//gelukt
                {
                    
                    $UserID = $row['UserID'];
                    $_SESSION['UserID'] = $UserID;
                    $_SESSION['ingelogd'] = TRUE;
                if (isset($_SESSION["last_page"])){
                     $this->load->view('header.php', $data);
                    $this->load->view('menubalk.php');
                    $this->load->view($_SESSION["last_page"], $data);
                    $this->load->view('footer.php');
                    
                }else{
                     $data['title'] = "Home";
                    $this->load->view('header.php', $data);
                    $this->load->view('menubalk.php');
                    $this->load->view('homepage.php', $data);
                    $this->load->view('footer.php');
                }
                }
                else//niet gelukt
                {
                    $data['title'] = "Login";
                    $data['passerror'] = "wachtwoord klopt niet";
                    
                    $this->load->view('header.php', $data);
                    $this->load->view('menubalk.php');
                    $this->load->view('login.php', $data);
                    $this->load->view('footer.php'); 
                }
            }			
		}      
    }
    
    public function nick_bestaat($nick){
        foreach ($this->User_model->nickbestaat($nick) as $row)
        {
            $naam = $row['Nickname'];
            if($naam === $nick)
            {
                return true;
            }
        }
        return false;
    }  
}
?>