<?php
App::uses('AppController', 'Controller');
/**
 * TiposClientes Controller
 *
 * @property TiposCliente $TiposCliente
 */
class TiposClientesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TiposCliente->recursive = 0;
		$this->set('tiposClientes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TiposCliente->id = $id;
		if (!$this->TiposCliente->exists()) {
			throw new NotFoundException(__('Tipo de Cliente inválido'));
		}
		$this->set('tiposCliente', $this->TiposCliente->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TiposCliente->create();
			if ($this->TiposCliente->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos del tipo de cliente han sido guardados'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del tipo de cliente no pudieron ser guardados. Intente de nuevo'));
			}
		}
		$tiposListas = $this->TiposCliente->TiposLista->find('list',array('fields' => array('TiposLista.id', 'TiposLista.nombre')));
		$this->set(compact('tiposListas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TiposCliente->id = $id;
		if (!$this->TiposCliente->exists()) {
			throw new NotFoundException(__('Tipo de Cliente inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TiposCliente->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos del tipo de cliente han sido guardados'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del tipo de cliente no pudieron ser guardados. Intente de nuevo'));
			}
		} else {
			$this->request->data = $this->TiposCliente->read(null, $id);
		}
		$tiposListas = $this->TiposCliente->TiposLista->find('list', array('fields' => array('TiposLista.id', 'TiposLista.nombre')));
		//$nombreArchivo = $this->TiposCliente->TiposLista->TiposClientesTiposLista->nombre_archivo;
		$this->set(compact('tiposListas','nombreArchivo'));
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
		$this->TiposCliente->id = $id;
		if (!$this->TiposCliente->exists()) {
			throw new NotFoundException(__('Tipo de cliente inválido'));
		}
		if ($this->TiposCliente->delete()) {
			$this->Session->setFlash(__('El tipo de cliente ha sido eliminado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El tipo de cliente no puede ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}
}
