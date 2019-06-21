<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Colleges Controller
 *
 * @property \App\Model\Table\CollegesTable $Colleges
 *
 * @method \App\Model\Entity\College[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CollegesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Levels']
        ];
        $colleges = $this->paginate($this->Colleges);

        $this->set(compact('colleges'));
    }

    /**
     * View method
     *
     * @param string|null $id College id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $college = $this->Colleges->get($id, [
            'contain' => ['Levels', 'Students', 'Tutors', 'Users']
        ]);

        $this->set('college', $college);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $college = $this->Colleges->newEntity();
        if ($this->request->is('post')) {
            $college = $this->Colleges->patchEntity($college, $this->request->getData());
            if ($this->Colleges->save($college)) {
                $this->Flash->success(__('The college has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The college could not be saved. Please, try again.'));
        }
        $levels = $this->Colleges->Levels->find('list', ['limit' => 200]);
        $this->set(compact('college', 'levels'));
    }

    /**
     * Edit method
     *
     * @param string|null $id College id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $college = $this->Colleges->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $college = $this->Colleges->patchEntity($college, $this->request->getData());
            if ($this->Colleges->save($college)) {
                $this->Flash->success(__('The college has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The college could not be saved. Please, try again.'));
        }
        $levels = $this->Colleges->Levels->find('list', ['limit' => 200]);
        $this->set(compact('college', 'levels'));
    }

    /**
     * Delete method
     *
     * @param string|null $id College id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $college = $this->Colleges->get($id);
        if ($this->Colleges->delete($college)) {
            $this->Flash->success(__('The college has been deleted.'));
        } else {
            $this->Flash->error(__('The college could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
