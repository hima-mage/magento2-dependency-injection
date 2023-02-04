<?php

namespace HimaMage\DependencyExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements  ActionInterface
{
    /**
     * @var PageFactory
     */
    protected  PageFactory $_pageFactory;

    public function __construct(PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
    }

    public function execute()
    {
         $page = $this->_pageFactory->create();
         $page->getConfig()->getTitle()->set('Dependency injection in magento 2');
         return $page;
    }
}
