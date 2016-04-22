<?php
session_start();
class Perstest extends MY_Controller {
   public function index(){
       $data['title'] = "overzicht persoonlijkheid";       
       $data['UserID'] = $_SESSION['UserID'];
       $UserID = $_SESSION['UserID'];
       $data['perswaardes'] = '';
       $data['bestekst'] = '';
       foreach($this->User_model->getBes($UserID) as $row){
            $data['bestekst'] = $row['Beschrijving'];}
       //haal de waardes uit de database 
       foreach($this->User_model->getAllPers($UserID) as $row){
           $waardeI = $row['I'];
            $waardeE = $row['E'];
            $waardeJ = $row['J'];
            $waardeP = $row['P'];
            $waardeN = $row['N'];
            $waardeS = $row['S'];
            $waardeT = $row['T'];
            $waardeF = $row['F'];
           
            $data['perswaardes'] = "<p>Introvert ".$waardeI."<br>".
                                    "Extrovert ".$waardeE."</p>".
                                    "<p>Iniuative ".$waardeN."<br>".
                                    "Sensing ".$waardeS."</p>".
                                    "<p>Thinking ".$waardeT."<br>".
                                    "Feeling ".$waardeF."</p>".
                                    "<p>Judging ".$waardeJ."<br>".
                                    "Percieving ".$waardeP."</p><br>";
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
        
       $UAre = "<p>Je bent een: ".$seg1.$seg2.$seg3.$seg4." </p>";
       $PType = $letter1.$letter2.$letter3.$letter4;
       
       $this->User_model->updateType($PType, $UserID);
       
       $data['perswaardes'] = $data['perswaardes'].$UAre."<br>".$PType;
       
        redirect('User');
       
       
   } 
    public function vragenformIE(){
      $this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
       
        $this->form_validation->set_rules('vraag1', 'Vraag1', 'required');
        $this->form_validation->set_rules('vraag2', 'Vraag2', 'required');
        $this->form_validation->set_rules('vraag3', 'Vraag3', 'required');
        $this->form_validation->set_rules('vraag4', 'Vraag4', 'required');
        $this->form_validation->set_rules('vraag5', 'Vraag5', 'required');
    
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

           
		if ($this->form_validation->run() == FALSE)
		{
            $data['title'] = "Persoonlijkheidstest";
            $this->load->view('header.php', $data);
            $this->load->view('menubalk.php');
            $this->load->view('VragenIE.php', $data);
            $this->load->view('footer.php');
		}
         $UserID = $_SESSION['UserID'];
        $waardeE = 50;
        $waardeI = 50;
        for($i=1;$i<6;$i++){
        if($this->input->post('vraag'.$i)==1)
        {
            $waardeE = $waardeE + 10;
            $waardeI = $waardeI - 10;
        }else if($this->input->post('vraag'.$i)==2){
            $waardeE = $waardeE - 10;
            $waardeI = $waardeI + 10;
        }
        }
        $this->User_model->updateEI($waardeE, $waardeI, $UserID);
         $this->tovragenformNS();
    }
    public function vragenformNS(){
        $this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

        $this->form_validation->set_rules('vraag6', 'Vraag6', 'required');
        $this->form_validation->set_rules('vraag7', 'Vraag7', 'required');
        $this->form_validation->set_rules('vraag8', 'Vraag8', 'required');
        $this->form_validation->set_rules('vraag9', 'Vraag9', 'required');
       
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

           
		if ($this->form_validation->run() == FALSE)
		{
            $data['title'] = "Persoonlijkheidstest";
            $this->load->view('header.php', $data);
            $this->load->view('menubalk.php');
            $this->load->view('VragenNS.php', $data);
            $this->load->view('footer.php');
		
		}
         $UserID = $_SESSION['UserID'];
        $waardeN = 50;
        $waardeS = 50;
        for($i=6;$i<10;$i++){
        if($this->input->post('vraag'.$i)==1)
        {
            $waardeN = $waardeN + 12.5;
            $waardeS = $waardeS - 12.5;
        }else if($this->input->post('vraag'.$i)==2){
            $waardeN = $waardeN - 12.5;
            $waardeS = $waardeS + 12.5;
        }
        }
        $this->User_model->updateNS($waardeN, $waardeS, $UserID);
         $this->tovragenformTF();
    }
    public function vragenformTF(){
        $this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

       
        $this->form_validation->set_rules('vraag10', 'Vraag10', 'required');
        $this->form_validation->set_rules('vraag11', 'Vraag11', 'required');
        $this->form_validation->set_rules('vraag12', 'Vraag12', 'required');
        $this->form_validation->set_rules('vraag13', 'Vraag13', 'required');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

           
		if ($this->form_validation->run() == FALSE)
		{
            $data['title'] = "Persoonlijkheidstest";
            $this->load->view('header.php', $data);
            $this->load->view('menubalk.php');
            $this->load->view('VragenTF.php', $data);
            $this->load->view('footer.php');
		}
         $UserID = $_SESSION['UserID'];
        $waardeT = 50;
        $waardeF = 50;
        for($i=10;$i<14;$i++){
        if($this->input->post('vraag'.$i)==1)
        {
            $waardeT = $waardeT + 12.5;
            $waardeF = $waardeF - 12.5;
        }else if($this->input->post('vraag'.$i)==2){
           $waardeT = $waardeT - 12.5;
            $waardeF = $waardeF + 12.5;
        }
        }
        $this->User_model->updateTF($waardeT, $waardeF, $UserID);
         $this->tovragenformJP();
    }
    public function vragenformJP(){
        $this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

        $this->form_validation->set_rules('vraag14', 'Vraag14', 'required');
        $this->form_validation->set_rules('vraag15', 'Vraag15', 'required');
        $this->form_validation->set_rules('vraag16', 'Vraag16', 'required');
        $this->form_validation->set_rules('vraag17', 'Vraag17', 'required');
        $this->form_validation->set_rules('vraag18', 'Vraag18', 'required');
        $this->form_validation->set_rules('vraag19', 'Vraag19', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

           
		if ($this->form_validation->run() == FALSE)
		{
            $data['title'] = "Persoonlijkheidstest";
            $this->load->view('header.php', $data);
            $this->load->view('menubalk.php');
            $this->load->view('VragenJP.php', $data);
            $this->load->view('footer.php');
		}
        $UserID = $_SESSION['UserID'];
        $waardeJ = 50;
        $waardeP = 50;
        
        for($i=14;$i<20;$i++){
            if($this->input->post('vraag'.$i)==1)
            {
                $waardeJ = $waardeJ + 8.3333;
                $waardeP = $waardeP - 8.3333;
            }
            else if($this->input->post('vraag'.$i)==2){
               $waardeJ = $waardeJ - 8.3333;
                $waardeP = $waardeP + 8.3333;
            }
        }
        $this->User_model->updateJP($waardeJ, $waardeP, $UserID);
        $data['UserID'] = $_SESSION['UserID'];
       $UserID = $_SESSION['UserID'];
      
        
      $UAre = $this->jeBent($UserID);
       
        redirect('Login/merkvoorkeuren');
    }
    public function jeBent($UserID){
        $data['UserID'] = $_SESSION['UserID'];
       $UserID = $_SESSION['UserID'];
      
        
       foreach($this->User_model->getAllPers($UserID) as $row){
           $waardeI = $row['I'];
            $waardeE = $row['E'];
            $waardeJ = $row['J'];
            $waardeP = $row['P'];
            $waardeN = $row['N'];
            $waardeS = $row['S'];
            $waardeT = $row['T'];
            $waardeF = $row['F'];
           
           /* $data['perswaardes'] = "<p>Introvert ".$waardeI."<br>".
                                    "Extrovert ".$waardeE."</p>".
                                    "<p>Iniuative ".$waardeN."<br>".
                                    "Sensing ".$waardeS."</p>".
                                    "<p>Thinking ".$waardeT."<br>".
                                    "Feeling ".$waardeF."</p>".
                                    "<p>Judging ".$waardeJ."<br>".
                                    "Percieving ".$waardeP."</p><br>"; */
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
        $PType = $letter1.$letter2.$letter3.$letter4;
       
       $this->User_model->updateType($PType, $UserID);
        
        return "<p>Je bent een: ".$seg1.$seg2.$seg3.$seg4." </p>";
    }
        
    
    public function tovragenformIE(){
        $data['title'] = "persoonlijkheid";  
        $this->load->view('header.php', $data);
        $this->load->view('menubalk.php'); 
        $this->load->view('VragenIE.php', $data);
        $this->load->view('footer.php');
    }
     public function tovragenformNS(){
        $data['title'] = "persoonlijkheid";  
        $this->load->view('header.php', $data);
        $this->load->view('menubalk.php');
        $this->load->view('VragenNS.php', $data);
        $this->load->view('footer.php');
    }
     public function tovragenformTF(){
        $data['title'] = "persoonlijkheid";  
        $this->load->view('header.php', $data);
        $this->load->view('menubalk.php');
        $this->load->view('VragenTF.php', $data);
        $this->load->view('footer.php');
    }
     public function tovragenformJP(){
        $data['title'] = "persoonlijkheid";  
        $this->load->view('header.php', $data);
        $this->load->view('menubalk.php');
        $this->load->view('VragenJP.php', $data);
        $this->load->view('footer.php');
    }
    
}?>