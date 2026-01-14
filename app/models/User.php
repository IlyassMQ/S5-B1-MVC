<?php

class User {

    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private int $roleId;

    public function __construct(int $id,string $name,string $email,string $password,int $roleId){
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
        $this->roleId=$roleId;
    }

    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id=$id;
    }

    public function getName(): string{
        return $this->name;
    }
    public function setName(string $name): void{
        $this->name = $name;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail(string $email): void{
        $this->email = $email;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword(string $password): void{
        $this->password = $password;
    }

    public function getroleID(){
        return $this->roleId;
    }
    public function setroleID(int $roleId): void{
        $this->roleId = $roleId;
    }

}