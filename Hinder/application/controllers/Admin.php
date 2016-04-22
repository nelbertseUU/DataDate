<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Admin extends MY_Controller {
    public function index(){
        
      
        $data['title'] = "Admin";
        $this->load->view('header', $data);
        $this->load->view('menubalk');
        $this->load->view('adminpage', $data);
	    $this->load->view('footer');
        
        
        
        
    }
    
    public function resetVkType(){
        foreach($this->Match_model->getAllPers() as $row){
            $userID = $row['UserID'];
             $I_user = $row['I'];
            $E_user = $row['E'];
            $J_user = $row['J'];
            $P_user = $row['P'];
            $N_user = $row['N'];
            $S_user = $row['S'];
            $T_user = $row['T'];
            $F_user = $row['F'];
            
            $V_E = 100 - $E_user;
            $V_I = 100 - $I_user;
            $V_S = 100 - $S_user;
            $V_N = 100 - $N_user;
            $V_F = 100 - $F_user;
            $V_T = 100 - $T_user;
            $V_P = 100 - $P_user;
            $V_J = 100 - $J_user;
            
            $this->Match_model->UpdatePersVk($V_E, $V_I, $V_N, $V_S, $V_T, $V_F, $V_J, $V_P, $userID);
        }
        
        
    }
}
?>