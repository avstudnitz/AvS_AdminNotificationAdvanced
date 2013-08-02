<?php
/**
 * Module for improving Magento Admin Notifications
 *
 * @category   AvS
 * @package    AvS_AdminNotificationAdvanced
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software Licence 3.0 (OSL-3.0)
 * @author     Andreas von Studnitz <avs@avs-webentwicklung.de>
 */
class AvS_AdminNotificationAdvanced_Block_Window extends Mage_Adminhtml_Block_Notification_Window
{
    /**
     * Initialize block window
     *
     */
    protected function _construct()
    {
        $this->setMarkAllReadText(Mage::helper('adminnotificationadvanced')->__('Mark all read'));
        $this->setMarkAllReadUrl(Mage::getSingleton('adminhtml/url')->getUrl('adminhtml/notificationadvanced/markallread'));

        $this->setDeleteAllText($this->__('Delete all'));
        $this->setDeleteAllUrl(Mage::getSingleton('adminhtml/url')->getUrl('adminhtml/notificationadvanced/deleteall'));

        parent::_construct();
    }
}
