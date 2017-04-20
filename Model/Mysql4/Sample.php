<?php
  
class Yuva_Sample_Model_Mysql4_Sample extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {  
        $this->_init('sample/sample', 'sample_id');
    }
} 