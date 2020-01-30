<?php

namespace Mykhailova\Action\Model\ResourceModel\Action;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'action_id';

    protected function _construct()
    {
        $this->_init(\Mykhailova\Action\Model\Action::class, \Mykhailova\Action\Model\ResourceModel\Action::class);
    }
}
