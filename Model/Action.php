<?php

namespace Mykhailova\Action\Model;

use Magento\Framework\Model\AbstractModel;

class Action extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Mykhailova\Action\Model\ResourceModel\Action::class);
    }
}
