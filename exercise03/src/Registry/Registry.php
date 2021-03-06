<?php
namespace Registry;

interface Registry {

    public function getNameRegistry(): string;


    public function createDomain(string $dominio, array $dnss, array $contactos): void;

    public function connect(): bool;
}
