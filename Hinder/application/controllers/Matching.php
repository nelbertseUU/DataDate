<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Matching extends MY_Controller {
    
    public function index()
    {
        $data['title'] = "Matching";
        $this->load->view('header', $data);
        $this->load->view('menubalk');
        $this->load->view('match');
	    $this->load->view('footer');
    }
    
    public function matchform()
    {
        $UserID = $_SESSION['UserID'];
        $alleID = array();
        $match = array();
        
        foreach($this->User_model->getVoorkeuren($UserID) as $row){
            $geslachtVk = $row['Vk_geslacht'];
            $min_age = $row['Vk_age_min'];
            $max_age = $row['Vk_age_max'];
        }
        
        foreach($this->User_model->getUserById($UserID) as $row){
            $userGeslacht = $row['Geslacht'];
            $birthDate = $row['Geboortedatum'];
            $userAge = $this->getAge($birthDate);  
        }
   
        foreach($this->User_model->getID() as $row){
            $id = $row['UserID'];
            $alleID[] =  $id;
        }
        
        //geslachtvoorkeur van de gebruiker
        $alleIDGeslacht1 = array();
        foreach($alleID as $key => $id){
            
            if($geslachtVk !== 'B'){
                foreach($this->User_model->getUserById($id) as $row1){
                    if($geslachtVk == $row1['Geslacht']){
                         $alleIDGeslacht1[] = $id;
                    }
               }  
            }
            else{
                $alleIDGeslacht1[] = $id;
            }
        }
        
        //geslachtvoorkeur van de pre-matches
         $alleIDGeslacht2 = array();
        foreach($alleIDGeslacht1 as $key => $id){
           
            foreach($this->User_model->getVoorkeuren($id) as $row){
                $vkGes = $row['Vk_geslacht'];
                if($vkGes == 'B'){
                    $alleIDGeslacht2[] = $id;
                }else if($vkGes == $userGeslacht){
                    $alleIDGeslacht2[] = $id;
                }
            }
        }
        
       
        $alleIDLeeftijd1 = array();
        //leeftijdsvoorkeur van de gebruiker
        foreach($alleIDGeslacht2 as $key => $id){
            foreach($this->User_model->getUserById($id) as $row){
                $birthDate = $row['Geboortedatum'];
                $age = $this->getAge($birthDate); 
            if(($age > $min_age) and ($age < $max_age)){
                $alleIDLeeftijd1[] = $id;
            }
            }
        }
        
        $alleIDLeeftijd2 = array();
        //leeftijdsvoorkeur van de pre-matches
        foreach($alleIDLeeftijd1 as $key => $id){
           
            foreach($this->User_model->getVoorkeuren($id) as $row){
                $vkmin = $row['Vk_age_min'];
                $vkmax = $row['Vk_age_max'];
                if(($userAge > $vkmin) and ($userAge < $vkmax)){
                    $alleIDLeeftijd2[] = $id;
                }
            }
        }
        
        //opzoeken van de beste match

        foreach($this->Match_model->getPersVk($UserID) as $row){
            $I_u = $row['V_I'];
            $E_u = $row['V_E'];
            $J_u = $row['V_J'];
            $P_u = $row['V_P'];
            $N_u = $row['V_N'];
            $S_u = $row['V_S'];
            $T_u = $row['V_T'];
            $F_u = $row['V_F'];
        }     
         
        foreach($alleIDLeeftijd2 as $id){
               
           foreach($this->User_model->getVoorkeuren($id) as $row){
                
                if( $row['Vk_merk'] != NULL){
                    $merkVk = $row['Vk_merk'];
                    list($merk1, $merk2, $merk3) = explode(", ", $merkVk);
                     $driemerkenarray = array($merk1, $merk2, $merk3);
                }
                    if(isset($merkVk)){
                    $driemerken = implode(', ', $driemerkenarray);
                }
                else{
                    $driemerken = $merkVk;
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
            foreach($this->Match_model->getAllPersByID($id) as $row){
            $I_m = $row['I'];
            $E_m = $row['E'];
            $J_m = $row['J'];
            $P_m = $row['P'];
            $N_m = $row['N'];
            $S_m = $row['S'];
            $T_m = $row['T'];
            $F_m = $row['F'];    
            } 
            
            $afstand = $this->getAfstand($I_m, $E_m, $J_m, $P_m, $N_m, $S_m, $T_m, $F_m, $I_u, $E_u, $J_u, $P_u, $N_u, $S_u, $T_u, $F_u);
            
            $match[] = array('afstand' => $afstand, 'gebruiker' => $nick, 'gebdatum' => $geb, 'geslacht' => $geslacht, 'beschrijving' => $beschrijving, 'persType' => $ptype, 'merkVk' => $driemerken, 'id' => $id);
       
        }
        sort($match);
        
        /*
        $j1 = json_encode($alleID);
        $j2 = json_encode($alleIDGeslacht1);
        $j3 = json_encode($alleIDGeslacht2);
        $j4 = json_encode($alleIDLeeftijd1);
        $j5 = json_encode($alleIDLeeftijd2);
         echo $j1;
        echo $j2; 
        echo $j3;
        echo $j4;
        echo $j5;
        */
        
        $match = json_encode($match);
       
        echo $match;
        
       /* foreach($this->Match_model->getAllPersByID($UserID) as $row){
            $I_user = $row['I'];
            $E_user = $row['E'];
            $J_user = $row['J'];
            $P_user = $row['P'];
            $N_user = $row['N'];
            $S_user = $row['S'];
            $T_user = $row['T'];
            $F_user = $row['F'];
        }   
        
        
        
        foreach($this->Match_model->getUsersFromVk($geslachtVk, $min_age, $max_age) as $row){
            
        }
        
        $data['I'] = $I_user;
        $data['E'] = $E_user;
        $data['J'] = $J_user;
        $data['P'] = $P_user;
        $data['N'] = $N_user;
        $data['S'] = $S_user;
        $data['T'] = $T_user;
        $data['F'] = $F_user;
        $data['geslachtVk'] = $geslachtVk;
        $data['min_age'] = $min_age;
        $data['max_age'] = $max_age;*/
        
       
    }
    public function getAfstand($I_m, $E_m, $J_m, $P_m, $N_m, $S_m, $T_m, $F_m, $I_u, $E_u, $J_u, $P_u, $N_u, $S_u, $T_u, $F_u){
        $d1 = '';
        $d2 = '';
        $d3 = '';
        $d4 = '';
        
        if($I_u > $E_u){      
            if($I_u > $I_m){
                $d1 = $I_u - $I_m;
            }
            else{
                $d1 = $I_m - $I_u;
            }
        }
        else{
            if($E_u > $E_m){
                $d1 = $E_u - $E_m;
            }
            else{
                $d1 = $E_m - $E_u;
            }
        } 
        
        if($S_u > $N_u){
            if($S_u > $S_m){
                $d2 = $S_u - $S_m;
            }
            else{
                $d2 = $S_m - $S_u;
            }
        }
        else{
            if($N_u > $N_m){
                $d2 = $N_u - $N_m;
            }
            else{
                $d2 = $N_m - $N_u;
            }
        } 
        
        if($F_u > $T_u){
            if($F_u > $F_m){
                $d3 = $F_u - $F_m;
            }
            else{
                $d3 = $F_m - $F_u;
            }
        }
        else{
            if($T_u > $T_m){
                $d3 = $T_u - $T_m;
            }
            else{
                $d3 = $T_m - $T_u;
            }
        } 
    
        if($P_u > $J_u){
            if($P_u > $P_m){
                $d4 = $P_u - $P_m;
            }
            else{
                $d4 = $P_m - $P_u;
            }
        }
        else{
            if($J_u > $J_m){
                $d4 = $J_u - $J_m;
            }
            else{
                $d4 = $J_m - $J_u;
            }
       }
        
       return (($d1 + $d2 + $d3 + $d4)/400);
    }
    
    
    public function getAge($birthDate){ 
        $birthDate = explode("-", $birthDate);
        return (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
        ? ((date("Y") - $birthDate[2]) - 1)
        : (date("Y") - $birthDate[2]));
    }
}
?>