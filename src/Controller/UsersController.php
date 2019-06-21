<?php
namespace App\Controller;

use App\Controller\AppController;


class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function search()
    {
        $search = $this->request->getQuery('q');
        $this->paginate = [
            'limit' => '5'
        ];
        $user = $this->paginate($this->Users->find()->where(function($exp, $query) use($search){
            return $exp->like('NAME','%'.$search.'%');
        }));
        $this->set('user', $user);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        } 
        $this->set('NAME', $user->NAME);
        $this->set('ADDRESS', $user->ADDRESS);
        $this->set('PHONE_NO', $user->PHONE_NO);
        $this->set('EMAIL', $user->EMAIL);
        $this->set('PASSWORD', $user->PASSWORD);
        $this->set('ACCESS_CODE', $user->ACCESS_CODE);
        $this->set(compact('user')); 
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if($user['ACCESS_CODE'] == 1001){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl('/users/index'));
            }
            else if($user['ACCESS_CODE'] == 1002){
                $this->Auth->setUser($user);
                return $this->Auth->allow($this->redirect(array('controller'=>'reservation','action' => 'index')));
            }            
            $this->Flash->error('Your username or password is incorrect.');
        }
    }
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout']);
    }
    
    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }

}
