<?php
class Match_model extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
    }  
    
    public function getRandom($ID){
        $sql = "SELECT * FROM Users WHERE UserID = ?";
        $query = $this->db->query($sql, array($ID));
        return $query->result_array();
    }
    
    public function getUsersFromVk($geslachtVK, $minAgeVK, $maxAgeVK){
        $sql = "SELECT UserID FROM Voorkeuren WHERE Vk_geslacht = ? AND Vk_age_min >= ? AND Vk_age_max <= ?";
        $query = $this->db->query($sql, array($geslachtVK, $minAgeVK, $maxAgeVK));
        return $query->result_array();
    }
    
    public function getUsersFromVkBeide($minAgeVK, $maxAgeVK){
        $sql = "SELECT UserID FROM Voorkeuren WHERE Vk_age_min >= ? AND Vk_age_max <= ?";
        $query = $this->db->query($sql, array($minAgeVK, $maxAgeVK));
        return $query->result_array();
    }
    
    public function getAllPersByID($UserID){
        $sql = "SELECT I, E, J, P, N, S, T, F FROM Persoonlijkheidstype WHERE UserID = ?";
        $query = $this->db->query($sql, array($UserID));
        return $query->result_array();
    }
    
    public function getAllPers(){
        $sql = "SELECT I, E, J, P, N, S, T, F, UserID FROM Persoonlijkheidstype";
        $query = $this->db->query($sql, array());
        return $query->result_array();
    }
    
    public function existUserID($getal){ 
        
        $sql = "SELECT * FROM Users WHERE EXISTS (SELECT * FROM Users WHERE UserID = ?)";
        $query = $this->db->query($sql, array($getal));
        return $query->num_rows();
    }
    public function UpdatePersVk($V_E, $V_I, $V_N, $V_S, $V_T, $V_F, $V_J, $V_P, $userID){
        $sql = "UPDATE Voorkeuren SET V_E = ?, V_I = ?, V_N =?, V_S = ?, V_T = ?, V_F = ?, V_J = ?, V_P =  ? WHERE UserID = ?";
        $this->db->query($sql, array($V_E, $V_I, $V_N, $V_S, $V_T, $V_F, $V_J, $V_P, $userID));
    }
    
    public function getPersVk($UserID){
        $sql = "SELECT V_I, V_E, V_J, V_P, V_N, V_S, V_T, V_F FROM Voorkeuren WHERE UserID = ?";
         $query = $this->db->query($sql, array($UserID));
        return $query->result_array();
    }
}
?>