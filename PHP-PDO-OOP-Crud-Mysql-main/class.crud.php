<?php

class crud {
    private $db;
    function __construct($dbc) {
        $this->db = $dbc;
    }
    
    public function selectdata(){
        try{
            $stmt = $this->db->prepare("SELECT * FROM testpdo");
            $stmt->execute();
            return $stmt;

        } catch(PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function create($fname, $lname, $email, $contact) {
        try {
            $stmt = $this->db->prepare("INSERT INTO testpdo(firstname, lastname, email, contact) VALUES(:fname, :lname, :email, :contact)");
            $stmt->bindParam(":fname", $fname);
            $stmt->bindParam(":lname", $lname);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":contact", $contact);
            $stmt->execute();
            return $stmt;
        } catch(PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    
    public function getID($firstname) {
        $stmt = $this->db->prepare("SELECT * FROM testpdo WHERE firstname=:firstname");
        $stmt->execute(array(":firstname"=>$firstname));
        $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
        // return $stmt;
    }
    
    public function update($id, $fname, $lname, $email, $contact) {
        try {
            $stmt = $this->db->prepare("UPDATE testpdo SET firstname=:fname, lastname=:lname, email=:email, contact=:contact WHERE firstname=:id");
            $stmt->bindparam(":fname",$fname);
            $stmt->bindparam(":lname",$lname);
            $stmt->bindparam(":email",$email);
            $stmt->bindparam(":contact",$contact);
            $stmt->bindparam(":id",$id);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    
    public function delete($firstname) {
        $stmt = $this->db->prepare("DELETE FROM testpdo WHERE firstname=:firstname");
        $stmt->bindparam(":firstname", $firstname);
        $stmt->execute();
        return $stmt;
    }
    
    
    
}
?>