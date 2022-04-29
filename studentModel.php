<?php
/**
 * OOP in php
 * 
 */
class StudentModel extends dbConnection{
    private $name;
    private $email;
    private $phone;
    private $id;

    function __construct($name="",$email="",$phone=""){
        parent::__construct();
        $this->phone=$phone;
        $this->email=$email;
        $this->name=$name;
    }

    function setName($name){
        $this->name =$name;
    }
    function getName(){
        //die("the program died");
        return $this->name;
    }

    function setId($id){
        $this->id = $id;
    }

    function getId(){
        return $this->id;
    }

    function getEmail(){
        return $this->email;
    }
    function getPhone(){
        return $this->phone;
    }

   function save(){
       try{
            $stm = $this->db->prepare("INSERT INTO student(name,email,phone)VALUES(?,?,?)");
            $stm->execute([$this->name, $this->email, $this->phone]);
            if($this->db->lastInsertId() >0 ){
                return "Data Saved";
            }
            else{
                return "Something went wrong";
            }
        }
        catch(Exception $e){
            return $e->getMessage();
        }
   }

   function getAll(){
        try{
            $stm = $this->db->prepare("SELECT * FROM student");
            $stm->execute();
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
   }

   function getById(){
    try{
        $stm = $this->db->prepare("SELECT * FROM student WHERE ID=?");
        $stm->execute([$this->ID]);
        return $stm->fetchAll();
    }
    catch(Exception $e){
        return $e->getMessage();
    }
   }

}
?>