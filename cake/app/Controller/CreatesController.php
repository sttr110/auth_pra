<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class CreatesController extends AppController {
  //UserModel define
  public $uses = array('User');

  public function index() {
    $ph = new SimplePasswordHasher();
    $this->set('users', $this->User->find('all'));
        
    if($this->request->is(array('post', 'put'))) {

      $this->User->create();
      if($this->User->save($this->request->data)) {
        $this->Session->setFlash('新規ユーザの登録に成功しました');
        return $this->redirect(array(
          'controller' => 'creates',
          'action' => 'index'
        ));
      } else {
        $this->Session->setFlash('ユーザの登録に失敗したぜよ');
      }
    }
  }

  public function delete() {
    $users = $this->User->find('all');
    foreach($users as $user) {
      $this->User->delete($user['User']['id']);
    }
        return $this->redirect(array(
          'controller' => 'creates',
          'action' => 'index'
        ));
 
  }
}
