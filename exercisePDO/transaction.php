<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=phpcourse', 'vagrant', 'vagrant', [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);

    $pdo->beginTransaction();

    // Series of SQL statements
    $stmt = $pdo->prepare('INSERT INTO customers (firstname,lastname) VALUES (?,?)');
    $stmt->execute(['John','Cruise']);


    $stmt = $pdo->prepare("UPDATE customers SET lastname = :last WHERE firstname = 'John'");
    $stmt->execute([':last' => 'Marx']);

    $pdo->commit();
}catch(PDOException $e)
{
    $pdo->rollBack();
    echo "Failed :".$e->getMessage()."\n";
}