<?php

class Users extends Conectar{
    private $db;
    private $users;

    public function __construct(){
        $this->db = Conectar::conexion();
        $this->users = array();
    }

    public function login($email,$password){
        $sql = "SELECT * FROM users WHERE email = ?";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(1,$email);
        if(!$sql->execute()){
            echo "error al validar que existe email";
        }else{
            if($sql->rowCount()>0){
                echo "existe";
            }else{
                echo "no existe";
            }
        }
    }
}


?>