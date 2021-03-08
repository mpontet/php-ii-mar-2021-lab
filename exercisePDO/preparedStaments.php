<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=phpcourse', 'vagrant', 'vagrant', [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);

    $stmt = $pdo->prepare("UPDATE customers SET lastname = :last WHERE firstname = 'John'");

    $stmt->execute([':last' => 'Marx']);

}catch(PDOException $e)
{
    echo "Failed :".$e->getMessage()."\n";
}