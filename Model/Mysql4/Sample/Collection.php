<?php
  
class Yuva_Sample_Model_Mysql4_Sample_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        //parent::__construct();
        $this->_init('sample/sample');
    }
}