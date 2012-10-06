<div class="tiposClientesTiposListas form">
<?php echo $this->Form->create('TiposClientesTiposLista', array('type' => 'file'));?>
	<fieldset>
		<legend><?php echo __('Nuevo Tipo Cliente asociado a Tipo de lista'); ?></legend>
	<?php
		echo $this->Form->input('tipos_cliente_id');
		echo $this->Form->input('tipos_lista_id', array('label' => 'Tipo Lista'));
		echo $this->Form->input('nombre_archivo', array('type' => 'file', 'div' => 'nombrearchivo', 'label' => 'Archivo asociado'));
		echo '</br>';
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar'));?>
</br>
<?php echo $this->Html->link('Volver a la lista de Tipos Clientes y tipos de lista', array('controller' => 'TiposClientesTiposListas', 'action' => 'index')); ?>	

</div>
