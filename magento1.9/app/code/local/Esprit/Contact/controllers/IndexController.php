<?php

class Esprit_Contact_IndexController extends Mage_Core_Controller_Front_Action {


  public function indexAction(){
  $this->loadLayout()->renderLayout();
  
  }

  public function postAction(){
  if(!$this->_validateFormKey())
  {
      
      $this->_redirect('contact/index/index');
      return;
  }
      $postData = Mage::app()->getRequest()->getParams();
      var_dump($postData);
  }
}
