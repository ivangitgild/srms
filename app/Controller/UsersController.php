<?php
/**
 * Users Controller 
 */
App::uses('AppController', 'Controller');

class UsersController extends AppController {
    
    public function beforeFilter()
    {
        parent::beforeFilter();

        // For CakePHP 2.0
        $this->Auth->allow('*');

        // For CakePHP 2.1 and up
        $this->Auth->allow();
    }
    
    public function index()
    {
        
    }
    
    public function myprofile()
    {
        
    }
    
    public function login()
    {
        if ($this->Auth->loggedIn()) {
            $this->redirect($this->Auth->redirect());
        }
        
        if ($this->request->is('post')) {
            if ($this->Auth->login(array('username' => $_POST['username'], 'password' => md5($_POST['password'])))) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash('Your username or password was incorrect.');
            }
        }
        
    }
    
    public function logout() {
        if ($this->Auth->logout()) {
            $this->redirect($this->Auth->redirect());
        }
    }
}
?>
