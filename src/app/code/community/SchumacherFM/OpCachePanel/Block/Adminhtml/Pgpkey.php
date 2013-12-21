<?php
/**
 * @category    SchumacherFM_OpCachePanel
 * @package     Block
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     http://www.gnu.org/licenses/gpl.html  GPL
 */
class SchumacherFM_OpCachePanel_Block_Adminhtml_OpCachePanelkey extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    /**
     * Initialize page
     *
     * @return void
     */
    public function __construct()
    {
        $this->_controller     = 'adminhtml_pgpkey';
        $this->_blockGroup     = 'pgp';
        $this->_headerText     = Mage::helper('pgp')->__('Manage PGP Keys');
        $this->_addButtonLabel = Mage::helper('pgp')->__('Add PGP Key');
        parent::__construct();
    }
}
