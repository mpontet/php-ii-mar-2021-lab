<?php
namespace Registry;

class Verisign extends Registry{

    public function __construct(string $nameRegistry, string $user, string $pw){
        parent::__construct($nameRegistry,$user,$pw);
        $this->setTlds();
    }

    private function setTlds(){
        $this->tlds = ['com','net','cc','tv','name'];
    }

    public function setContacts(array $contacts){
        echo "Change contacts in DataBase ".serialize($contacts)." \n";
    }

}
?>