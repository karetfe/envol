<?

class Esprit_Contact_Model_Resource_Message extends Mage_Core_Model_Resource_Db_Abstract{
    
   protected function _construct(){       
       $this->init('esprit_contact/message','entity_id');
   }     
}
?>