<?php
namespace Registry;

class Registry {
    public const GESTOR = 'ICANN';
    protected string $nameRegistry;
    protected string $user;
    protected string $pw;

    public function __construct($nameRegistry,$user,$pw){
        $this->nameRegistry = $nameRegistry;
        $this->user = $user;
        $this->pw = $pw;
    }
    public function setNameRegistry($nameRegistry){
        $this->nameRegistry = $nameRegistry;
    }

    public function getNameRegistry(){
        return $this->nameRegistry;
    }

    public function setUser($user){
        $this->user = $user;
    }

    public function getUser(){
        return $this->user;
    }

    public function setPassword($pw){
        $this->pw = $pw;
    }

    public function getPassword(){
        return $this->pw;
    }


}

?>