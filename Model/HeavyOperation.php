<?php

namespace HimaMage\DependencyExample\Model;

class HeavyOperation
{
    private string $name;

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        $this->name = "just Heavy Operation on database";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


}
