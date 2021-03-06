<?php

namespace Registry;

class Afilias implements RegistryInterface
{
    use CredentialsEPP, CredentialsWeb
    {
        CredentialsEPP::getUser insteadof CredentialsWeb;
        CredentialsEpp::getPassword insteadof CredentialsWeb;
        CredentialsWeb::getUser as getUserWeb;
        CredentialsWeb::getPassword as getPasswordWeb;
    }

    protected string $user;
    protected string $password;
    protected string $userWeb = 'user-registrar';
    protected string $passwordWeb = 'ksdfewre98';
    protected string $nameRegistry = 'AFILIAS';

    public function __construct(string $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }
    public function getNameRegistry(): string
    {
        return $this->nameRegistry;
    }

    public function createDomain(string $dominio, array $dnss, array $contactos): void
    {
        echo "Creando dominio $dominio con dnss ".var_export($dnss,true)." y con contactos ".var_export($contactos,true)."\n";
    }

    public function connect(): bool
    {
        return false;
    }
}