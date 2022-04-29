<?
/**
 * OOP in php
 * 
 */
class StudentModel{
    private $name;
    private $email;
    private $phone;

    function __construct($email="",$phone=""){
        $this->phone=$phone;
        $this->email=$email;
    }

    function setName($name){
        $this->name =$name;
    }
    function getName(){
        //die("the program died");
        return $this->name;
    }

    function getEmail(){
        return $this->email;
    }
    function getPhone(){
        return $this->phone;
    }

    //BITINAMI WAPPSTACK

}
?>