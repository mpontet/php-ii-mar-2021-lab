<?php

define('BASE',__DIR__);

spl_autoload_register(
  function($class) {
      $file = str_replace('\\','/',$class).'.php';
      require BASE.'/src/'.$file;
  }
);
use Registry\Registry;

$verisign = new Registry('Verisign','dinahosting','nfihtrye');
echo "The user of Dinahosting in ".$verisign->getNameRegistry()." is ".$verisign->getUser().".\n";

$afilias = new Registry('Afilias','dh-1421','nfhtrdfeye');
$afilias->setPassword('jdjcndkdl');
echo "We change the password of ".$afilias->getNameRegistry().". The new password is: ".$afilias->getPassword().".\n";


?>
