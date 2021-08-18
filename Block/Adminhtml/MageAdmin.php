<?php

/**
 * @copyright EveryWorkflow. All rights reserved.
 */

namespace EveryWorkflow\Connector\Block\Adminhtml;

use Magento\Backend\Block\Template;
use EveryWorkflow\Connector\Helper\ConfigHelper;

class MageAdmin extends Template
{
    protected ConfigHelper $configHelper;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        ConfigHelper $configHelper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->configHelper = $configHelper;
    }

    public function getConfigHelper(): ConfigHelper
    {
        return $this->configHelper;
    }
}
