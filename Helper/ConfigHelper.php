<?php

/**
 * @copyright EveryWorkflow. All rights reserved.
 */

namespace EveryWorkflow\Connector\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class ConfigHelper extends AbstractHelper
{
    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    public function getGeneralConfig($code, $storeId = null)
    {
        return $this->getConfigValue('ew_connect/general/' . $code, $storeId);
    }

    public function isEnabled($storeId = null)
    {
        return $this->getGeneralConfig('enable', $storeId);
    }

    public function getMode($storeId = null)
    {
        return $this->getGeneralConfig('mode', $storeId);
    }

    public function getMageAdminConfig($code, $storeId = null)
    {
        return $this->getConfigValue('ew_mage_admin/' . $this->getMode($storeId) . '/' . $code, $storeId);
    }
}
