<?php
namespace Registry;

class ContainerRegistry
{
    protected RegistryInterface $registry;
    public function __construct(RegistryInterface $registry)
    {
        $this->registry = $registry;
    }

    public function getNameRegistry()
    {
        return $this->registry->getNameRegistry();
    }
}