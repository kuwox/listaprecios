<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	
	public $components = array(
//		'DebugKit.Toolbar',  // activar el depurador
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'menu'),
            // 'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
			'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
        )
    );
   
 //   esta función se utiliza para decirle al componente de autenticación que cosas puede ver el usuario sin haberse registrado (login)
//    también se pueden establecer mensajes de error particulares
   public function beforeFilter() {
   
   	$this->Auth->allow('index','view');
	$this->Auth->authError = 'Por favor ingresa con tu usuario';
	$this->Auth->loginError = 'Usuario o contraseña incorrecta';
	
	$this->set('ingreso', $this->_ingresado());
    $this->set('nombreusuario', $this->_nombreusuario());
   }
   
   public function _ingresado () {
      $ingreso = FALSE;
	  if ($this->Auth->loggedIn()) {
	  	$ingreso = TRUE;
	  }
	  return $ingreso;
   }

   public function _nombreusuario () {
      $nombreusuario = NULL;
	  if ($this->Auth->loggedIn()) {
	  	// tomar el registro (arreglo) guardado en el componente
	  	$arreglo_usuario = $this->Auth->user('User');
		$nombreusuario=$arreglo_usuario['name'];
	  }
	  return $nombreusuario;
   }
   
}
