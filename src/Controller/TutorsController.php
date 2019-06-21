<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tutors Controller
 *
 * @property \App\Model\Table\TutorsTable $Tutors
 *
 * @method \App\Model\Entity\Tutor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TutorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Colleges', 'Levels']
        ];
        $tutors = $this->paginate($this->Tutors);

        $this->set(compact('tutors'));
    }

    /**
     * View method
     *
     * @param string|null $id Tutor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tutor = $this->Tutors->get($id, [
            'contain' => ['Colleges', 'Levels', 'Students']
        ]);

        $this->set('tutor', $tutor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tutor = $this->Tutors->newEntity();
        if ($this->request->is('post')) {
            $tutor = $this->Tutors->patchEntity($tutor, $this->request->getData());
            if ($this->Tutors->save($tutor)) {
                $this->Flash->success(__('The tutor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tutor could not be saved. Please, try again.'));
        }
        $colleges = $this->Tutors->Colleges->find('list', ['limit' => 200]);
        $levels = $this->Tutors->Levels->find('list', ['limit' => 200]);
        $this->set(compact('tutor', 'colleges', 'levels'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tutor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tutor = $this->Tutors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tutor = $this->Tutors->patchEntity($tutor, $this->request->getData());
            if ($this->Tutors->save($tutor)) {
                $this->Flash->success(__('The tutor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tutor could not be saved. Please, try again.'));
        }
        $colleges = $this->Tutors->Colleges->find('list', ['limit' => 200]);
        $levels = $this->Tutors->Levels->find('list', ['limit' => 200]);
        $this->set(compact('tutor', 'colleges', 'levels'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tutor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tutor = $this->Tutors->get($id);
        if ($this->Tutors->delete($tutor)) {
            $this->Flash->success(__('The tutor has been deleted.'));
        } else {
            $this->Flash->error(__('The tutor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user){
        /*    if(isset($user['status']) and $user['status'] === '1')
        {
            return true;
        }*/
    return true;
    }
}
