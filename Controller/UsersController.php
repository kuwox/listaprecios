<?php
App::uses('AppController', 'Controller');


class UsersController extends AppController {

public function beforeFilter() {
    parent::beforeFilter(); // extiende el before filter del Appcontroller
    $this->Auth->allow('login','add'); // solo puede entrar al login de este controlador
}

public function login() {
	
	$usuario = null;
	#buscamos un usuario en la BASE de datos a partir de su 'username'
		if ($this->request->is('post')) {
		if ($this->User->validates(array('fieldList' => array('username', 'password')))) {
			if(!empty($this->data) && strlen($this->data['User']['password'])>6) 
				$usuario = $this->User->findAllByUsername($this->data['User']['username']);
				#verificamos que el usuario exista
				if(count($usuario) == 1) {
					// toma el primer elemento del arreglo de registros
					$usuario = $usuario[0];
					#hacemos el login del joomla
					#dividiendo el password en la BD en 2 partes a partir del simbolo ':'
					#$parts	= explode( ':', $usuario['User']['password'] );
					$parts   = explode( ':', $usuario['User']['password'] );
					#$parts	= explode( ':', $user['User']['password'] );
					#la 1ra parte es el password ya encriptado
					$crypt	= $parts[0];
					#la 2da la cadena salt q se concatena con el password para ecriptar
					$salt	= @$parts[1];
					#Joomla ocupa MD5 como mecanismo de encriptacion y cakephp SHA1
					$passcrypt = md5($this->data['User']['password'].$salt);
					#comparamos el password encriptado con el generado.
					if ($crypt == $passcrypt) {
						#CONGRATULATION! ';¬D,
						//$this->Auth->login($this->data);
						// guardar el registro del usuario conectado en el componente Auth
						$this->Auth->login($usuario); 
						
						// si es un administrador enviarlo al redireccionamiento por defecto del componente, de lo contrario debe enviarlo
						// a la página de impresión de lista
						$rol_usuario = $usuario['User']['usertype'];
						if (($rol_usuario == 'Administrator')||($rol_usuario == 'Super Administrator')){
							$this->redirect($this->Auth->redirect());
						}	
						else {
							// si es cualquier otro usuario llevarlo a la página de la lista
							$id_usuario= $usuario['User']['id'];
							$nombre_usuario = $usuario['User']['name'];
							$vinculo_lista = "/marcadeagua/seleccionar_lista.php?usr=".$id_usuario."&nbusr=".$nombre_usuario;
							$this->redirect($vinculo_lista);
						}
					}
					else {
						$this->Session->setFlash(__('Usuario o contrase&ntilde;a incorrecta'));
					}
			}
		else {
			$this->Session->setFlash(__('Por favor indique el usuario y la contrase&ntilde;a'));
		}
		}
	}
}

public function logout() {
    $this->redirect($this->Auth->logout());
}




}


   
  
