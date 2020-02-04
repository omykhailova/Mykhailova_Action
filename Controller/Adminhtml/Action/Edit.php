<?php

namespace Mykhailova\Action\Controller\Adminhtml\Action;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Edit extends Action
{

    public function execute()
    {
        $pageResult = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $pageResult->getConfig()->getTitle()->set(__('Акція'));

        return $pageResult;
    }

}
