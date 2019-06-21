<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Competitors Controller
 *
 * @property \App\Model\Table\CompetitorsTable $Competitors
 *
 * @method \App\Model\Entity\Competitor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompetitorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Tutors', 'Colleges']
        ];
        $competitors = $this->paginate($this->Competitors);

        $this->set(compact('competitors'));
    }

    /**
     * View method
     *
     * @param string|null $id Competitor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $competitor = $this->Competitors->get($id, [
            'contain' => ['Users', 'Tutors', 'Colleges']
        ]);

        $this->set('competitor', $competitor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $competitor = $this->Competitors->newEntity();
        if ($this->request->is('post')) {
            $competitor = $this->Competitors->patchEntity($competitor, $this->request->getData());
            if ($this->Competitors->save($competitor)) {
                $this->Flash->success(__('The competitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The competitor could not be saved. Please, try again.'));
        }
        $users = $this->Competitors->Users->find('list', ['limit' => 200]);
        $tutors = $this->Competitors->Tutors->find('list', ['limit' => 200]);
        $colleges = $this->Competitors->Colleges->find('list', ['limit' => 200]);
        $this->set(compact('competitor', 'users', 'tutors', 'colleges'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Competitor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $competitor = $this->Competitors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $competitor = $this->Competitors->patchEntity($competitor, $this->request->getData());
            if ($this->Competitors->save($competitor)) {
                $this->Flash->success(__('The competitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The competitor could not be saved. Please, try again.'));
        }
        $users = $this->Competitors->Users->find('list', ['limit' => 200]);
        $tutors = $this->Competitors->Tutors->find('list', ['limit' => 200]);
        $colleges = $this->Competitors->Colleges->find('list', ['limit' => 200]);
        $this->set(compact('competitor', 'users', 'tutors', 'colleges'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Competitor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $competitor = $this->Competitors->get($id);
        if ($this->Competitors->delete($competitor)) {
            $this->Flash->success(__('The competitor has been deleted.'));
        } else {
            $this->Flash->error(__('The competitor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
