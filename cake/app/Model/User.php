<?php
App::uses('SimplePsswordHasher', 'Controller/Component/Auht');
class User extends AppModel {
  
  
  public function beforeSave($options = array()) {
    $hasher = new SimplePasswordHasher;
    $password = $this->data['User']['password']; 
    $this->data['User']['password'] = $hasher->hash($password); 
  }
}
