<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Kuotes Controller
 *
 * @property \App\Model\Table\KuotesTable $Kuotes
 *
 * @method \App\Model\Entity\Kuote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KuotesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Authors'],
        ];
        $kuotes = $this->paginate($this->Kuotes);

        $this->set(compact('kuotes'));
    }

    /**
     * View method
     *
     * @param string|null $id Kuote id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kuote = $this->Kuotes->get($id, [
            'contain' => ['Authors'],
        ]);

        $this->set('kuote', $kuote);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kuote = $this->Kuotes->newEmptyEntity();
        if ($this->request->is('post')) {
            $kuote = $this->Kuotes->patchEntity($kuote, $this->request->getData());
            if ($this->Kuotes->save($kuote)) {
                $this->Flash->success(__('The kuote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kuote could not be saved. Please, try again.'));
        }
        $authors = $this->Kuotes->Authors->find('list', ['limit' => 200]);
        $this->set(compact('kuote', 'authors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kuote id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kuote = $this->Kuotes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kuote = $this->Kuotes->patchEntity($kuote, $this->request->getData());
            if ($this->Kuotes->save($kuote)) {
                $this->Flash->success(__('The kuote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kuote could not be saved. Please, try again.'));
        }
        $authors = $this->Kuotes->Authors->find('list', ['limit' => 200]);
        $this->set(compact('kuote', 'authors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kuote id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kuote = $this->Kuotes->get($id);
        if ($this->Kuotes->delete($kuote)) {
            $this->Flash->success(__('The kuote has been deleted.'));
        } else {
            $this->Flash->error(__('The kuote could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
