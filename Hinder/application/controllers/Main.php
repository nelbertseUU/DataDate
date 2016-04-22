<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
	public function index(){ 
                
        $data['title'] = "Home";
        $this->load->view('header', $data);
        $this->load->view('menubalk');
        $this->load->view('homepage');
	    $this->load->view('footer');
    }
        
    public function getProfiles(){
        
        $dingetje = array();
        $driemerkenarray = array();
        $merkenarray = array();
        $merkVk = '';
        $alleID = array();
        $randomID = '';
        
        foreach($this->User_model->getID() as $row){
          $id = $row['UserID'];
            $alleID[] = array('id' => $id);
        }
        
        shuffle($alleID);
        
        for($i = 1; $i < 7; $i++){
             $randomID = $alleID[$i];
            
            foreach($this->User_model->getVoorkeuren($randomID) as $row){
                
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
               
            foreach($this->User_model->getTypeByID($randomID) as $row){
                $ptype = $row['TYPE'];
            }
            foreach($this->Match_model->getRandom($randomID) as $row){
                $nick = $row['Nickname'];
                $geb = $row['Geboortedatum'];
                $geslacht = $row['Geslacht'];
                $beschrijving = $row['Beschrijving'];
                $id = $row['UserID'];
            }   
            
            $dingetje[] = array( 'gebruiker' => $nick, 'gebdatum' => $geb, 'geslacht' => $geslacht, 'beschrijving' => $beschrijving, 'persType' => $ptype, 'merkVk' => $driemerken, 'id' => $id);
       
        }
        
        $dingetje = json_encode($dingetje);
        echo $dingetje;
        
    }
   
}
?>