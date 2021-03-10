<?php

$email = '-pepe-@prueba.com.es';

if(preg_match("/^([A-Za-z0-9]+[\._-]*)*[A-Za-z0-9_-]@[A-Za-z0-9]+((\.|-*)?[A-Za-z0-9])*\.[A-Za-z]{2,20}$/",$email))
{
    echo "It is email \n";
}
else
{
    echo "It is not email \n";
}