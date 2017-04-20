<?php
  
class Yuva_Sample_Model_Sample extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('sample/sample');
    }
} 