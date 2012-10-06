<?php
App::uses('AppController', 'Controller');
/**
 * TiposListas Controller
 *
 * @property TiposLista $TiposLista
 */
class TiposListasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TiposLista->recursive = 0;
		$this->set('tiposListas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TiposLista->id = $id;
		if (!$this->TiposLista->exists()) {
			throw new NotFoundException(__('Tipo de Lista Inválido'));
		}
		$this->set('tiposLista', $this->TiposLista->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TiposLista->create();
			if ($this->TiposLista->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos del tipo de lista han sido guardados'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del tipo de lista no pudieron ser guardados. Intente de nuevo'));
			}
		}
		$tiposClientes = $this->TiposLista->TiposCliente->find('list');
		$this->set(compact('tiposClientes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TiposLista->id = $id;
		if (!$this->TiposLista->exists()) {
			throw new NotFoundException(__('Tipo de lista inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TiposLista->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos del tipo de lista han sido guardados'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del tipo de lista no pudieron ser guardados. Intente de nuevo'));
			}
		} else {
			$this->request->data = $this->TiposLista->read(null, $id);
		}
		$tiposClientes = $this->TiposLista->TiposCliente->find('list');
		$this->set(compact('tiposClientes'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->TiposLista->id = $id;
		if (!$this->TiposLista->exists()) {
			throw new NotFoundException(__('Tipo de lista inválido'));
		}
		if ($this->TiposLista->delete()) {
			$this->Session->setFlash(__('El tipo de lista ha sido eliminado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El tipo de lista no puede ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}
}
