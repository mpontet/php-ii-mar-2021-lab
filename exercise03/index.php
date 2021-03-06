<?php

define('BASE',__DIR__);

spl_autoload_register(
    function($class) {
        $file = str_replace('\\','/',$class).'.php';
        require BASE.'/src/'.$file;
    }
);
use Registry\RegistryInterface;
use Registry\Afilias;
use Exception\FailConnectionException;
use Registry\ContainerRegistry;

try {

    $afilias = new Afilias('1445', 'lasdasdf');

    echo "The user is ".$afilias->getUser()."\n";

    echo "The user web is ".$afilias->getUserWeb()."\n";

    $containerRegistry = new ContainerRegistry($afilias);

    echo "The name of the Registry is ".$containerRegistry->getNameRegistry()."\n";

    if(!$afilias->connect())
        throw new FailConnectionException($afilias);

    if(!$afilias->createDomain('prueba.com',['ns.dinahosting.com','ns2.dinahosting.com'],['registrant','admin','technical','billing']))
        throw new Exception('Fail create domain');
} catch( FailConnectionException $e)
{
    $errorLog = date('Y-m-d H:i:s'). '|' . get_class($e).'.'.$e->getMessage()."\n";
    echo "$errorLog";	 
    error_log($errorLog,3,'/var/tmp/error.log');
} catch( Exception $e)
{
	$errorLog = date('Y-m-d H:i:s'). '|' . get_class($e).'.'.$e->getMessage()."\n";
	echo "$errorLog";
	error_log($errorLog,3,'/var/tmp/error.log');
} finally{
	$errorLog = 'Domain Create Attempted: '.date('Y-m-d H:i:s')."\n";
	echo "$errorLog";
    error_log($errorLog,3,'/var/tmp/registrys.log');
}



