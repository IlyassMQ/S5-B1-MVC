<?php 
namespace App\models;
class Role {

    private int $id;
    private string $name;
    
    public function __construct(int $id , string $name){
        $this->id=$id;
        $this->name=$name;
    }

    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }

    public function getName(){
        return $this->id;
    }
    public function setName(string $name){
        $this->name = $name;
    }


}