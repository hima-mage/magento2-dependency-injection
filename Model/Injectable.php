<?php

namespace HimaMage\DependencyExample\Model;

class Injectable implements  InjectableInterface
{
    public function getId() : string
    {
        return  "this is string from injectable class";
    }

}
