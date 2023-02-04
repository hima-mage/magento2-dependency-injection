<?php

namespace HimaMage\DependencyExample\Model;

use HimaMage\DependencyExample\Model\VirtualType\DefaultName;

class Main
{
    protected $data;
    private Injectable $injectable;
    private NonInjectableInterfaceFactory $nonInjectableFactory;
    private AbstractUtil $util;
    private HeavyOperation $heavyOperation;
    private DefaultName $defaultName;


    public function __construct(
        InjectableInterface           $injectable,
        NonInjectableInterfaceFactory $nonInjectableFactory,
        AbstractUtil                  $util,
        HeavyOperation $heavyOperation,
        DefaultName $defaultName,
        array                         $data = []
    )
    {
        $this->data = $data;
        $this->injectable = $injectable;
        $this->nonInjectableFactory = $nonInjectableFactory;
        $this->util = $util;
        $this->heavyOperation = $heavyOperation;
        $this->defaultName = $defaultName;
    }

    public  function getId(){
        return $this->data['id'];
    }

    /**
     * @return Injectable
     */
    public function getInjectable(): Injectable
    {
        return $this->injectable;
    }

    /**
     * @return NonInjectableFactory
     */
    public function getNonInjectableFactory(): NonInjectable
    {
        return $this->nonInjectableFactory->create();
    }

    /**
     * @return AbstractUtil
     */
    public function getUtil(): AbstractUtil
    {
        return $this->util;
    }

    /**
     * @return HeavyOperation
     */
    public function getHeavyOperation(): HeavyOperation
    {
        return $this->heavyOperation;
    }

    /**
     * @return DefaultName
     */
    public function getDefaultName(): DefaultName
    {
        return $this->defaultName;
    }


}
