<div class="tiposListas form">
<?php echo $this->Form->create('TiposLista');?>
	<fieldset>
		<legend><?php echo __('Editar Tipo de Lista'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar'));?>
</br>
<?php echo $this->Html->link('Volver a la lista de Tipos de lista', array('controller' => 'TiposListas', 'action' => 'index')); ?>	
</div>
