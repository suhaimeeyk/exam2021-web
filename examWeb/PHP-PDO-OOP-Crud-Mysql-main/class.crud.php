<?php

class crud {
    private $db;
    function __construct($dbc) {
        $this->db = $dbc;
    }
    

    //mytable
    public function selectdata(){
        try{
            $stmt = $this->db->prepare("SELECT * FROM mytable");
            $stmt->execute();
            return $stmt;

        } catch(PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    
    public function create($name, $phone, $email) {
        try {
            $stmt = $this->db->prepare("INSERT INTO mytable(name, phone, email) VALUES(:name, :phone, :email)");
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            return $stmt;
        } catch(PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    
    public function getID($name) {
        $stmt = $this->db->prepare("SELECT * FROM mytable WHERE name=:name");
        $stmt->execute(array(":name"=>$name));
        $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
        // return $stmt;
    }
    
    public function update($id, $name, $phone, $email) {
        try {
            $stmt = $this->db->prepare("UPDATE mytable SET name=:name, phone=:phone, email=:email WHERE name=:id");
            $stmt->bindparam(":name",$name);
            $stmt->bindparam(":phone",$phone);
            $stmt->bindparam(":email",$email);
            $stmt->bindparam(":id",$id);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    
    public function delete($name) {
        $stmt = $this->db->prepare("DELETE FROM mytable WHERE name=:name");
        $stmt->bindparam(":name", $name);
        $stmt->execute();
        return $stmt;
    }


}
?>