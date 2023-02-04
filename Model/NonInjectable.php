<?php

namespace HimaMage\DependencyExample\Model;

class NonInjectable implements  NonInjectableInterface
{
    public function getId() : string
    {
        return 'this is noninjectable';
    }

}
