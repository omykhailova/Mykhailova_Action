<?php

namespace Mykhailova\Action\Controller\Adminhtml\Action;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    public function execute()
    {
        $pageResult = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $pageResult->getConfig()->getTitle()->set(__('Акції'));

        return $pageResult;
    }
}