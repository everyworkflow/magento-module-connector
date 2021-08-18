<?php

/**
 * @copyright EveryWorkflow. All rights reserved.
 */

namespace EveryWorkflow\Connector\Model\Config\Source;

class EveryWorkflowMode implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'test', 'label' => __('Test')],
            ['value' => 'prod', 'label' => __('Production')],
        ];
    }
}
