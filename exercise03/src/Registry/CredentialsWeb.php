<?php
namespace Registry;

trait CredentialsWeb
{
    public function getUser(): string
    {
        return $this->userWeb;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}