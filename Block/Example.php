<?php

namespace HimaMage\DependencyExample\Block;

use HimaMage\DependencyExample\Model\Main;
use Magento\Framework\View\Element\Template;

class Example extends  Template
{


    private Main $main;

    public function __construct(
        Template\Context $context,
        Main $main,
        array $data = []
        )
    {
        parent::__construct($context, $data);

        $this->main = $main;
    }


    public  function  getMain() {
        return $this->main;
    }


}
