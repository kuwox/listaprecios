<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 * @property Cliente $Cliente
 */
class ClientesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		// ejecutar el query que inserta los nuevos registros en la tabla xpf_users, agregados desde la interfaz del joomla
		$this->Cliente->query("INSERT INTO clientes SELECT Null, xpf_users.id, 1 FROM xpf_users WHERE xpf_users.id NOT IN (SELECT clientes.xpf_users_id FROM clientes WHERE clientes.xpf_users_id=xpf_users.id )"); 
	
		$this->Cliente->recursive = 0;
		$this->set('clientes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Cliente inválido'));
		}
		$this->set('cliente', $this->Cliente->read(null, $id));		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos del cliente han sido guardados'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del cliente no pudieron ser guardados. Intente de nuevo'));
			}
		}
//		$xpfUsers = $this->Cliente->XpfUser->find('list');
//		$tiposClientes = $this->Cliente->TiposCliente->find('list', array('fields' => array('TiposClientes.id', 'TiposClientes.nombre_tipo_cliente')));
		$this->set(compact('xpfUsers', 'tiposClientes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos del cliente han sido guardados'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del cliente no pudieron ser guardados. Intente de nuevo'));
			}
		} else {
			$this->request->data = $this->Cliente->read(null, $id);
		}
		
		// NOTA VLADIMIR
		//  Cliente->XpfUsers y Cliente->TiposClientes se refieren a las relaciones dentro de la clase Cliente del modelo
		$xpfUsers = $this->Cliente->XpfUsers->find('list');
		$tiposClientes = $this->Cliente->TiposClientes->find('list', array('fields' => array('TiposClientes.id', 'TiposClientes.nombre_tipo_cliente')));

		$this->set(compact('xpfUsers', 'tiposClientes'));
		
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
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Cliente inválido'));
		}
		if ($this->Cliente->delete()) {
			$this->Session->setFlash(__('El cliente ha sido eliminado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El cliente ha sido eliminado'));
		$this->redirect(array('action' => 'index'));
	}
}
