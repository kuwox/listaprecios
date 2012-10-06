<div class="clientes form">
<?php echo $this->Form->create('Cliente');?>
	<fieldset>
		<legend><?php echo __('Editar Cliente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('xpf_users_id', array('label' => 'Usuario'));
		echo $this->Form->input('tipos_clientes_id', array('label' => 'Tipo Cliente'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar'));?>
</br>
<?php echo $this->Html->link('Volver a la lista de clientes', array('controller' => 'clientes', 'action' => 'index')); ?>
</div>
