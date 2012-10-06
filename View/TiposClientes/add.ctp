<div class="tiposClientes form">
<?php echo $this->Form->create('TiposCliente');?>
	<fieldset>
		<legend><?php echo __('Nuevo Tipo de Cliente'); ?></legend>
	<?php
		echo $this->Form->input('nombre_tipo_cliente');
		echo $this->Form->input('TiposLista', array('label' => 'Tipos de lista asociados'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar'));?>
</br>
<?php echo $this->Html->link('Volver a la lista de Tipos de cliente', array('controller' => 'TiposClientes', 'action' => 'index')); ?>

</div>

