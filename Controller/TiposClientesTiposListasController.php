<?php
App::uses('AppController', 'Controller');
/**
 * TiposClientesTiposListas Controller
 *
 * @property TiposClientesTiposLista $TiposClientesTiposLista
 */
class TiposClientesTiposListasController extends AppController {


// prueba del AjaxMultiUpload
//var $helpers = array('AjaxMultiUpload.Upload');


// funciones para el Upload de Miles


public function upload() {
	if (!empty($this->data)) {
		if ($data = $this->Uploader->upload('nombre_archivo')) {
			// Upload successful, do whatever
		}
	}
}



/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TiposClientesTiposLista->recursive = 0;
		$this->set('tiposClientesTiposListas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TiposClientesTiposLista->id = $id;
		if (!$this->TiposClientesTiposLista->exists()) {
			throw new NotFoundException(__('Tipos clientes tipos lista inválido'));
		}
		$this->set('tiposClientesTiposLista', $this->TiposClientesTiposLista->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TiposClientesTiposLista->create();
			if ($this->TiposClientesTiposLista->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos del tipo de cliente y sus listas han sido guardados'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del tipo de cliente y sus listas no pudieron ser guardados. Intente de nuevo'));
			}
		}
		$tiposClientes = $this->TiposClientesTiposLista->TiposCliente->find('list', array('fields' => array('TiposCliente.id', 'TiposCliente.nombre_tipo_cliente')));
		$tiposListas = $this->TiposClientesTiposLista->TiposLista->find('list', array('fields' => array('TiposLista.id', 'TiposLista.nombre')));
		$this->set(compact('tiposClientes', 'tiposListas'));
	}	
	

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TiposClientesTiposLista->id = $id;
		if (!$this->TiposClientesTiposLista->exists()) {
			throw new NotFoundException(__('Tipos clientes tipos lista inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TiposClientesTiposLista->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos del tipo de cliente y sus listas han sido guardados'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del tipo de cliente y sus listas no pudieron ser guardados. Intente de nuevo'));
			}
		} else {
			$this->request->data = $this->TiposClientesTiposLista->read(null, $id);
		}
		$tiposClientes = $this->TiposClientesTiposLista->TiposCliente->find('list', array('fields' => array('TiposCliente.id', 'TiposCliente.nombre_tipo_cliente')));
		$tiposListas = $this->TiposClientesTiposLista->TiposLista->find('list', array('fields' => array('TiposLista.id', 'TiposLista.nombre')));
		$this->set(compact('tiposClientes', 'tiposListas'));
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
		$this->TiposClientesTiposLista->id = $id;
		if (!$this->TiposClientesTiposLista->exists()) {
			throw new NotFoundException(__('Tipos clientes tipos lista inválido'));
		}
		if ($this->TiposClientesTiposLista->delete()) {
			$this->Session->setFlash(__('El tipo de cliente y sus listas ha sido eliminado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El tipo de cliente y sus listas no puede ser eliminado'));
		$this->redirect(array('action' => 'index'));
	}
}
