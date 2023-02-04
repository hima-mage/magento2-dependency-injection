<?php

namespace HimaMage\DependencyExample\Model\VirtualType;

class Name
{
    public function getName(string $name) : string
    {
        return $name;
    }
}
