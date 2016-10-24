<?php

class Esprit_Contact_Block_Form extends Mage_Core_Block_Template {
    
    
    public function sayHello()
    {
        echo 'hi';
        
    }
    public function getSubmitURL()
    {
        
     return Mage::getUrl('contact/index/post');
        
    }
    
}

?>