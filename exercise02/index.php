<?php

define('BASE',__DIR__);

spl_autoload_register(
  function($class) {
      $file = str_replace('\\','/',$class).'.php';
      require BASE.'/src/'.$file;
  }
);
use Registry\Registry;
use Registry\Verisign;
use Registry\Afilias;

$verisign = new Verisign('Verisign','dinahosting','nfihtrye');
echo $verisign;
echo "Los tlds de ".$verisign->getNameRegistry()." son ".$verisign->getTlds()."\n";
$verisign->setContacts(['Registrant','Admin','Technical','Billing']);

echo "\n\n";

$afilias = new Afilias('Afilias','dh-1421','nfhtrdfeye');
echo $afilias;
$afilias->setPassword('jdjcndkdl');
echo "We change the password of ".$afilias->getNameRegistry().". The new password is: ".$afilias->getPassword().".\n";
echo "Los tlds de ".$afilias->getNameRegistry()." son ".$afilias->getTlds()."\n";
$verisign->setContacts(['Registrant2','Admin2','Technical2','Billing2']);

?>
