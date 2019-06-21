<?php
namespace App\Controller;

use App\Controller\AppController;
use cake\Event\event;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Colleges', 'Roles']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
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
            'contain' => ['Colleges', 'Roles']
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
        $colleges = $this->Users->Colleges->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'colleges', 'roles'));
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
        $colleges = $this->Users->Colleges->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'colleges', 'roles'));
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


    public function login(){
        $this->Flash->success('Dos');

     if ($this->request->is('post')) {
        $user = $this->Auth->identify();
         $this->Flash->success('Status: ' . var_dump($user) );
        if ($user && $user['status']) {

            $this->Auth->setUser($user);
            if($user['role_id'] ==2){
             return $this->redirect(['controller' => 'Users', 'action' => 'admin']);
                                 }
         else {
             return $this->redirect(['controller' => 'Users', 'action' => 'home']);
              } 
                                }
                                     }
        else{
        $this->Flash->error('Your username or password is incorrect.');
            }
                             }

    public function logout(){
    $this->Flash->success('You are now logged out.');
    return $this->redirect($this->Auth->logout());
    }

    public function beforeRender(Event $event){
        if($this->Auth->user()){
            $status = $this->Users->get($this->Auth->user('id'))->status;
            if($status != 1){
                $this->Flash->error(__('user been disabled'));
                return $this->redirect($this->Auth->logout());
            }
        }
    }
       public function home()
    {
        $this->render();
    }
    public function admin()
    {
        $user = $this->Users->get($this->Auth->user('id'), [
            'contain' => ['Colleges', 'Roles']
        ]);

        $this->set('user', $user);
    }

    public function isAuthorized($user){
        /*    if(isset($user['status']) and $user['status'] === '1')
        {
            return true;
        }*/
    return true;
    }
}

