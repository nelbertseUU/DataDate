<?php
class User_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
    }  

    public function insertUser($email, $pass, $gebdate, $voornaam, $achternaam, $geslacht, $nick, $beschrijving){
        $sql = "INSERT INTO Users (Email, PassHash, Geboortedatum, Voornaam, Achternaam, Geslacht, Nickname, Beschrijving) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($sql, array($email, $pass, $gebdate, $voornaam, $achternaam, $geslacht, $nick, $beschrijving));
    }
    
    public function updateUser($email, $gebdate, $voornaam, $achternaam, $geslacht, $nick, $UserID){
        $sql = "UPDATE Users SET Email = ?, Geboortedatum = ?, Voornaam = ?, Achternaam = ?, Geslacht = ?, Nickname = ? WHERE UserID = ?";
        $this->db->query($sql, array($email, $gebdate, $voornaam, $achternaam, $geslacht, $nick, $UserID));
    }
public function getID(){
        $sql = "SELECT UserID FROM Users";
        $query = $this->db->query($sql, array());
        return $query->result_array();
    }
    public function getUser($nick){
        $sql = "SELECT * FROM Users WHERE Nickname = ?";
        $query = $this->db->query($sql, array($nick));
        return $query->result_array();
    }
    
    public function getUserById($ID){
        $sql = "SELECT * FROM Users WHERE UserID = ?";
        $query = $this->db->query($sql, array($ID));
        return $query->result_array();
    }

    public function nickbestaat($nick){
        $sql = "SELECT Nickname FROM Users WHERE Nickname = ?";
        $query = $this->db->query($sql, array($nick));
        return $query->result_array();
    }

    public function selectPass($nick){
        $sql = "SELECT PassHash, UserID FROM Users WHERE Nickname = ?";
        $query = $this->db->query($sql, array($nick));
        return $query->result_array();
    }
    
    public function getIDbyNick($nick){
        $sql = "SELECT UserID FROM Users WHERE Nickname = ?";
        $query = $this->db->query($sql, array($nick));
        return $query->result_array();
    }
    
    public function createPerstestrow($UserID){
        $sql = "INSERT INTO Persoonlijkheidstype (UserID) VALUES(?)";
        $this->db->query($sql, array($UserID));
    }
    
    public function createVkrow($UserID, $geslachtVk, $minVk, $maxVk){
        $sql = "INSERT INTO Voorkeuren (UserID, Vk_geslacht, Vk_age_min, Vk_age_max) VALUES(?, ?, ?, ?)";
        $this->db->query($sql, array($UserID, $geslachtVk, $minVk, $maxVk));
    }
    
    public function getAllPers($UserID){
        $sql = "SELECT I, E, J, P, N, S, T, F FROM Persoonlijkheidstype WHERE UserID = ?";
        $query = $this->db->query($sql, array($UserID));
        return $query->result_array();
    }
    
    public function updateEI($E, $I, $ID){
        $sql = "UPDATE Persoonlijkheidstype SET E = ?, I = ? WHERE UserID = ?";
        $this->db->query($sql, array($E, $I, $ID));
    }
    
    public function updateNS($N, $S, $ID){
        $sql = "UPDATE Persoonlijkheidstype SET N = ?, S = ? WHERE UserID = ?";
        $this->db->query($sql, array($N, $S, $ID));
    }
    
    public function updateTF($T, $F, $ID){
        $sql = "UPDATE Persoonlijkheidstype SET T = ?, F = ? WHERE UserID = ?";
        $this->db->query($sql, array($T, $F, $ID));
    }
    
    public function updateJP($J, $P, $ID){
        $sql = "UPDATE Persoonlijkheidstype SET J = ?, P = ? WHERE UserID = ?";
        $this->db->query($sql, array($J, $P, $ID));
    }
    
    public function updateType($PType, $ID){
        $sql = "UPDATE Persoonlijkheidstype SET TYPE = ? WHERE UserID = ?";
        $this->db->query($sql, array($PType, $ID));
    }

    public function updateBes($tekst, $ID){
        $sql = "UPDATE Users SET Beschrijving = ? WHERE UserID = ?";
        $this->db->query($sql, array($tekst, $ID));
    }
    
    public function getBes($ID){
        $sql = "SELECT Beschrijving FROM Users WHERE UserID = ?";
        $query = $this->db->query($sql, array($ID));
        return $query->result_array();
    }
    
    public function getTypeByID($UserID){
        $sql = "SELECT TYPE FROM Persoonlijkheidstype WHERE UserID = ?";
        $query = $this->db->query($sql, array($UserID));
        return $query->result_array();
    }
    
    public function updateGea($tekst, $ID){
        $sql = "UPDATE Voorkeuren SET Vk_geslacht = ? WHERE UserID = ?";
        $this->db->query($sql, array($tekst, $ID));
    }
    
    public function getVoorkeuren($ID){
        $sql = "SELECT * FROM Voorkeuren WHERE UserID = ?";
        $query = $this->db->query($sql, array($ID));
        return $query->result_array();
    }
    
    public function updateMerkvoorkeuren($merken, $UserID){
        $sql = "UPDATE Voorkeuren SET VK_merk = ? WHERE UserID = ?";
        $this->db->query($sql, array($merken, $UserID));
    }
    
    public function updateAge($min, $max, $ID){
        $sql = "UPDATE Voorkeuren SET Vk_age_min = ?, Vk_age_max = ? WHERE UserID = ?";
        $this->db->query($sql, array($min, $max, $ID));
    }
    
    public function deleteUserFromUsers($UserID){
        $sql = "DELETE FROM Users WHERE UserID = ?";      
        $this->db->query($sql, array($UserID));
    }
    
    public function deleteUserFromPersoonlijkheidstype($UserID){
        $sql = "DELETE FROM Persoonlijkheidstype WHERE UserID = ?";      
        $this->db->query($sql, array($UserID));
    }
    
    public function deleteUserFromVoorkeuren($UserID){
        $sql = "DELETE FROM Voorkeuren WHERE UserID = ?";      
        $this->db->query($sql, array($UserID));
    }
    
    public function insertLike($UserID, $OtherUserID){
        $sql = "INSERT INTO Likes (UserID, OtherUserID) VALUES(?, ?)";
        $this->db->query($sql, array($UserID, $OtherUserID));
    }
    public function getLike($UserID, $anderID){
        $sql = "SELECT OtherUserID FROM Likes WHERE UserID = ? AND OtherUserID = ?";
         $query = $this->db->query($sql, array($UserID, $anderID));
        return $query->result_array();
    }
}
?>