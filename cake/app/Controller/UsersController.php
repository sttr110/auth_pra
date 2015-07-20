<?php

class UsersController extends AppController {
  public $components = array('Auth');

  public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('login');
  }

  public function login() {
    if($this->request->is('post')) {
      if($this->Auth->login()) {
        echo "hello";
        return $this->redirect(array(
          'controller' => 'Users',
          'action' => 'mypage',
        )); 
      } else {
        $this->Session->setFlash('ログイン失敗しました。正しいユーザネームとパスワードを入力せんかい');
      }
    }
  }
  public function logout() {
    if($this->Auth->logout()) {
      return $this->redirect(array(
        'controller' => 'Users',
        'action' => 'login',
      )); 
    }
  }
 
  public function mypage() {
    $this->set('user', $this->Auth->user());
  }
}
