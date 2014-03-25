<?php

if (Mage::helper('core')->isModuleEnabled('Aoe_DesignFallback')) {
    class Aoe_JsCssTstamp_Model_Package extends Aoe_DesignFallback_Model_Design_Package {}
} else {
    class Aoe_JsCssTstamp_Model_Package extends Mage_Core_Model_Design_Package {}
}
