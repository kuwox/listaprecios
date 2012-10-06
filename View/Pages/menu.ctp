
<div class="actions">
	<h2><?php echo __('Acciones'); ?></h2>
		<li><?php echo $this->Html->link(__('Clientes'), array('controller' => 'Clientes', 'action' => 'index')); ?> </li>
		</br>
		<li><?php echo $this->Html->link(__('Tipos de Clientes'), array('controller' => 'tipos_clientes', 'action' => 'index')); ?> </li>
		</br>
		<li><?php echo $this->Html->link(__('Tipos de Listas'), array('controller' => 'TiposListas', 'action' => 'index')); ?> </li>
		</br>
		<li><?php echo $this->Html->link(__('Listas y tipos de clientes'), array('controller' => 'TiposClientesTiposListas', 'action' => 'index')); ?> </li>
</div>
