<?php
namespace Registry;

trait CredentialsEPP
{
    public function getUser(): string
    {
        return $this->user;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}