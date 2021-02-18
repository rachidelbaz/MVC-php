<?php 
class User{
    private $db;
    public function __construct(){
        $this->db=new Database;
    }
    public function getUsers(){
        $this->db->Query("SELECT * FROM `user`");
        $result=$this->db->ResultSet();
        return $result;
    }
}