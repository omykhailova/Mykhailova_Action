<?php
namespace Mykhailova\Action\Observer;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Data\Tree\Node;
use Magento\Framework\Event\ObserverInterface;

class Topmenu implements ObserverInterface
{
    public function __construct()
    {
        // Observer initialization code...
        // You can use dependency injection to get any class this observer may need.
    }

    public function execute(EventObserver $observer)
    {
        /** @var \Magento\Framework\Data\Tree\Node $menu */
        $menu = $observer->getMenu();
        $tree = $menu->getTree();
        $data = [
            'name'      => __('Інше'),
            'id'        => 'some-unique-id-here',
            'url'       => 'url goes here'
        ];
        $node = new Node($data, 'id', $tree, $menu);
        $menu->addChild($node);
        return $this;
        // Additional observer execution code...
    }
}
