<?php
namespace  Registry;

class Afilias extends Registry{

    public function __construct(string $nameRegistry, string $user, string $pw){
        parent::__construct($nameRegistry,$user,$pw);
        $this->setTlds();
    }

    private function setTlds(){
        $this->tlds = ['info','ed','sc'];
    }

    public function setContacts(array $contacts){
        echo "Change contacts in Registry ".serialize($contacts)." \n";
    }


}