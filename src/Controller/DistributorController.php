<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Distributor Controller
 *
 * @property \App\Model\Table\DistributorTable $Distributor
 * @method \App\Model\Entity\Distributor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DistributorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $distributor = $this->paginate($this->Distributor);

        $this->set(compact('distributor'));
    }

    /**
     * View method
     *
     * @param string|null $id Distributor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $distributor = $this->Distributor->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('distributor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $distributor = $this->Distributor->newEmptyEntity();
        if ($this->request->is('post')) {
            $distributor = $this->Distributor->patchEntity($distributor, $this->request->getData());
            

            //Recuperar datos de Sunat
            
            $cookie = array(
                'cookie'        => array(
                    'use'       => true,
                    'file'      => __DIR__ . "/cookie.txt"
                )
            );
            $config = array(
                'representantes_legales'    => true,
                'cantidad_trabajadores'     => true,
                'establecimientos'          => true,
                'cookie'                    => $cookie
            );
            $sunat = new \Sunat\ruc( $config );
            
            $ruc = $_POST['ruc'];
            
            $search = $sunat->consulta( $ruc );
            
            if( $search->success == true )
            {
                $nombre = $search->result->razon_social;
                $direccion = $search->result->direccion;
            }
            //Fin de recuperacion
            $distributor->name = $nombre;
            $distributor->direction = $direccion;

            if ($this->Distributor->save($distributor)) {
                $this->Flash->success(__('The distributor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The distributor could not be saved. Please, try again.'));
        }
        $this->set(compact('distributor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Distributor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $distributor = $this->Distributor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $distributor = $this->Distributor->patchEntity($distributor, $this->request->getData());
            if ($this->Distributor->save($distributor)) {
                $this->Flash->success(__('The distributor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The distributor could not be saved. Please, try again.'));
        }
        $this->set(compact('distributor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Distributor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $distributor = $this->Distributor->get($id);
        if ($this->Distributor->delete($distributor)) {
            $this->Flash->success(__('The distributor has been deleted.'));
        } else {
            $this->Flash->error(__('The distributor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
