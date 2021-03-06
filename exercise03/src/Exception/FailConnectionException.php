<?php
namespace Exception;

class FailConnectionException extends \Exception
{
    public function __construct($object)
    {
        $type = gettype($object);
        $msg = 'Failed Connection Object '.$type;
        parent::__construct($msg);
    }
}