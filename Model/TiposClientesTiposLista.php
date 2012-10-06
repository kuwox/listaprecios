<?php
App::uses('AppModel', 'Model');
/**
 * TiposClientesTiposLista Model
 *
 * @property TiposCliente $TiposCliente
 * @property TiposLista $TiposLista
 */
class TiposClientesTiposLista extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_archivo';
	

//public $actsAs = array('FileModel');



//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TiposCliente' => array(
			'className' => 'TiposCliente',
			'foreignKey' => 'tipos_cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TiposLista' => array(
			'className' => 'TiposLista',
			'foreignKey' => 'tipos_lista_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
// Arreglo para el Uploader de Miles
public $actsAs = array( 
	'Uploader.Attachment' => array(
		'nombre_archivo' => array(
			'name'		=> '',		// Name of the function to use to format filenames
			'baseDir'	=> '',			// See UploaderComponent::$baseDir
			'uploadDir'	=> 'pdfs',			// See UploaderComponent::$uploadDir
			'dbColumn'	=> 'nombre_archivo',	// The database column name to save the path to
			'importFrom'	=> '',			// Path or URL to import file
			'defaultPath'	=> '',			// Default file path if no upload present
			'maxNameLength'	=> 80,			// Max file name length
			'overwrite'	=> true,		// Overwrite file with same name if it exists
			'stopSave'	=> true,		// Stop the model save() if upload fails
			'allowEmpty'	=> true,		// Allow an empty file upload to continue
			'transforms'	=> array(),		// What transformations to do on images: scale, resize, etc
			's3'		=> array(),		// Array of Amazon S3 settings
			'metaColumns'	=> array(		// Mapping of meta data to database fields
				'ext' => '',
				'type' => '',
				'size' => '',
				'group' => '',
				'width' => '',
				'height' => '',
				'filesize' => ''
			)
		)
	)
);	
	
}
